<?php
include "partials/connection.php";
$showAlert=false;
$showError=false;
//Insert data into database
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $course=$_POST['course'];
    $file=$_FILES['fileToUpload']['name'];
    $temp_name=$_FILES['fileToUpload']['tmp_name'];
    $target_path= "uploads/".basename($file); 
    if(move_uploaded_file($temp_name,$target_path)){
      $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql="INSERT INTO `student`(`name`,`email`,`password`,`course`,`photo`,`timestamp`) VALUES('$name','$email','$hash','$course','$file',current_timestamp())";
        $result=mysqli_query($conn,$sql);
        if($result){
            $showAlert=true;
        }
        else{
            $showError=true;
        }
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php
    if($showAlert){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successful!</strong> Your data has been successfully inserted.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    if($showError){
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Your data was not inserted. Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
    }
    ?>
    <div class="container mt-3">
        <h1 align="center">Student Registration</h1>
        <form method="post" action="index.php" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="name" class="form-label"><b>Name</b></label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label"><b>Email</b></label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label"><b>Password</b></label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="mb-3">
      <label for="course" class="form-label"><b>Choose Course</b></label>
      <select class="form-select" name="course">
      <option value="webdev">Web Development</option>
      <option value="ai">AI</option>
      <option value="data">Data Science</option>
    </select>
      </div>
      <div class="mb-3">
      <label for="fileToUpload" class="form-label"><b>Choose file</b></label>
      <input class="form-control" type="file" id="fileToUpload" name="fileToUpload">
    </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  <div class="container text-center">
    <a href="login.php" class="btn btn-success mt-3">Login to your account</a>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  </body>
</html>