<?php
    include 'config.php';
    session_start();
    if (!isset($_SESSION['eifeel_id'])) {
        $_SESSION['wrong'] = "<div id='error_msg'>Pls login to your account</div>"; 
        header("Location: ../../signin");
    }
    $sql = "SELECT * FROM users WHERE user_id='{$_SESSION['eifeel_id']}'";
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    $countQuery = "SELECT count(ticket_id) as confirmed_count FROM `ticket` WHERE confirm = 'confirmed' AND user_id={$_SESSION['eifeel_id']}";
    $confirmed = mysqli_fetch_assoc(mysqli_query($connect, $countQuery))['confirmed_count'];

    $allCountQuery = "SELECT count(ticket_id) as ticket_count FROM `ticket` WHERE user_id={$_SESSION['eifeel_id']}";
    $to_confirm = mysqli_fetch_assoc(mysqli_query($connect, $allCountQuery))['ticket_count'];
?>