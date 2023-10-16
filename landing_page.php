<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tsion Academy - A leading school in Addis Ababa committed to academic excellence.">
    <meta name="keywords" content="Tsion School, Tsion Academy, best school in Addis Ababa, best schools, Yosef Endris">
   
    <!-- Add your other CSS and JavaScript includes here -->

    <!-- Canonical URL to prevent duplicate content issues -->
    <link rel="canonical" href="https://tsionacademy.com/">

    <!-- Open Graph meta tags for social sharing -->
    <meta property="og:title" content="Tsion Academy">
    <meta property="og:description" content="A leading school in Addis Ababa committed to academic excellence.">
    <meta property="og:image" content="https://tsionacademy.com/">
    <meta property="og:url" content="https://tsionacademy.com/">
    <meta property="og:type" content="website">

    <!-- Twitter Card meta tags for Twitter sharing -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@yourtwitterhandle">
    <meta name="twitter:title" content="Tsion Academy">
    <meta name="twitter:description" content="A leading school in Addis Ababa committed to academic excellence.">
    <meta name="twitter:image" content="https://tsionacademy.com/">
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <style>
        .ban_img{
    height: 400px;
}
    </style>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="./owlcarousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./css/style2.css" />
    <title>Tsion Acadamy</title>
</head>
<body class="body_col">
     <header>
    
<nav
        id="navbar-scroll-boo"
        class="navbar fixed-top navbar-expand-lg navbar-dark nav-color text-uppercase"
      >
        <div class="container">
          <a class="navbar-brand logo" href="#"><span>Tsion</span> Acadamy</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse navbar-position"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav">
              <li class="nav-item list-style">
                <a class="nav-link active" aria-current="page" href="#home"
                  >Home</a
                >
              </li>
              <li class="nav-item dropdown list-style">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  About us
                </a>
                <ul
                  class="dropdown-menu nav-color"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item dropdown-style" href="#aboutus"
                      >About Us</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item dropdown-style" href="#certs"
                      >Certifications</a
                    >
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item list-style">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
              <li class="nav-item list-style">
                <a class="nav-link" href="#password">Change Password</a>
              </li>
              <li class="nav-item list-style">
                <a class="nav-link" href="#news">Notice Board</a>
              </li>
              <li class="nav-item list-style">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
     <script>
    // Function to toggle the navigation menu on mobile
    function toggleMobileNav() {
        const navbar = document.getElementById('navbarNavDropdown');
        if (navbar.classList.contains('show')) {
            // Collapse the navigation menu
            navbar.classList.remove('show');
        } else {
            // Expand the navigation menu
            navbar.classList.add('show');
        }
    }

    // Function to toggle the "About Us" dropdown
    function toggleAboutUsDropdown() {
        const aboutUsDropdown = document.querySelector('.dropdown-menu');
        if (aboutUsDropdown.classList.contains('show')) {
            // Collapse the "About Us" dropdown
            aboutUsDropdown.classList.remove('show');
        } else {
            // Expand the "About Us" dropdown
            aboutUsDropdown.classList.add('show');
        }
    }

    // Add click event listener to the navbar toggler button
    const navbarToggler = document.querySelector('.navbar-toggler');
    navbarToggler.addEventListener('click', toggleMobileNav);

    // Add click event listener to the "About Us" link
    const aboutUsLink = document.querySelector('#navbarDropdownMenuLink');
    aboutUsLink.addEventListener('click', function (e) {
        e.preventDefault(); // Prevent the default behavior of the link
        toggleAboutUsDropdown(); // Toggle the "About Us" dropdown
    });
    
    // Add click event listeners to all navigation links to collapse the menu
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(function (link) {
        link.addEventListener('click', toggleMobileNav);
    });
</script>


      <!-- vidéo -->
      <div id="home" class="overlay"></div>
      <video
        playsinline="playsinline"
        autoplay="autoplay"
        muted="muted"
        loop="loop"
      >
        <source src="./images/course-video.mp4" type="video/mp4" />
      </video>
      <!-- Endvidéo -->

      <div class="container description text-uppercase">
        <p>Tsion Acadamy</p>
        <h1><span>Dedicated to Learning, </span>Committed to Success.</h1>
        <button>discover more</button>
      </div>
    </header>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    var navbarTogglerButton = document.getElementById("navbar-toggler-button");
    var navbarNavDropdown = document.getElementById("navbarNavDropdown");

    if (navbarTogglerButton && navbarNavDropdown) {
        navbarTogglerButton.addEventListener("click", function () {
            if (navbarNavDropdown.style.display === "block") {
                navbarNavDropdown.style.display = "none";
            } else {
                navbarNavDropdown.style.display = "block";
            }
        });
    }
});
</script>

      <!-- <div class="container description text-uppercase">
        <p>GRADUATE SCHOOL OF MANAGEMENT</p>
        <h1><span>YOUR</span> CLASSROOM</h1>
        <button>discover more</button>
      </div> -->
  

    <div
      data-bs-spy="scroll"
      data-bs-target="#navbar-scroll-boo"
      data-bs-offset="0"
      class="scrollspy-example"
      tabindex="0"
    >
      <section class="features">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="features-post">
                <div class="features-content">
                  <div class="content-show">
                    <h4><i class="fas fa-pencil-alt"></i>Abado Branch</h4>
                  </div>
                  <div class="content collapsed">
                    <p class="d-none d-lg-block d-md-block">
                     Location: Yeka Abado
                     <br>
                     
                      Offered Classes: Kindergarten (KG1 to KG3)
                    <br>
                      Phone Number: +251-9-11-15-86-57
                    <br>
                    Email Address: tsionacademy1@tsionacademy.com
                    </p>
                  
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="features-post">
                <div class="features-content">
                  <div class="content-show">
                    <h4><i class="fas fa-graduation-cap"></i>Yeka Abado Branch (Grade)</h4>
                  </div>
                  <div class="content collapsed">
                    <p class="d-none d-lg-block d-md-block">
                     Location: Yeka Abado
                     <br>
                     Offered Classes: Elementary (Grades 1 to 8)
                  <br>
                      Phone Number: +251-9-11-15-86-57
                   <br>
                    Email Address: tsionacademy2@tsionacademy.com
                    </p>
                   
                     
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
              <div class="features-post">
                <div class="features-content">
                  <div class="content-show">
                    <h4><i class="fa fa-book"></i>Ayat Branch</h4>
                  </div>
                  <div class="content collapsed">
                    <p class="d-none d-lg-block d-md-block">
                     Location: Ayat Gebriel
                  <br>
                     Offered Classes: Kindergarten (KG1 to KG3)
                  <br>
                      Phone Number: +251-9-12-03-34-20
                       <br>
                    Email Address: tsionacademy3@tsionacademy.com
</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="whoWeAre" class="whyUs">
        <div class="container">
          <div class="ligne"></div>
          <div class="header">Why Choose Tsion Acadamy?</div>
          <div class="categorie">
            <ul>
              <li class="list-category best">
                <span class="text-uppercase">
                  Academic<br class="d-block d-lg-none d-md-none" />
                 Excellence
                </span>
                <span>
                  <i class="fas fa-square-full icon"></i>
                </span>
              </li>
              <li class="list-category top">
                <span class="text-uppercase">
                  Strong<br class="d-block d-lg-none d-md-none" />
                 Leadership
                </span>
                <span>
                  <i class="fas fa-square-full icon"></i>
                </span>
              </li>
              <li class="list-category quality">
                <span class="text-uppercase">
                  Continuous <br class="d-block d-lg-none d-md-none" />
                  Improvement
                </span>
                <span>
                  <i class="fas fa-square-full icon"></i>
                </span>
              </li>
            </ul>
            <div class="row">
              <div class="col-12 why quality hide">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="img">
                      <img
                        src="./images/choose-us-image-02.png"
                        width="90%"
                        alt=""
                      />
                    </div>
                  </div>
                  
                </div>
              </div>
              <div class="col-12 why best">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="img">
                      
                      <img
                        src="./images/logo.png"
                        width="90%"
                        alt=""
                        style="margin-top: 10%;"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="aboutus">
                    <div class="content">
                      <h4>About Us</h4>
                      <p style="font-family: Arial, sans-serif; font-size: 16px; line-height: 1.5; text-align: justify; margin: 20px;">
    Welcome to Tsion Academy!<br><br>

    Established in 1998 E.C. by the visionary owner and manager, Ato Yosef Endris, Tsion Academy has been a beacon of educational excellence in Addis Ababa, specifically located in the vibrant Lemi Kura Sub City, Woreda 14 (formerly Yeka Sub City, Woreda 12).<br><br>

    At Tsion Academy, we take great pride in our role as a community leader, providing not only quality education but also contributing to local employment. Currently, we employ over 80 dedicated staff members who share our commitment to nurturing the minds of our future leaders.<br><br>

    Our doors are open to approximately 900 eager students, and we believe in making education accessible to all. To this end, Tsion Academy offers free tuition to 30 deserving students and extends a 50 percent discount to another 25, ensuring that financial barriers do not hinder the pursuit of knowledge.<br><br>

    We understand the importance of a well-rounded education, and we are dedicated to maintaining the highest standards of academic excellence. Our team of disciplined and experienced educators works tirelessly to empower our students with the knowledge and skills they need to thrive in an ever-changing world.<br><br>

    At Tsion Academy, we invite you to join our community, where learning is not just a journey but a lifelong adventure. We look forward to nurturing the potential within each student and continuing our tradition of academic excellence for years to come.
</p>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12 why top hide">
                <div class="row">
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="img">
                      <img
                        src="./images/choose-us-image-03.png"
                        width="90%"
                        alt=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="content">
                      <h4>Top management</h4>
                      <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Pariatur, commodi. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Nulla dolores, doloribus
                        exercitationem impedit voluptatibus aspernatur pariatur
                        nam. Aliquam, eligendi laudantium!
                        <a href="#" class="link">link</a> now.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    

      <section id="certs" class="lesson">
        <div class="container">
          <div style="margin-bottom: 3rem">
            <div class="ligne"></div>
            <div class="header">Certifications</div>
          </div>
          <div class="owl-carousel owl-theme">
            <div class="item">
              <img src="./images/cert1.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>Certificate of outstanding performance</b></p>
                <p>
                 Issued By: Yeka sub city woreda 14 Education Office
                </p>
                
                <div class="info-fo">
                
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert2.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>Certificate of Quality Assurance</b>
              <br>
              Issued By: A.A
Education & Training Quality Regulatory Authority</p>
               
                <div class="info-fo">
                  
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert3.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>1st Level Quality Management Award</b></p>
                <p>
                  Issued By: Abyssinia Award
                  <br>
                  <br>
                </p>
                <div class="info-fo">
                  
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert4.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>2nd Place Overall in 6th Grade Competition</b></p>
                <p>
                  Issued By: Yeka Sub City woreda 14 Education Office
                </p>
                <div class="info-fo">
                 
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert5.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>1st Place Overall in 8th Grade Competition</b></p>
                <p>
                 Issued By: Yeka Sub City woreda 14 Education Office
                </p>
                <div class="info-fo">
                 
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert6.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>Certificate of Outstanding Performance</b></p>
                <p>
                  Issued By: Yeka Sub City woreda 14 Education Office
                </p>
                <div class="info-fo">
                  
                </div>
              </div>
            </div>
            <div class="item">
              <img src="./images/cert7.jpg" width="100%" alt="" />
              <div class="info-course">
                <p><b>Certificate of Outstanding Performance</b></p>
                <p>
                   Issued By: Lemi Kura sub city woreda 14 Education Office
                </p>
                <div class="info-fo">
                 
                </div>
              </div>
            </div>
           
           
          
          </div>
        </div>
      </section>

     

      <section id="contact" class="contact">
        <div class="container">
          <div class="ligne"></div>
          <div class="header">Contact Us</div>
          <div class="contact-content">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-12 col-12 form">
               <form id="myForm" action="sendmail.php" method="post">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Your Name"
                            id="name"
                            name="name"
                            required
                        />
                        <p class="error-message" id="name-error"></p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Your Email"
                            id="email"
                            name="email"
                            required
                        />
                        <p class="error-message" id="email-error"></p>
                    </div>
                </div>
                 </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea
                        class="form-control"
                        id="message"
                        name="message"
                        placeholder="Your message..."
                        rows="5"
                        required
                    ></textarea>
                    <p class="error-message" id="message-error"></p>
                </div>
            </div>
            <div class="col-12">
                <button class="btn send text-uppercase" type="submit">
                    SEND MESSAGE NOW
                </button>
            </div>
        </div>
         </form>
          <script>
        const form = document.getElementById('myForm');
        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');

        form.addEventListener('submit', function (e) {
            let valid = true;

            // Validate Name
            if (nameInput.value.trim() === '') {
                valid = false;
                document.getElementById('name-error').textContent = 'Please enter your name.';
            } else {
                document.getElementById('name-error').textContent = '';
            }

            // Validate Email
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            if (!emailPattern.test(emailInput.value)) {
               valid = false;
                document.getElementById('email-error').textContent = 'Please enter a valid email address.';
            } else {
                document.getElementById('email-error').textContent = '';
            }

            // Validate Message
            if (messageInput.value.trim() === '') {
                valid = false;
                document.getElementById('message-error').textContent = 'Please enter your message.';
            } else {
                document.getElementById('message-error').textContent = '';
            }

            if (!valid) {
                e.preventDefault(); // Prevent form submission if there are errors
            }
        });
    </script>
    <style>
    .error-message {
        color: red;
    }
</style>

              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-12">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.0747617248962!2d38.86695127517964!3d9.056945388550595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b91f99fc83837%3A0x718a0284cccf4963!2sTsion%20Academy!5e0!3m2!1sen!2set!4v1694418913472!5m2!1sen!2set" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
      <section id="password" class="contact">
        <div class="container">
          <div class="ligne"></div>
          <div class="header">Change Password</div>
          <div class="contact-content">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-24 col-24 form">
                <form form id="changePasswordForm" action="change_password.php" method="POST">
                  <div class="row">
                    <div class="col-24">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-24 col-24">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Enter your current password"
                            id="oldPassword" name="oldPassword" required
                          />
                        </div>
                        
                      </div>
                    </div>
                    <div class="col-24">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-24 col-24">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Enter your new password"
                            id="newPassword" name="newPassword" required
                          />
                        </div>
                         <div class="col-24">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-24 col-24">
                          <input
                            type="password"
                            class="form-control"
                            placeholder="Confirm your password"
                            id="confirmPassword" name="confirmPassword" required
                          />
                        </div>
                        
                        </div>
                      </div>
                    </div>
                   
                    <div class="col-12">
                      <button type="submit" class="btn send text-uppercase">
                       Change Password
                      </button>
                    </div>
                  </div>
                </form>
             
            </div>
          </div>
        </div>
      </section>
    <section id="contact" class="contact">
        <div class="container">
          <div class="ligne"></div>
          <div class="header">Notice Board</div>
          
            </div>
          </div>
        </div>
      </section>

    <div class="col1"  id="news">
        
        <div class="d-grid gap-2 m-4">
    <?php
        
        include "admin/configure.php";
        $query = "SELECT * FROM category ORDER BY category_id ASC";
        $result = mysqli_query($connection,$query) or die("Failed");
        $count = mysqli_num_rows($result);
        if($count > 0){
            while($row = mysqli_fetch_assoc($result)){
            
    
    
    ?>
            <a href="category_wise_post.php?cat_id=<?php echo $row['category_id'] ?>" class="btn custom_cat" type="button"><?php echo $row['category_name'] ?></a>
            <?php 
            }
                }
            ?>
            
        </div>
    </div>

    <div class="col2">
    <?php
    include "admin/configure.php";
    $limit = 10;

    if (isset($_GET['page'])) {
        $page_num = $_GET['page'];
    } else {
        $page_num = 1;
    }

    $offset = ($page_num - 1) * $limit;

    $query = "SELECT post.post_id, post.post_title, post.post_date,post.category,post.post_desc,post.image,post.author, 
        category.category_name,users.username FROM post
        LEFT JOIN category ON post.category = category.category_id
        LEFT JOIN users ON post.author = users.id
        ORDER BY post.post_id DESC LIMIT {$offset},{$limit}";

    $result = mysqli_query($connection, $query) or die("Can't Query");
    $count = mysqli_num_rows($result);

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            // Display the posts here using HTML/CSS
    ?>
            <div class="news">
                <div class="news_image">
                    <img class="post_image" src="uploaded_image/<?php echo $row['image'] ?>" alt="">
                </div>
                <div class="post_title">
                    <h4 class="title custom_font"><?php echo $row['post_title'] ?></h4>
                </div>
                <div class="post_details">
                    <div class="">
                        <i class="fas fa-tags custom-icon"></i>
                        <a class="custom_link" href="category_wise_post.php?cat_id=<?php echo $row['category'] ?>"><?php echo $row['category_name'] ?></a>
                    </div>
                    <div class="details">
                        <i class="fas fa-user custom-icon"></i>
                        <a class="custom_link" href="author_wise_post.php?author=<?php echo $row['author'] ?>"><?php echo $row['username'] ?></a>
                    </div>
                    <div class="details">
                        <i class="fas fa-table custom-icon"></i>
                        <a class="custom_link" href=""><?php echo $row['post_date'] ?></a>
                    </div>
                </div>
                <div class="post_desc">
                    <p class="desc_post"><?php echo $row['post_desc'] ?></p>
                </div>
                <div class="read_more d-flex flex-row-reverse m-4">
                    <a href="single_post.php?post_id=<?php echo $row['post_id'] ?>" class="btn text-white bg-custom custom_btn custom_font">read more</a>
                </div>
            </div>
    <?php
        }
    } else {
        echo "<h1 class='text-center'>No News</h1>";
    }

    $query1 = "SELECT * FROM post";
    $result1 = mysqli_query($connection, $query1) or die("Faild!");
    $count1 = mysqli_num_rows($result1);

    if ($count1) {
        $total_data = $count1;
        $total_page = 5;
        echo "<ul class='pagination justify-content-center'>";
        if ($page_num > 1) {
            echo "<li class='page-item'><a class='page-link' href='landing_page.php?page=" . ($page_num - 1) . "'>Previous</a></li>";
        }
        for ($i = 1; $i <= $total_page; $i++) {
            if ($i == $page_num) {
                $active = 'bg-custom text-white';
            } else {
                $active = '';
            }
            echo "<li class='page-item'><a class='page-link " . $active . "' href='landing_page.php?page=" . $i . "'>" . $i . "</a></li>";
        }
        if ($page_num < $total_page) {
            echo "<li class='page-item'><a class='page-link' href='landing_page.php?page=" . ($page_num + 1) . "'>Next</a></li>";
        }
        echo "</ul>";
    }
    ?>
</div>

    <div class="col3">
   <style>
    /* Add this style block inside your HTML document, typically within the head section */
    .custom-search-input {
        border-color: red !important;
        color: black !important;
    }
</style>

<form action="search.php" method="GET" class="d-flex mt-1 p-3">
    <label for="search" class="sr-only">Search</label>
    <input name="search" id="search" class="form-control me-2 custom-search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn text-white bg-custom custom_font" type="submit">Search</button>
</form>

<style>
    ::placeholder {
        color: black !important; /* Change the placeholder text color to black */
        opacity: 1 !important; /* Ensure the placeholder is fully visible */
    }
</style>





    <?php
        
        include "admin/configure.php";
        $query1 = "SELECT * FROM post ORDER BY post_id DESC LIMIT 0,5";
        
        $result1 = mysqli_query($connection,$query1) or die("Can't Query in Recnt");
        $count1 = mysqli_num_rows($result1);
        if($count1 > 0){

            while($row1 = mysqli_fetch_assoc($result1)){
    
    
    ?>

      <div class="recent_p custom_font">
      <a class="custom_a" href="single_post.php?post_id=<?php echo $row1['post_id'] ?>"><?php echo $row1['post_title'] ?></a>
      <hr>
      </div>


      <?php 
            }
        }
      ?>
      
     
      
      
    </div>
    

       <footer>
      <p>
        <i class="fa fa-copyright"></i> COPYRIGHT <span id="date"></span> BY
        Tsion Acadamy Designed By
        <a href="http://github.com/dagimassefa" target="_blank"
          >Dagim Assefa</a
        >
      </p>
    </footer>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script>
    <script src="./js/js.js"></script>

   
</body>
</html>