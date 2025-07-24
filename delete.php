<?php
include('config.php');




$id = $_GET['id'];
// echo $id;

$query = "DELETE from `users` where `id`  = $id";
$result = mysqli_query($connection, $query);

if($result){
     echo "<script>alert('User Successfully Removed')
        window.location.href = 'users.php';
        </script>";
}





?>