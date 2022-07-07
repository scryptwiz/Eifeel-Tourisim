<?php
    require '../../controller/signinController.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eiffel</title>
    <link rel="stylesheet" href="../../assets/styles/signup.css?v=1.2">
    <link rel="stylesheet" href="../../assets/styles/signin.css?v=1.2">
</head>
<body>
    <div id='main'>
        <div id='logo'>
            <h1>
                <a href="../../index.php">Eiffel</a>
            </h1>
        </div>
        <div id='form_container'>
            <form action="#" autocomplete="off" method="POST">
                <h2>Sign in</h2>
                <?PHP echo $msg; ?> 
                <input type="text" name="email" placeholder='example@gmail.com'>
                <input type="password" name="password" placeholder='Password'>
                <div id="buttom_button">
                    <button id='signin'>
                        <a href="../signup.php">Sign up instead</a>
                    </button>
                    <button name="submit" type='submit'>
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>