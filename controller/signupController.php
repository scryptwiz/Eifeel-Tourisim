<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    require '../vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();
    

    include 'config.php';
    $msg='';
    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
        $code = mysqli_real_escape_string($connect, md5(rand()));
        
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number = preg_match('@[0-9]@', $password);
        if (empty($username || $password || $email || $confirm_password)) {
            $msg='<span id="error_msg">All Fields Are Required</span>';
        } else {
            if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
                $msg='<span id="error_msg">Your Password must contain at least 1 uppercase, lowercase, number, special character and must be at least 8 character</span>';
            } else {
                if (mysqli_num_rows(mysqli_query($connect, "SELECT * FROM users WHERE email='{$email}'"))) {
                    $msg = "<span id='error_msg'>{$email} --This Email already exist</span>";
                } else {
                    if ($password == $confirm_password) {
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $sql = "INSERT INTO users (username, email, password, code) VALUES ('{$username}', '{$email}', '{$password}', '{$code}')";
                        $result = mysqli_query($connect, $sql);
                        if ($result) {
                            echo '<div style="display:none">';
                            $mail = new PHPMailer(true);
                            try {
                                //Server settings
                                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                                $mail->isSMTP();                                            //Send using SMTP
                                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                                $mail->Username   = $_ENV['username'];                     //SMTP username
                                $mail->Password   = $_ENV['password'];                       //SMTP password
                                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                                $mail->Port       = $_ENV['port'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
                                //Recipients
                                $mail->setFrom($_ENV['username']);
                                $mail->addAddress($email);
        
                                //Content
                                $mail->isHTML(true);                                  //Set email format to HTML
                                $mail->Subject = 'Eifeel Tour Account Verification';
                                $mail->Body    = 'Here is the verification link <b><a href="http://localhost/Eifeel/component/signin/?verification='.$code.'">http://localhost/Eifeel/component/signin</a></b>';
        
                                $mail->send();
                                echo 'Message has been sent';
                                $msg = "<span id='success_msg'>We've Sent a verification link to your email</span>";
                            } catch (Exception $e) {
                                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                            }
                            echo '</div>';
                        } else {
                            
                            $msg = "<span id='error_msg'>Something went wrong</span>";
                        }
                    } else {
                        $msg = "<span id='error_msg'>Password Does Not Match</span>";
                    }
                }
            }
        }

    }
?>