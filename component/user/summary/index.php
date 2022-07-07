<?php
    require '../../../controller/summaryController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/styles/dashboard.css?v=1.6">
    <link rel="stylesheet" href="../../../assets/styles/summary.css?v=1.3">
    <link rel="stylesheet" href="../../../assets/styles/general_styles.css">
    <script src="../../../assets/js/general.js"></script>
    <script src="../../../assets/js/index.js"></script>
    <title>Eifeel</title>
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
    <div id="main">
        <div id="left_screen_nav">
            <div>
                <!-- Logo -->
                <a id="desk_logo" href="../../../">Eifeel</a>
                <!-- Link -->
                <ul id="nav_link">
                    <li><a href="../dashboard/">Dashboard</a></li>
                    <li><a href="./">Summary</a></li>
                    <li><a href="../edit/">Edit Profile</a></li>
                    <li><a href="../../../controller/logoutController.php">Logout</a></li>
                </ul>
            </div>
        </div> 
        <div id="right_container">
            <!-- mobile navbar -->
            <div id="mobile_nav">
                <a id="desk_logo" href="../../../">Eifeel</a>
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
                                <li><a href="../../../">Home</a></li>
                                <li><a href="../dashboard/">Dashboard</a></li>
                                <li><a href="./">Summary</a></li>
                                <li><a href="../edit/">Edit Profile</a></li>
                                <li><a href="../../../controller/logoutController.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Summary content -->
            <div id="dash_content">
                <h4>Welcome To Your <br>Summary Page, <?php echo $username; ?></h4>
                <div id="summary_stat_cont">
                <?php
                // foreach ($variable as $key => $value) {
                //     # code...
                // }
                    foreach ($resp as $ticket) {
                        echo '<div id="summary_cont">
                        <div>
                            <h5>Date : </h5>
                            <h3 id="num">'.$ticket['date'].'</h3>
                        </div>
                        <div>
                        <h5>Time : </h5>
                        <h3 id="num">'.$ticket['time'].'</h3>
                    </div>
                    <div>
                        <h5>No Of Persons : </h5>
                        <h3 id="num">'.$ticket['no_of_persons'].'</h3>
                    </div>
                    <div>
                        <h5>Age Classification : </h5>
                        <h3 id="num">'.$ticket['age'].'</h3>
                    </div>
                    <div>
                        <h5>Floor Access : </h5>
                        <h3 id="num">'.$ticket['floor_access'].'</h3>
                    </div>
                    <div id="btn">
                        <a href="../../../controller/deleteController.php?id='.$ticket['ticket_id'].'"><button id="danger" name="delete" type="submit">Delete</button></a>
                        <a href="../../../controller/confirmController.php?id='.$ticket['ticket_id'].'"><button id="success" name="confirm" type="submit">'.$ticket['confirm'].'</button></a>
                    </div>
                    </div>';
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>