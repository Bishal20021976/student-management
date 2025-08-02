<?php
$login=false;
$showError=false;
include "partials/connection.php";
//Fetch data from database
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_POST['email'];
    $pass=$_POST['password'];

    $sql="SELECT * FROM `student` WHERE `email`='$email'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $row=mysqli_fetch_assoc($result);
            if(password_verify($pass,$row['password'])){
                session_start();
                $_SESSION['name']=$row['name'];
                $_SESSION['email']=$email;
                $_SESSION['course']=$row['course'];
                $_SESSION['photo']=$row['photo'];
                header("Location:welcome.php?login=true");
                $login=true;
                exit();
            }
            else{
             $showError="Password do not match!";   
            }
        }
        else{
            $showError="Invalid credentials!";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login to Your profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body> 
    <?php
    if($login){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successful!</strong> Youare logged in.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if($showError){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Error!</strong> '.$showError.'
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>
    <?php
    if(isset($_GET['logout'])&&($_GET['logout'])=='true'){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successful!</strong> You are loggedout successfully! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if(isset($_GET['logout'])&&($_GET['logout'])=='false'){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Please try again! 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>
    <div class="container mt-3">
        <h1 align="center">Login to your profile</h1>
        <form action="login.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>