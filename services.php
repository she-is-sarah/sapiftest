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
            </ul>
            <button class="sidebar-button"><a href="#">Enrol In a Course</a></button>
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

<div class="ser">
    <section class="services">
        <h1>OUR SERVICES</h1>
        <p class="intro">At Sapif, we’re committed to equipping individuals with the skills and tools needed to thrive in the digital world. Explore our range of services:</p>
        <div class="service-cards">
            <div class="ser-card">
                <img src="img/solution.svg" alt="Frontend Development">
                <h2>Professional Digital Solutions</h2>
                <p>Unlock the potential of your business with tailored digital solutions. From websites to mobile apps, Sapif ensures professional-grade results that elevate your online presence and streamline your operations.</p>
            </div>
            <div class="ser-card">
                <img src="img/academy.svg" alt="Graphics Design">
                <h2>Digital Skills Academy</h2>
                <p>Learn industry-relevant skills through our comprehensive academy programs. Whether it's design, development, or video editing, our courses are designed to equip you for the professional world.</p>
            </div>
            <div class="ser-card">
                <img src="img/ui_ux.svg" alt="UI/UX Design">
                <h2>UI/UX Design Services</h2>
                <p>Craft exceptional digital experiences with our user-focused design services. We specialize in creating intuitive, visually appealing interfaces that enhance user engagement.</p>
            </div>
            <div class="ser-card">
                <img src="img/video.svg" alt="Smartphone Video Editing">
                <h2>Smartphone Video Editing</h2>
                <p>Turn your ideas into captivating stories with our professional video editing courses and services. Perfect for creating content that resonates with your audience.</p>
            </div>
            <div class="ser-card">
                <img src="img/comminity.svg" alt="Tech Community">
                <h2>Tech Community Building</h2>
                <p>Join Sapif's vibrant community of tech enthusiasts. Network, collaborate, and grow with peers and experts through events, webinars, and challenges.</p>
            </div>
            <div class="ser-card">
                <img src="img/ebooks.svg" alt="Ebook Marketplace">
                <h2>Ebook Marketplace</h2>
                <p>Discover curated tech and lifestyle ebooks or become a partner to sell your own publications. Sapif's marketplace is the perfect platform to share knowledge and connect with readers.</p>
            </div>
            <div class="ser-card">
                <img src="img/graphics.svg" alt="Custom Digital Solutions">
                <h2>Graphics Design for Businesses</h2>
                <p>Elevate your brand with our graphic design services. From logos to marketing materials, we deliver creative solutions tailored to your needs.</p>
            </div>
            <div class="ser-card">
                <img src="img/workshop.svg" alt="Workshops and Webinars">
                <h2>Workshops and Webinars</h2>
                <p>Stay ahead with our engaging workshops and webinars. Learn cutting-edge techniques and insights directly from experienced professionals.</p>
            </div>
            <div class="ser-card">
                <img src="img/content.svg" alt="Digital Marketing">
                <h2>Content Strategy & Branding</h2>
                <p>Build a compelling online presence with expert branding and content strategies. Sapif helps you define your voice and connect with your target audience effectively.
                </p>
            </div>
        </div>
    </section>
</div>

<?php include './includes/footer.php'; ?>