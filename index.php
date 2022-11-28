<?php  ini_set('display_errors', 1); 
        ini_set('display_startup_errors', 1); 
        error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allan Alicante</title>

    <!--========================== UNICONS ================================ -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!--========================== BOXICONS ================================ -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css">
    <!--========================== SWIPER CSS ============================= -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!--============================ CSS ================================== -->
    <link rel="stylesheet" href="assets/css/default.css">
    <!--========================= AOS ANIMATION ===========================-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

</head>

<body>
            <!-- ========================= HEADER ======================== -->
            <header class="header" id="header">
                <nav class="nav container">
                    <a href="#" class="nav_logo">Allan</a>
                    
                    <div class="nav_menu" id="nav-menu">
                        <ul class="nav_list grid">
                                <li class="nav_item">
                                    <a href="#home" class="nav_link active-link">
                                        <i class="uil uil-estate nav_icon"></i> Home
                                    </a>
                                </li>
                                <li class="nav_item">
                                    <a href="#about" class="nav_link">
                                        <i class="uil uil-user nav_icon"></i> About
                                    </a>
                                </li>
                                <li class="nav_item">
                                    <a href="#skills" class="nav_link"> 
                                        <i class="uil uil-file-alt nav_icon"></i> Skills
                                    </a>
                                </li>
                                <li class="nav_item">
                                    <a href="#services" class="nav_link">
                                        <i class="uil uil-briefcase-alt nav_icon"></i> Services
                                    </a>
                                </li>
                                <li class="nav_item">
                                    <a href="#portfolio" class="nav_link">
                                        <i class="uil uil-scenery nav_icon"></i> Porfolio
                                    </a>
                                </li>
                                <li class="nav_item">
                                    <a href="#contact" class="nav_link">
                                        <i class="uil uil-message nav_icon"></i> Contact
                                    </a>
                                </li>
                        </ul>
                        <i class="uil uil-times nav_close " id="nav-close"></i>
                    </div>

                    <div class="nav_btns">
                        <!-- Theme change button -->
                        <i class="uil uil-moon change-theme" id="theme-button"></i>
                        <div class="nav_toggle" id="nav-toggle">
                            <i class="uil uil-apps"></i>
                        </div>
                    </div>
                </nav>
            </header>

    <!-- ========================= MAIN ========================== -->
    <main class="main">
        <!-- ========================= HOME ====================== -->
        <section class="home  section" data-aos="fade-up" id="home">
            <div class="home_container container grid">
                <div class="home_content grid">
                    <div class="home_social">
                        <a href="https://www.linkedin.com/in/allan-gerald-alicante-300316134/" target="_blank" class="home_social-icon">
                            <i class="uil uil-linkedin-alt"></i>
                        </a>

                        <a href="https://www.instagram.com/_allanalicante" target="_blank" class="home_social-icon">
                            <i class="uil uil-instagram-alt"></i>
                        </a>

                        <a href="https://www.github.com/allanalicante" target="_blank" class="home_social-icon">
                            <i class="uil uil-github-alt"></i>
                        </a>
                    </div>

                    <div class="home_img">
                        <svg class="home_blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <mask id="mask0" mask-type="alpha">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                            </mask>
                            <g mask="url(#mask0)">
                                <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                <image class="home_blob-img" x="12" y="-20" href="assets/img/mesmall.png"/>
                            </g>
                        </svg>  
                    </div>

                    <div class="home_data">
                        <h1 class="home_title">Howdy! I'm Allan</h1>
                        <h3 class="home_subtitle">Developer || Code Lover</h3>
                        <p class="home_description">Feel free to scroll while you're here.
                        </p>        
                        <a download="" href="/assets/pdf/Resume - Alicante.pdf" class="button button-flex">
                            Download CV<i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                </div>

                <div class="home_scroll">
                    <a href="#about" class="home_scroll-button button-flex">
                        <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                        <span class="home_scroll-name">Scroll down</span>
                        <i class="uil uil-arrow-down home_scroll-arrow"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- ========================= ABOUT ===================== -->
        <section class="about section" data-aos="fade-right" id="about">
            <h2 class="section_title" >About Me</h2>
            <span class="section_subtitle">My Introduction</span>

            <div class="about_container container grid" >
                <img src="assets/img/me3bg.png" alt="" class="about_img">

                <div class="about_data">
                    <p class="about_description">
                        Hi I'm Allan, a self-driven programmer that specializes in developing 
                        responsive and user-friendly systems and websites.
                    </p>

                    <div class="about_info">
                        <div>
                            <span class="about_info-title">2</span>
                            <span class="about_info-name">Years <br> experience</span>
                        </div>
                        <div>
                            <span class="about_info-title">3</span>
                            <span class="about_info-name">Completed <br> project</span>
                        </div>
                        <div>
                            <span class="about_info-title">1</span>
                            <span class="about_info-name">Companies <br> worked</span>
                        </div>
                    </div>

                    <div class="about_buttons">
                        <a href="#contact" class="button button-flex">
                            Contact Me <i class="uil uil-message button_icon"></i>
                         </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================= SKILLS ==================== -->
        <section class="skills section" data-aos="fade-right" id="skills">
            <h2 class="section_title">My Skill Set</h2>
            <!-- <span class="section_subtitle">Skill set</span> -->

            <div class="skills_container container grid">
                <!-- First Skill Box -->
                <div class="skills_content">
                    <h3 class="skills_title">Web Development</h3>

                    <div class="skills_box">
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">Javascript</h3>
                                    <span class="skills_level">Basic</span>
                                </div>
                            </div>
                        </div>

                        <div class="skills_group">
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">Bootstrap</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_level">Basic</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">VS Code</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Skill Box -->
                <div class="skills_content">
                    <h3 class="skills_title">System Development</h3>
                    
                    <div class="skills_box">
                        <div class="skills_group">
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">C#</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">MySQL</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">Xampp</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                        </div>

                        <div class="skills_group">
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">Visual Studio</h3>
                                    <span class="skills_level">Intermediate</span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <i class="bx bxs-badge-check"></i>
                                <div>
                                    <h3 class="skills_name">Canva (UI)</h3>
                                    <span class="skills_level">Basic</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================= SERVICES ================== -->
        <section class="services section"  data-aos="fade-right" id="services">
            <h2 class="section_title">Services</h2>
            <span class="section_subtitle">What I can do</span>

            <div class="services_container container">
                <!-- Service 1 -->
                <div class="services_content">
                    <div class="services_box">
                        <img src="assets/img/Responsive.png" width="200" height="150" alt="Responsive Image">
                        <h1 class="services_title">Responsive</h1>
                        <h3 class="services_subtitle">I can develop a system/website
                            that can work on any device, regarding the size.
                        </h3>
                    </div>
                </div>

                 <!-- Service 2 -->
                 <div class="services_content">
                    <div class="services_box">
                        <img src="assets/img/Dynamic.png" width="200" height="150" alt="Dynamic Image">
                        <h1 class="services_title">Dynamic</h1>
                        <h3 class="services_subtitle">I can develop a system/website
                            that can be fully controlled by it's user.</h3>
                    </div>
                </div>

                 <!-- Service 3 -->
                 <div class="services_content">
                    <div class="services_box">
                        <img src="assets/img/Clean.png" width="180" height="150" alt="Clean Image" style="padding-top:10px;">
                        <h1 class="services_title">Clean</h1>
                        <h3 class="services_subtitle">I can develop a system/website
                            that can be easily understood by other programmers as well.</h3>
                    </div>
                </div>
            </div>
        </section>

        <!-- ========================= PORTFOLIO ================= -->
        <section class="portfolio section"  data-aos="fade-right" id="portfolio">
            <h2 class="section_title">My Projects</h2>
            <span class="section_subtitle">Most recent work</span>

            <div class="portfolio_container container swiper-container">
                <div class="swiper-wrapper">
                    <!-- ================ PORTFOLIO 1 ============ -->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/Project1Auth.jpg" alt="Project 1" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">SPES Online Registration and Management System</h3>
                            <p class="portfolio_description">A primary school enrollment system.
                                I worked on both front-end and back-end features of this website.
                            </p>
                            <a href="https://enroll.sorsogonpilot.edu.ph/login.php" target="_blank" class="button button-flex button-small portfolio_button">
                                Visit website
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>                         
                        </div>
                    </div>

                    <!-- ================ PORTFOLIO 2 ============ -->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/Project2Admin.jpg" alt="Project 2" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">BELCO BURGER</h3>
                            <p class="portfolio_description">A point-of-sale system created using C# winforms. The system is currently under development.</p>
                            <a href="#" class="button button-flex button-small portfolio_button">
                                Visit website
                                <i class="uil uil-arrow-right button_icon"></i>
                            </a>                         
                        </div>
                    </div>

                        <!-- ================ PORTFOLIO 3 ============ -->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/Project3Web.jpg" alt="Project 3" class="portfolio_img">
    
                            <div class="portfolio_data">
                                <h3 class="portfolio_title">PORTFOLIO WEBSITE</h3>
                                <p class="portfolio_description">A simple portfolio website I made for myself using Front-end stack.</p>
                                <a href="https://allanalicante.github.io/Portfolio-Website/" class="button button-flex button-small portfolio_button">
                                    Visit website
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>                         
                            </div>
                        </div>

                        <!-- ================ PORTFOLIO 4 ============ -->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/Project4Shiba.jpg" alt="Project 4 " class="portfolio_img">
    
                            <div class="portfolio_data">
                                <h3 class="portfolio_title">SHIBA MILKTEA</h3>
                                <p class="portfolio_description">A simple landing page I made for my friend's startup business.</p>
                                <a href="#" class="button button-flex button-small portfolio_button">
                                    Visit website
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>                         
                            </div>
                        </div>

                        <!-- ================ PORTFOLIO 5 ============ -->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/Project5Voting.jpg" alt="Project 5 " class="portfolio_img">
    
                            <div class="portfolio_data">
                                <h3 class="portfolio_title">AUTOMATED VOTING SYSTEM</h3>
                                <p class="portfolio_description">A system I developed for automating student voting for Sawanga National High School. </p>
                                <a href="#" class="button button-flex button-small portfolio_button">
                                    Visit website
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>                         
                            </div>
                        </div>

                        <!-- ================ PORTFOLIO 6 ============ -->
                        <div class="portfolio_content grid swiper-slide">
                            <img src="assets/img/Project6Senior.jpg" alt="Project 6 " class="portfolio_img">
    
                            <div class="portfolio_data">
                                <h3 class="portfolio_title">INFORMATION & MANAGEMENT SYSTEM</h3>
                                <p class="portfolio_description">I created this system using C# winforms for my friends' capstone project.</p>
                                <a href="#" class="button button-flex button-small portfolio_button">
                                    Visit website
                                    <i class="uil uil-arrow-right button_icon"></i>
                                </a>                         
                            </div>
                        </div>

                </div>

                <!-- Add Arrows for Swiper -->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>

                <!-- Add Pagination for Swiper -->
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <!-- ========================= CONTACT =================== -->
        <section class="contact section"  id="contact">
            <h2 class="section_title">Contact Me</h2>
            <span class="section_subtitle">I'd love to hear from you. Drop me a message!</span>

            <div class="contact_container container grid" data-aos="zoom-in">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"> </i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle">09916692138</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"> </i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">alicanteallan7@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"> </i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Sorsogon City - Philippines</span>
                        </div>
                    </div>
                </div>

                <form action="sendmail.php" method="post" class="contact_form grid" enctype="multipart/form-data">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="Name" class="contact_label">Name</label>
                            <input type="text" class="contact_input " id="name" name="name">
                        </div>
                        <div class="contact_content">
                            <label for="Email" class="contact_label">Email</label>
                            <input type="email" class="contact_input " id="email" name="email">
                        </div>                     
                    </div>
                    <div class="contact_content">
                        <label for="Message" class="contact_label">Message</label>
                        <textarea  class="contact_input "  cols="0" rows="7" id="message" name="message"></textarea>
                    </div>
                    <div >
                        <button type="submit" style="border: none; font-family: 'Poppins', sans-serif; font-size: 1rem;" name="submit">
                            <a class="button button-flex">
                                Send message
                                <i class="uil uil-message button_icon"></i>
                            </a>
                        </button>
                    </div>
                </form>
            </div>
        </section>

    </main>

        <!-- ========================= FOOTER ==================== -->
        <div class="footer">
            <div class="footer_bg">
                <div class="footer_container container grid">
                    <div>
                        <h1 class="footer_title">Allan</h1>
                        <span class="footer_subtitle">Web | Software Developer</span>
                    </div>

                    <ul class="footer_links">
                        <li>
                            <a href="#services" class="footer_link">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer_link">Projects</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer_link">Contact</a>
                        </li>
                    </ul>

                    <div class="footer_socials">
                        <a href="https://www.facebook.com/allangeraldalicante" target="_blank" class="footer_social">
                            <i class="uil uil-facebook-f footer_social-icon"></i>
                        </a>
                        <a href="https://www.instagram.com/_allanalicante" target="_blank" class="footer_social">
                            <i class="uil uil-instagram footer_social-icon"></i>
                        </a>
                        <a href="https://twitter.com/_allanalicante" target="_blank" class="footer_social">
                            <i class="uil uil-twitter-alt footer_social-icon"></i>
                        </a>
                    </div>
                </div>

                <p class="footer_copy">&#169; Allan Alicante. All right reserved. 2022</p>
            </div>
        </div>


        <!--========================== SCROLL TOP ============================= -->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>
        <!--========================== SWIPER CSS ============================= -->
        <script src="assets/js/swiper-bundle.min.js"></script>
        <!--========================== MAIN JS ================================ -->
        <script src="assets/js/main.js"></script>
        <!--========================== AOS ANIMATION JS ================================ -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
        duration: 1200,
        })
        </script>
        <!-- ========================= SMTPJS SEND EMAIL JS ======================== -->
        <!-- <script src="https://smtpjs.com/v3/smtp.js"></script>
        <script>
            function sendEmail() {
                Email.send({
                    Host : "smtp.gmail.com",
                    Username : "alicanteallan7@gmail.com",
                    Password : "",
                    To : "alicanteallan7@gmail.com",
                    From : document.getElementById("email").value,
                    Subject: "New Contact Form Inquiry",
                    Body : "Name: " + document.getElementById("name").value
                    + "<br> Email: " + document.getElementById("email").value
                    + "<br> Message: " + document.getElementById("message").value
                }).then(
                    message => alert("Message sent successfully")
                ); 
            }
        </script> -->

</body>
</html>