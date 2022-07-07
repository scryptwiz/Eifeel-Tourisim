<?php
    session_start();
    include 'config.php';
    $msg = '';
    if(isset($_POST['submit'])) {
        if (isset($_SESSION['eifeel_id'])) {
            $date = $_POST['date'];
            $time = $_POST['time'];
            $persons = $_POST['persons'];
            $age = $_POST['age'];
            $floor = $_POST['floor'];
            $user_id = $_SESSION['eifeel_id'];
            if(!empty($date) && !empty($time) && !empty($persons) && !$age==0  && !$floor==0) {
                $query = "INSERT INTO ticket (date, time, no_of_persons, age, floor_access, confirm, user_id) VALUES ('$date', '$time', '$persons', '$age', '$floor', 'Confirm', $user_id)";
                $result = mysqli_query($connect, $query);
                if ($result) {
                    $msg = "<span id='success_msg'>Booked</span";
                    header('location: ../user/summary');
                } else {
                    $msg = "<span id='error_msg'>An Error Occured!!!</span";
                }
            } else {
                $msg = "<div id='error_msg' style='margin-top: 20px'>All fields are required</div";
            }
        } else {
            $_SESSION['wrong'] = "<span id='error_msg'>Please login to your account first</span>";
            header('location: ../signin');
        }
    }
?>