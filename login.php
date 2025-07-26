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

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $db_check = "SELECT * FROM `users` where `email` = '$email' AND `password` = '$pass'";
    $result = mysqli_query($connection, $db_check);
    // print_r($result);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $row['email'];
       echo "<script>
        window.location.href = 'users.php'
        </script>";
    }


}
?>
    
<div class="container">
<h1>Login Form</h1>

<form class="form-group" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        
        <label for="email">Email</label>
        <input class="form-control m-3" type="email" name="email">
    
        <label for="pass">Password</label>
        <input class="form-control m-3" type="password" name="pass">
    
        <input type="Submit" name="submit" value="Sign In" class="btn btn-primary">
    </div>
</form>

</div>






</body>
</html>