<?php
if (isset ($_POST['action']) and $_POST['action'] == 'logout'){
    session_start();
    session_destroy();
    header("location: ../login.php?pesan=logout");
}
?>