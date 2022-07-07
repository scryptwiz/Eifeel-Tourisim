<?php
    include 'config.php';
    $msg='';
    if (isset($_POST['submit'])) {
        if (!empty($_POST['faq'])) {
            $val=$_POST['faq'];
            $query = "INSERT INTO faq (content) VALUES ('$val')";
            $result = mysqli_query($connect, $query);
            if ($result) {
                $msg = "<div id='success_msg' style='margin-top:10px'>Booked</div";
                header('location: ../faq/');
            } else {
                $msg = "<div id='error_msg' style='margin-top:10px'>An Error Occured!!!</div";
                header('location: ../faq/');
            }
        } else {
            $msg='<div id="error_msg" style="margin-top:10px">Field Is Required</div>';
        }
    }

    $query = "SELECT * FROM faq";
    $faq = mysqli_query($connect, $query);
    $resp = [];
    while ($row = $faq->fetch_assoc()) {
        $resp[] = $row;
    }
?>