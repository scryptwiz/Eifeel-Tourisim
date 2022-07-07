<?php
    require '../controller/signupController.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eiffel</title>
    <link rel="stylesheet" href="../assets/styles/signup.css?v=1.67">
</head>
<body>
    <div id='main'>
        <div id='logo'>
            <h1>
                <a href="../index.php">Eiffel</a>
            </h1>
        </div>
        <div id='form_container'>
            <form action="#" method="POST" autocomplete="off">
                <h2>Create An Account</h2>
                <?php
                    echo $msg;
                ?>
                <input type="text" name="username" id="first" value="<?php if (isset($_POST['submit'])) {echo $username;} ?>" placeholder='username' required>
                <input type="text" name="email" value="<?php if (isset($_POST['submit'])) {echo $email;} ?>" placeholder='example@gmail.com' required>
                <input type="password" name="password" placeholder='Password' required>
                <input type="password" name="confirm_password" placeholder='Confirm Password' required>
                <div id="buttom_button">
                    <button id='signin'>
                        <a href="./signin">Sign in instead</a>
                    </button>
                    <button type="submit" name="submit">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>