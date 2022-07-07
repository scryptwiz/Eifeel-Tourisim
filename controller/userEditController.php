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
    $email = $row['email'];
    $_id = $row['user_id'];
    if (isset($_POST['submit'])) {
        $cur_username= $_POST['username'];
        $cur_email= $_POST['email'];
        if (!empty($cur_username && $cur_email)) {
            $update = mysqli_query($connect, "UPDATE users SET username='$cur_username', email='$cur_email' WHERE user_id=$_id");
            // $checkMailSql = "SELECT * FROM users WHERE email='{$email}'";
            // $checked = mysqli_query($connect, $checkMailSql);
            // if (mysqli_num_rows($checked)===1) {
            //     $msg = '<div id"error_msg">Email Already Exist</div>';
            // } else {
            //     $updateEmail = mysqli_query($connect, "UPDATE users SET email='$cur_email' WHERE user_id=$_id");
            // }
            $sql = "SELECT * FROM users WHERE user_id='{$_SESSION['eifeel_id']}'";
            $result = mysqli_query($connect, $sql);
            $row = mysqli_fetch_assoc($result);
            $username = $row['username'];
            $email = $row['email'];
            $_id = $row['user_id'];
        }
    }
?>