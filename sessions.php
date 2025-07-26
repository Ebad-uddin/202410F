<!-- php sessions -->

<?php

session_start();

$_SESSION['userName'] = "Ebad";
$_SESSION['userEmail'] = "ebad@gmail.com";

echo $_SESSION['userName'];



?>