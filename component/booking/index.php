<?php
    require '../../controller/bookingController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tower Of Eiffel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/styles/general_styles.css?v=1.2">
    <link rel="stylesheet" href="../../assets/styles/booking.css?v=1.8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <script src="../../assets/js/general.js"></script>
    <script src="../../assets/js/index.js"></script>
</head>
<body>
    <!-- Loader -->
    <div id="loader_bg">
        <svg id='loader_svg' width="200px" height="200px" viewBox="0 0 100 100">
            <path id="loader_path" fill="none" stroke="orangered" stroke-width="8" stroke-dasharray="42.76482137044271 42.76482137044271" d="M24.3 30C11.4 30 5 43.3 5 50s6.4 20 19.3 20c19.3 0 32.1-40 51.4-40 C88.6 30 95 43.3 95 50s-6.4 20-19.3 20C56.4 70 43.6 30 24.3 30z">
                <animate attributeName="stroke-dashoffset" repeatCount="indefinite" dur="1.282051282051282s" keyTimes="0;1" values="0;256.58892822265625"></animate>
            </path>
        </svg>
    </div>
    <div id='main'>
        <!-- Banner -->
        <div id='banner'>
            <!-- Navbar -->
            <nav id='navbar'>
                <a href="../../index.php" id='logo'>Eiffel</a>
                <!-- Links -->
                <div id='link_wrapper'> 
                    <ul>
                        <!-- Links -->
                        <li>
                            <a href="../../index.php">Home</a>
                        </li>
                        <li>
                            <a href="../../component/booking" id='active'>Book</a>
                        </li>
                        <li>
                            <a href="../../component/faq">FAQ</a>
                        </li>
                        <!-- User -->
                        <li>
                            <div id='user' onclick="user()"></div>
                            <div id="dropdown_content">
                                <a href="../user/dashboard">My Account</a>
                                <a href="../signin" id='next'>Login</a>
                                <a href="../signup.php" id='next'>Registration</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Mobile nav icon -->
                <div id='mobile_nav'>
                    <ul>
                        <li>
                            <button id='menu' onClick='menuIcon()'></button>
                            <button id='close' onClick='closeIcon()'></button>
                        </li>
                    </ul>
                </div>
                <!-- Mobile nav content -->
                <div id='mobile_nav_content'>
                    <div id='mobile_nav_link_container'>
                        <div id='logo_section'>
                            <a href="../../" id='logo'>Eiffel</a>
                        </div>
                        <div id='links_section'>
                            <ul>
                                <!-- Links -->
                                <li> <a href="../../">Home</a></li>
                                <li><a href="./">Booking </a></li>
                                <li><a href="../faq">FAQ</a></li>
                                <li><a href="../signin">Login</a></li>
                                <li><a href="../signup.php">Signup</a></li>
                                <li><a href="../user/dashboard/">My Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Banner Topic -->
            <div id='banner_topic'>
                <h1>Booking Page</h1>
                <p>
                    <span id='link'>
                       <a href="../../index.php">Home</a>
                    </span>
                    <span>></span>
                    <span>Booking</span>
                </p>
            </div>
            <!-- Form -->
        </div>
        <div id="form_container">
            <form action="#" autocomplete="off" method="post">
                <h2>Booking Form</h2>
                <!-- <div> -->
                    <?php
                        echo $msg;
                    ?>
                <!-- </div> -->
                <input type="date" name="date">
                <input type="time" name="time">
                <input type="number" name="persons" placeholder="Number Of Person(s)">
                <div>
                    <label>Age Classification</label>
                    <select name="age" id="">
                        <option value="0">Age Classification</option>
                        <option value="1">0-14 Years</option>
                        <option value="2">15-24 Years</option>
                        <option value="3">25-64 Years</option>
                        <option value="4">65 and above Years</option>
                    </select>
                </div>
                <div>
                    <label>Floor Access</label>
                    <select name="floor" id="">
                        <option value="0">Choose your floor access</option>
                        <option value="Elevator">Elevator</option>
                        <option value="stairs">Stairs</option>
                    </select>
                </div>
                <button type="submit" name="submit">Book</button>
            </form>
        </div>
        <!-- lower Main Container -->
        <div id='mains'>
            <!-- Lower Container -->
            <div id='lower_banner'>
                <!-- Footer -->
                <footer id='footer_container'>
                    <h1>Eiffel Tower</h1>
                    <p>The best tower in an amazing location with great aesthetic and style.</p>
                    <ul id='social_media'>
                        <li id='facebook'></li>
                        <li id='twitter'></li>
                        <li id='youtube'></li>
                        <li id='linkedin'></li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>