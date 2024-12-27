<?php include './includes/header.php'; ?>

<body>
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

<section class="form-section">
    <h3>SEND MESSAGE</h3>
    <h1>Drop a message for any query</h1>
    <p>If you have an idea, we would love to hear about it.</p>
    <div class="contact-form">
        <form action="#" method="post">
            <div class="form-group">
                <input 
                    type="text" 
                    name="name" 
                    placeholder="Full Name" 
                    required 
                    minlength="2" 
                    maxlength="50"
                    class="input"
                >
            </div>

            <div class="form-group">
                <input 
                    type="tel" 
                    name="phone" 
                    placeholder="Phone Number" 
                    required 
                    pattern="[0-9]{10,14}"
                    class="input"
                >
            </div>

            <div class="form-group">
                <input 
                    type="email" 
                    name="email" 
                    placeholder="Email Address" 
                    required
                    class="input"
                >
            </div>

            <div class="form-group">
                <input 
                    type="text" 
                    name="subject" 
                    placeholder="Subject" 
                    required 
                    minlength="3" 
                    maxlength="100"
                    class="input"
                >
            </div>

            <div class="form-group">
                <textarea 
                    name="message" 
                    placeholder="Your Message" 
                    required 
                    minlength="10" 
                    maxlength="500" 
                    rows="5"
                ></textarea>
            </div>
            <button type="submit" class="submit-btnn">Send Message</button>
        </form>
    </div>
    <div class="connect">
        <div class="connect-header">
            <h3>CONNECT WITH <span class="bold">SAPIF</span> DIRECTLY</h3>
        </div>
        <div class="connect-items">
            <div class="connect-item">
                <div class="connect-icon">
                    <img src="img/hours.svg" alt="hours Icon">
                </div>
                <div class="connect-info">
                    <h4>Business Hours</h4>
                    <p>Monday to Friday: 9 AM - 5 PM EST</p>
                    <p>24/7 Email Support</p>
                </div>
            </div>
            <div class="connect-item">
                <div class="connect-icon">
                    <img src="img/email.svg" alt="Email Icon">
                </div>
                <div class="connect-info">
                    <h4>Email</h4>
                    <p>sapifinfo@gmail.com</p>
                    <p>sapifinfo@gmail.com</p>
                </div>
            </div>
            <div class="connect-item">
                <div class="connect-icon">
                    <img src="img/phone.svg" alt="Phone Icon">
                </div>
                <div class="connect-info">
                    <h4>Phone</h4>
                    <p>+234 7073533116</p>
                    <p>+234 7073533116</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footer.php'; ?>