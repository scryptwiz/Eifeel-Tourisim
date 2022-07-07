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

    $query = "SELECT * FROM ticket WHERE user_id='{$_SESSION['eifeel_id']}'";
    $tickets = mysqli_query($connect, $query);
    // $row = mysqli_fetch_assoc($tickets);
    // $row = $tickets->fetch_assoc();
    $resp = [];
    while ($row = $tickets->fetch_assoc()) {
        $resp[] = $row;
    }

    if (isset($_POST['edit'])) {
         $tick = "SELECT * FROM ticket WHERE user_id='{$_SESSION['eifeel_id']}'";
         $tic = mysqli_query($connect, $tick);
        //  echo $tic;
    }

    if (isset($_POST['delete'])) {
        
    }

    if (isset($_POST['confirm'])) {
        
    }
    // echo json_encode($resp);
    // $date = $row['date'];
    // $time = $row['time'];
    // $no_of_persons = $row['no_of_persons'];
    // $age = $row['age'];
    // $floor_access = $row['floor_access'];
?>