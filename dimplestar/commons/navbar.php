<head>
<link rel="stylesheet" type="text/css" href="style/style.css" />
<link rel="icon" href="images/icon.ico" type="image/x-con">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="slide/js/jquery.js"></script>
<script src="slide/js/amazingslider.js"></script>
<script src="slide/js/initslider-1.js"></script>
</head>
<div id="header">
    <nav id="navbar">
        <a href="index.html">
            <img src="images/logo.png" alt="Logo" class="logo" href="index.html">
        </a>
    </nav>

    <ul id="mainnav">
        <li><a href="index.php"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="about.php"><i class="fas fa-info-circle"></i><span>About Us</span></a></li>
        <li><a href="terminal.php"><i class="fas fa-map-marker-alt"></i><span>Terminals</span></a></li>
        <li><a href="routeschedule.php"><i class="fas fa-bus"></i><span>Routes</span></a></li>
        <li><a href="contact.php"><i class="fas fa-envelope"></i><span>Contact</span></a></li>
        <li><a href="book.php"><i class="fas fa-ticket-alt"></i><span>Book Now</span></a></li>
        
        <!-- Auth button now part of the same list -->
        <?php
            session_start();
            if(isset($_SESSION['email'])){
                echo "<li><a href='logout.php'><i class='fas fa-sign-out-alt'></i><span>Logout</span></a></li>";
            } else {
                echo "<li><a href='signlog.php'><i class='fas fa-user'></i><span>Login / Signup</span></a></li>";
            }
        ?>
    </ul>
</div>
