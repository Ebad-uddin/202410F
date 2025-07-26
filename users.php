<?php

include('config.php');
session_start();
if(!isset($_SESSION['user_id'])){
    echo "<script>
    window.location.href = 'login.php'
    </script>";
}


?>
<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <style>
            /* body{
                background-color: #000000;
            } */
        </style>
    </head>

    <body>
        <div class="container">
    <h1>Registered Users</h1>
    <?php
                    $query = "SELECT * FROM `users`";

                    $result = mysqli_query($connection, $query);

                    // print_r($result); die;

                    if($result){
                        if(mysqli_num_rows($result) > 0){
                        ?>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($result)){
                        // print_r($row[$k]); die;
                    ?>
                    <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td>
                            <a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']?>">Edit</a>
                            <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']?>">Delete</a>
                        </td>
                    </tr>
                <?php  
                    }
                    }
                    }
                    // session_destroy();
                ?>
            </tbody>
        </table>
    </div>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
