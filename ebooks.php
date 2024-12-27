<?php include './includes/header.php'; ?>

<div class="preloader">
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<!--Mobile View-->
<div class="mobileview">
    <header>
        <img src="img/sapiflogo.PNG" class="logo">
        <div class="ham">
            <button class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>
    <!--sidebar-->
    <div class="sidebar" id="sidebar">
        <button class="sidebar-close" id="close-sidebar"></button>
        <div class="sidebar-content">
            <ul>
                <li><a href="index"></i>Home</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="ebooks">E-books</a></li>
                <li><a href="contact">Contact Us</a></li>
                <!-- <li><button class="be2"><a href="#">Enrol In a Course</a></button><br></li>-->
            </ul>
            <button class="sidebar-button"><a href="#">Enrol In a Course</a></button>
            <!--<div class="social-center" id="socials">
                <ul>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>

                </ul>
            </div> -->
        </div>
    </div>
</div>

<!--Navbar-->
<div class="largescreen">
    <nav>
        <img src="img/sapiflogo.PNG" class="logo">
        <div class="firstul">
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="ebooks">E-books</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </div>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
        <button class="nav-button"><a href="#">Enrol In a Course</a></button>
    </nav>
</div>

<!--ebooks-->
<section class="e-book">
    <div class="ebooks">
        <h1>WELCOME TO THE SAPIF MARKETPLACE!</h1>
        <div class="upcoming-books">
            <h2>Stay Tuned for Amazing Books</h2>
            <p>We're working hard to bring you the best tech and lifestyle ebooks. Check back soon for our latest releases!</p>
        </div>
        <p class="partner-text">We're looking for partners to sell their tech and lifestyle books on our platform.</p>
        <a href="#" class="cta">Become a Partner</a>
    </div>
</section>


<?php include './includes/footer.php'; ?>