<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: index.php");
}
if ($_SESSION['role'] == 1) {
    header("location: post.php");
}

include "configure.php";
$limit = 20;

if (isset($_GET['page'])) {
    $page_num = $_GET['page'];
} else {
    $page_num = 1;
}

// Initialize search conditions
$search_conditions = array();

// Check if a username or first_name is provided in the search
if (isset($_GET['username']) && !empty($_GET['username'])) {
    $username = $_GET['username'];
    $search_conditions[] = "username LIKE '%$username%'";
}
if (isset($_GET['first_name']) && !empty($_GET['first_name'])) {
    $first_name = $_GET['first_name'];
    $search_conditions[] = "first_name LIKE '%$first_name%'";
}

// Construct the search condition using OR operator
if (!empty($search_conditions)) {
    $search_condition = "WHERE " . implode(" OR ", $search_conditions);
} else {
    $search_condition = "";
}

$offset = ($page_num - 1) * $limit;

$query = "SELECT * FROM users $search_condition ORDER BY id ASC LIMIT {$offset}, {$limit}";
$result = mysqli_query($connection, $query) or die("Failed");
$count = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <title>Users</title>
    <style>
        .form-group {
            margin-right: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand text-white" href="#">Tsion Academy</a>
            <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="post.php">Post News / Notice </a>
                    </li>
                    <?php if ($_SESSION['role'] == 0) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="category.php">Grade Control Center</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="users.php">User Management</a>
                        </li>
                    <?php } ?>
                </ul>
                <span class="navbar-text text-white">
                    <a href="logout.php" class="btn btn-outline-danger">Logout</a>
                </span>
            </div>
        </div>
    </nav>
    <br>
    <br>
    <a href="add_user.php" type="button" class="btn btn-primary">Add User</a>
    <br>
    <br>
    <form action="users.php" method="GET" class="form-inline">
    <div class="row">
        <div class="col-md-6 mb-2">
            <input type="text" class="form-control" name="username" placeholder="Search by Phone Number" style="width: 100%;">
        </div>
        <div class="col-md-6 mb-2">
            <input type="text" class="form-control" name="first_name" placeholder="Search by First Name" style="width: 100%;">
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary" style="margin-bottom:10px;">Search</button>
        </div>
    </div>
</form>

    <?php
    if ($count > 0) {
    ?>
    <div class="table-responsive">
        <table class="table caption-top">
            <thead class="bg-primary text-white">
            <tr>
                <th scope="col">ID NO.</th>
                <th scope="col">Full Name</th>
                <th scope="col">Username</th>
                <th scope="col">Role</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                <th scope="col">Convert to PDF</th> <!-- Add this column header -->
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr id="record-<?php echo $row['id']; ?>"> <!-- Added unique ID for the row -->
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['first_name'] . " " . $row['last_name'] ?></td>
                    <td><?php echo $row['username'] ?></td>
                    <td><?php
                        if ($row['role'] == 1) {
                            echo "Moderator";
                        } else {
                            echo "Admin";
                        }
                        ?></td>
                    <td><a href="edit_user.php?id=<?php echo $row['id'] ?>">Edit</a></td>
                    <td><a onclick="return confirm('Press OK for Delete')"
                           href="delete_user.php?id=<?php echo $row['id'] ?>">Delete</a></td>
                    <td> <!-- "Convert to PDF" button for each row -->
                        <button class="btn btn-primary" onclick="convertToPDF(<?php echo $row['id']; ?>)">
                            Convert to PDF
                        </button>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <?php
    } else {
        echo "<p>No results found.</p>";
    }
    ?>
     <?php
    $query1 = "SELECT * FROM users";
    $result1 = mysqli_query($connection, $query1) or die("Failed!");
    $count1 = mysqli_num_rows($result1);
    if ($count1) {
        $total_data = $count1;
        $total_page = ceil($count1 / $limit);
        echo "<ul class='pagination justify-content-center'>";
        if ($page_num > 1) {
            echo "<li class='page-item'><a class='page-link' href='users.php?page=" . ($page_num - 1) . "'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $page_num) {
                $active = 'active';
            } else {
                $active = '';
            }
            echo "<li class='page-item " . $active . "'><a class='page-link' href='users.php?page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($page_num < $total_page) {
            echo "<li class='page-item'><a class='page-link' href='users.php?page=" . ($page_num + 1) . "'>Next</a></li>";
        }
        echo "</ul>";
    }
    ?>
</div>
<button id="convertAllToPDF" class="btn btn-primary">Convert All to PDF</button> <!-- Add the "Convert All to PDF" button -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.4/html2pdf.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>

<script>
// Function to convert a row to PDF using html2pdf
function convertToPDF(id) {
    const element = document.querySelector(`#record-${id}`); // Select the row container
    const rowContent = element.outerHTML; // Get the HTML content of the row

    // Extract specific columns (Full Name and Username) from the row
    const columns = rowContent.match(/<td>(.*?)<\/td>/g).slice(0, 2).map(td => td.replace(/<[^>]*>/g, ''));

    // Format the content for PDF with styling
// Format the content for PDF with styling
const formattedContent = `
 <div style="font-family: 'Arial', sans-serif; font-size: 15px; padding: 20px; background-color: #f0f0f0; border: 2px solid #333; border-radius: 10px;">
    <p style="font-weight: bold; font-size: 24px; margin: 0 0 20px 0;">Exciting News!</p>
    <p style="margin: 0 0 20px 0;">
  We're thrilled to announce that the Tsion Academy news portal is now live. Discover tailored news by grade, custom filters, and keyword search for better community communication at <a href="www.tsionacademy.com" style="color: #007bff; text-decoration: none;">www.tsionacademy.com</a>. Please use the following credentials to log in:
</p>
<p style="margin: 0 0 20px 0;">
  <strong>Important:</strong> For security reasons, please remember to change your password at your first login.
</p>


   <ul style="list-style-type: disc; margin: 0 0 10px 0; padding-left: 20px;">
    <li><strong>Student Name:</strong> ${columns[0]}</li>
    <li><strong>Username:</strong> ${columns[1]}</li>
    <li><strong>Default Password:</strong> password</li>
    <li><strong>Website Link:</strong> <a href="www.tsionacademy.com" style="color: #007bff; text-decoration: none;">www.tsionacademy.com</a></li>
</ul>
</div>



    </div>
`;


    // Append the header row for PDF
    const headerRow = `<tr>
        <th>Content</th>
    </tr>`;

    const updatedRowContent = `${headerRow}
        <tr>
            <td>${formattedContent}</td>
        </tr>`;

    const options = {
        margin: 10,
        filename: `user_details_${id}.pdf`,
        image: { type: 'jpeg', quality: 0.98 },
        html2canvas: { scale: 2 },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' },
    };

    html2pdf()
        .from(updatedRowContent) // Pass the updated HTML content here
        .set(options)
        .toPdf()
        .save();
}
</script>

</body>
</html>
