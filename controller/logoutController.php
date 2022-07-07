<?php
    session_start();
    if (isset($_SESSION['eifeel_id'])) {
        unset($_SESSION['eifeel_id']);
        header('location: ../component/signin');
    }
?>