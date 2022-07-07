<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tower Of Eiffel</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index.css?v=1.2">
    <link rel="stylesheet" href="./assets/styles/general_styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;900&display=swap" rel="stylesheet">
    <script src="./assets/js/general.js"></script>
    <script src="./assets/js/index.js"></script>
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
    
    <!-- Main-page -->
    <div id='main'>
        <!-- Banner -->
        <div id='banner'>
            <!-- Navbar -->
            <nav id='navbar'>
                <a href="./index.php" id='logo'>Eiffel</a>
                <!-- Links -->
                <div id='link_wrapper'>
                    <ul>
                        <!-- Links -->
                        <li>
                            <a href="./index.php" id='active'>Home</a>
                        </li>
                        <li>
                            <a href="./component/booking">Book</a>
                        </li>
                        <li>
                            <a href="./component/faq">FAQ</a>
                        </li>
                        <!-- User -->
                        <li>
                            <div id='user' onclick="user()"></div>
                            <div id="dropdown_content">
                                <a href="./component/user/dashboard">My Account</a>
                                <a href="./component/signin" id='next'>Login</a>
                                <a href="./component/signup.php" id='next'>Registration</a>
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
                            <a href="#" id='logo'>Eiffel</a>
                        </div>
                        <div id='links_section'>
                            <ul>
                                <!-- Links -->
                                <li> <a href="./">Home</a></li>
                                <li><a href="./component/booking/">Booking </a></li>
                                <li><a href="./component/faq/">FAQ</a></li>
                                <li><a href="./component/signin/">Login</a></li>
                                <li><a href="./component/signup.php">Signup</a></li>
                                <li><a href="./component/user/dashboard/">My Dashboard</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- middle content -->
            <div id='banner_content'>
                <p>Welcome to Eiffel</p>
                <h1>Journey To Explore </br> The World</h1>
                <a id='book_link'>Book Your Travel</a>
            </div>
        </div>
        <div id='lower_banner'>
            <!-- First Topic -->
            <div id='topic'>
                <h1>Gallery</h1>
                <div id='sub_topic'>
                    <p>Below are beautiful pictures of eifeel tower tourisim center. The gallery contains many pictures you would like to see. </p>
                    <!-- <button>Visit Gallery</button> -->
                </div>
            </div>

            <!-- Available Tours -->
            <div id='tours_container'>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower1.jpg" alt="">
                    </div>
                </div>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower2.jpg" alt="">
                    </div>
                </div>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower3.jpg" alt="">
                    </div>
                </div>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower4.jpg" alt="">
                    </div>
                </div>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower3.jpg" alt="">
                    </div>
                </div>
                <div id='tours'>
                    <div id='img_container'>
                        <img src="./assets/images/bg_images/eiffel-tower2.jpg" alt="">
                    </div>
                </div>
            </div>

             <!-- Review -->
            <div id='reviews_container'>
                <div id='reviews_content_container'>
                    <!-- Review Header -->
                    <div id='reviews_content_header'>
                        <h1>Travelers Review</h1>
                        <p>These are awesome satisfing travellers review you would like to read.</p>
                    </div>
                    <!-- Review Containers -->
                    <div id='reviews_sub_container'>
                        <!-- Container 1 -->
                        <div>
                            <div id='reviews_content'>
                                <div id='profile_container'>
                                    <div id='user_img'></div>
                                    <div id='user_name_rating'>
                                        <h1>Lisa</h1>
                                        <ul>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='review_message'>
                                Amazing place. One of the best Tourist website I’ve ever used. Very relaxing place - unique architecture and tastefully designed. Eduardo and Lupita were very helpful whenever I had a question. I highly recommend staying here!
                                </div>
                            </div>
                        </div>
                        <!-- Container 2 -->
                        <div>
                            <div id='reviews_content'>
                                <div id='profile_container'>
                                    <div id='user_img'></div>
                                    <div id='user_name_rating'>
                                        <h1>Waverly</h1>
                                        <ul>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='review_message'>
                                Eifeel Tower is a spectacularly beautiful designed Tower in the most perfect location. Surrounded by great restaurants and markets, I would highly recommend Eifeel Tower for anyone coming to Paris. Eduardo was so easy to communicate with and Lupita was fantastic and made my stay a joy! Anything I needed she was right there. I plan to stay in this gorgeous home every time I come to Paris!!
                                </div>
                            </div>
                        </div>
                        <!-- Container 3 -->
                        <div>
                            <div id='reviews_content'>
                                <div id='profile_container'>
                                    <div id='user_img'></div>
                                    <div id='user_name_rating'>
                                        <h1>Eve</h1>
                                        <ul>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                            <li id='star'></li>
                                        </ul>
                                    </div>
                                </div>
                                <div id='review_message'>
                                Eifeel Tower is one of the best Tower I have encountered traveling. Extremely accommodating and helpful prior to check in. The place was so incredible. Easily one of our favorite Tower we have stayed in. We will for sure return for another trip.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
</body>
</html>