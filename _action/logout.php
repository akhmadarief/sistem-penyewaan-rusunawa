<?php
    if ($_POST['action'] == 'logout'){
        session_start();
        session_destroy();
        header("location: ../login?pesan=logout");
    }
?>
