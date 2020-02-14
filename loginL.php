<?php
session_start();
$username="";
$errors= array();

if (isset($_POST['login'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'hotelreservation');
  $email=mysqli_real_escape_string($conn, $_POST['email']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
if (empty($email)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors)==0) {
    $password=md5($password);
    $query="SELECT * FROM clientreg WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn, $query);
    if (mysqli_num_rows($result)==1) {
      $_SESSION['email']=$email;
      header('location:home.php');
    }
    else {
      array_push($errors,"combination of email and password is wrong");
    }
  }
  mysqli_close($conn);
}
 ?>
