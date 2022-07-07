<?php
    include 'config.php';
    $delete = "DELETE FROM ticket WHERE ticket_id={$_GET['id']}";
    $del = mysqli_query($connect, $delete);
    if ($del) {
        header("Location: ../component/user/summary");
    }
?>