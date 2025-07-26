<?php
include('config.php');

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $user_id = $_POST['user_id'];

    $query = "UPDATE `users` SET `name` = '$name',  `email` = '$email' where `id` = '$user_id'";

    $result  = mysqli_query($connection, $query);

    if($result){
         echo "<script>alert('Record updated successfully')
        window.location.href = 'users.php';
        </script>";
    }

}




?>