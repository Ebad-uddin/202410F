<?php
include('config.php');


$id = $_GET['id'];

$query = "SELECT * from `users` where `id` = '$id'";

$result = mysqli_query($connection, $query);
 if($result){
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
// echo $id;
// print_r($row); die;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    

<div class="container">
<h1>Update Form</h1>

<form class="form-group" action="update.php" method="post">
        
            <label for="name">Name</label>
            <input class="form-control m-3" value="<?php echo $row['name']?>" type="text" name="name">
        
        <label for="email">Email</label>
        <input class="form-control m-3" type="email" value="<?php echo $row['email']?>" name="email">
        <input class="form-control m-3" type="hidden" value="<?php echo $row['id']?>" name="user_id">
        <input type="Submit" name="submit" value="Submit" class="btn btn-primary">
    </div>
</form>

</div>


<?php

    }
}

?>



</body>
</html>