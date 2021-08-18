<?php require '<forms/connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kisame's Resume</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: MyResume - v4.3.0
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body onload="hello()">

  <!-- ======= Mobile nav toggle button ======= -->
  <!-- <button type="button" class="mobile-nav-toggle d-xl-none"><i class="bi bi-list mobile-nav-toggle"></i></button> -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex flex-column justify-content-center">

    <nav id="navbar" class="navbar nav-menu">
      <ul>
        <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
        <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center">
    <div class="container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Kayode Adesina</h1>
      <p>I'm a <span class="typed" data-typed-items="Developer, Freelancer, Photographer"></span></p>
      <div class="social-links">
        <a href="https://twitter.com/KisameHolmes?s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://github.com/adesinak4" class="facebook"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/kayode-adesina-75b45a125/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi, I'm Kayode and welcome to my website.</p>
        </div>

        <div class="row">
          <div class="col-lg-2">
            <img src="assets/img/profile-img.jpg" class="img-fluid img-lg" alt="">
          </div>
          <div class="col-lg-10 pt-4 pt-lg-0 content">
            <h3>Web &amp; Back-End Developer.</h3>
            <p class="fst-italic">
              I'm a proactive Back-End Developer with experience in Web Development. I'm versed in Back-End Development and Front End design using PHP, JavaScript, HTML, CSS, MySQL.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>12 July 1996</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+234 706 1726 467</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>adesinak4@gmail.com</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Lagos, Nigeria</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <img src="assets/img/logo.png" class="img-fluid img-lg" alt="">
              </div>
            </div>
            <p>
              I've been coding for almost 3 years now. starting with HTML & CSS in 2018, moving on to WordPress that same year before I finally settled on PHP late 2019. It has been a wonderful experience for me.
              I'm currently undertaking a virtual internship program with <a href="https://zuri.team/"><strong>Zuri</strong></a> and I'm in stage 2 for the Back-End Track. I love solving problems and I hope to be able to help you solve yours. You can contact me using the form at the bottom of the page. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Skills</h2>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">60%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">MySQL <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Resume</h2>
        </div>

        <div class="row">
          <div class="col-lg-6">
            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>University of Lagos (Computer Science)</h4>
              <h5>2012 - 2018</h5>
            </div>
            <div class="resume-item">
              <h4>University of Ibadan (Mathematics)</h4>
              <h5>2019 - </h5>
            </div>
          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4>Back-End Developer</h4>
              <h5>2020 - 2021</h5>
              <p><em>FAStrust Innovations, Lagos, Nigeria</em></p>
              <ul>
                <li>Tasked to manage the company's website and solutions.</li>
                <li>Built websites for clients of the company</li>
                <li>Organized and maintained the content calendar</li>
                <li>Came up with Designs for the posts made on the Company's Social Media Platforms</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Web Development Officer</h4>
              <h5>2021 - Present</h5>
              <p><em>Global T&T Solutions, Lagos, Nigeria</em></p>
              <ul>
                <li>Tasked with managing the various solutions that exists</li>
                <li>Tasked with making updates and adding new features to the solutions as needed</li>
                <li>Tasked with building solutions for external clients</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Full Stack Software Engineer</h4>
              <h5>2021 - Present</h5>
              <p><em>Ckrowd Africa Technology & Solutions Limited, Ibadan, Nigeria</em></p>
              <ul>
                <li>Tasked with managing the various solutions that exists</li>
                <li>Tasked with making updates and adding new features to the solutions as needed</li>
                <li>Working in an advisory capacity on Tech based situations</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row mt-1">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>17 Oluyombo Street, Ikosi-Ketu, Lagos</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>adesinak4@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+234 706 1726 467</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><input type="submit" value="Submit" name="submit"></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Kayode Adesina</h3>
      <div class="social-links">
        <a href="https://twitter.com/KisameHolmes?s=09" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://github.com/adesinak4" class="facebook"><i class="bx bxl-github"></i></a>
        <a href="https://www.linkedin.com/in/kayode-adesina-75b45a125/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: [license-url] -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
  function hello(){
    alert("Hi, I'm Kayode, Welcome to my Website");
    }
  </script>

</body>

</html>