<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SMARTENROLL | Enrollment Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>
<body>

<!-- Background Slideshow -->
<div class="slideshow">
    <img src="assets/img1.jpg" class="slide active">
    <img src="assets/slide2.jpg" class="slide">
    <img src="assets/slide3.jpg" class="slide">
</div>

<!-- Overlay -->
<div class="overlay"></div>

<!-- Header -->
<header>
    <div class="logo">
        <img src="assets/logo.png" alt="AMI Nexus Logo">
        <span>SMARTENROLL</span>
    </div>

    <nav>
        <a href="#">Home</a>
       <a href="#programs">Programs</a>
        <a href="#">About us</a>
        <a href="#">Contact</a>
    </nav>
</header>

<!-- Hero Section -->
<section class="hero">
    <h1>Experience Smart Enrollment</h1>
    <p>
        SMARTENROLL is a modern Enrollment Management System designed to simplify
        admissions, streamline records, and empower institutions.
    </p>

    <div class="cta-buttons">
        <a href="enroll.php" class="btn primary">Enroll Now</a>
        <a href="#" class="btn secondary">Learn More</a>
    </div>
</section>
<section id="programs" class="programs">

    <!-- Program 1 -->
    <div class="program-item">
        <div class="program-image" data-aos="fade-right">
            <img src="assets/toddler.jpg" alt="Toddler Program">
        </div>
        <div class="program-content" data-aos="fade-left">
            <h2>Toddler</h2>
            <h4>18 to 34 months</h4>
            <p>
                Our toddler program nurtures curiosity and independence through
                guided play and early social development.
            </p>
        </div>
    </div>

    <!-- Program 2 -->
    <div class="program-item reverse">
        <div class="program-image" data-aos="fade-left">
            <img src="assets/casa.jpg" alt="Preschool Program">
        </div>
        <div class="program-content" data-aos="fade-right">
            <h2>Casa</h2>
            <h4>3 to 4 years old</h4>
            <p>
                Our preschool program strengthens foundational learning skills
                and prepares children for kindergarten success.
            </p>
        </div>
    </div>

</section>
<section class="about-us">
    <div class="about-container">
        <h2>About AMI Nexus</h2>
        <p>
            AMI Nexus is an innovative Enrollment Management System built to support
            academic institutions in managing admissions, student records, and
            academic workflows efficiently.
        </p>
        <p>
            Designed with simplicity, security, and scalability in mind, AMI Nexus
            empowers schools to focus on what matters most — quality education.
        </p>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <div class="footer-container">

        <!-- Logo / Brand -->
        <div class="footer-brand">
            <img src="assets/logo.png" alt="AMI Nexus Logo">
        </div>

        <!-- Get In Touch -->
        <div class="footer-column">
            <h3>Get In Touch</h3>
            <p>(045) 624-0215</p>
            <p>SNS Building, Aurea St. Samsonville</p>
            <p>Subd. 2010 Dau, Mabalacat, Pampanga</p>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <!-- Quick Links -->
        <div class="footer-column">
            <h3>Quick Links</h3>
            <a href="#">Home</a>
            <a href="#">Events</a>
            <a href="#">Academic Track</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
            <a href="#">AMI Nexus</a>
        </div>

    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom">
        © <?php echo date("Y"); ?> AMI Nexus. All Rights Reserved.
    </div>
</footer>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 1000,      // animation speed
    once: true,          // animate only once
    easing: 'ease-in-out'
  });
</script>
<!-- JS -->
<script src="script.js"></script>
</body>
</html>
