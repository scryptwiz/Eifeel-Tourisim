<?php
    include 'config.php';
    $confirm = "SELECT * FROM ticket WHERE ticket_id={$_GET['id']}";
    $result = mysqli_query($connect, $confirm);
    $row = mysqli_fetch_assoc($result);
    $conf = $row['confirm'];
    if ($conf=='Confirm') {
        $confirmed = "UPDATE ticket SET confirm='Confirmed' WHERE ticket_id={$_GET['id']}";
        $confirme = mysqli_query($connect, $confirmed);
        header("Location: ../component/user/summary");
    } else {
        header("Location: ../component/user/summary");
    }
?>