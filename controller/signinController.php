<?php
    include 'config.php';
    session_start();
    $msg = '';
    if (isset($_SESSION['wrong'])) {
        $msg = $_SESSION['wrong'];
        unset($_SESSION['wrong']);
    }
    if (isset($_GET['verification'])) {
        if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM users WHERE code='{$_GET['verification']}'")) > 0) {
            $query = mysqli_query($connect, "UPDATE users SET code='' WHERE code='{$_GET['verification']}'");
            if ($query) {
                $msg = "<div id='success_msg'>Account verification has been successfully completed.</div>";
            }
        } else {
            header("Location: ../signin");
        }
    }
    if (isset($_POST['submit'])) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $sql = "SELECT * FROM users WHERE email='{$email}'";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result)===1) {
            $row = mysqli_fetch_assoc($result);

            if (!empty($row['code'])) {
                $msg = "<div id='error_msg'>Pls verify your account</div>";
            } else {
                $passwordhash = $row['password'];
                $passIsValid = password_verify($password, $passwordhash);
                if ($passIsValid) {
                    $_SESSION['eifeel_id'] = $row['user_id'];
                    header("Location: ../user/dashboard");
                } else {
                    $msg = "<div id='error_msg'>Incorrect Password</div>";
                }
            }
        } else {
            $msg = "<div id='error_msg'>Email No Registered</div>";
        }
    }
?>