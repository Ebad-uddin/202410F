<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $query = "INSERT INTO `users` (`name` , `email` , `password`) VALUES ('$name' , '$email' , '$pass')";
    
    $result = mysqli_query($connection , $query);
    if($result){
        echo "<script>alert('Registration Successful')
        window.location.href = 'users.php';
        </script>";
    }
}
?>
    
<div class="container">
<h1>Registration Form</h1>

<form class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        
            <label for="name">Name</label>
            <input class="form-control m-3" type="text" name="name">
        
        <label for="email">Email</label>
        <input class="form-control m-3" type="email" name="email">
    
        <label for="pass">Password</label>
        <input class="form-control m-3" type="password" name="pass">
    
        <input type="Submit" name="submit" value="Submit" class="btn btn-primary">
    </div>
</form>

</div>






</body>
</html>