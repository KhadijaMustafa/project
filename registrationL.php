<?php
session_start();
$errors = array();
if (isset($_POST['register'])) {
  $conn=mysqli_connect('localhost','root','','hotelreservation');
  $fName=mysqli_real_escape_string($conn, $_POST['fName']);
  $lName=mysqli_real_escape_string($conn, $_POST['lName']);
  $email=mysqli_real_escape_string($conn, $_POST['email']);
  $nic=mysqli_real_escape_string($conn, $_POST['nic']);
  $phoneNum=mysqli_real_escape_string($conn, $_POST['phoneNum']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
  $confirmPassword=mysqli_real_escape_string($conn, $_POST['confirmPassword']);
  $security_question = mysqli_real_escape_string($conn, $_POST['select_question']);
  $security_answer = mysqli_real_escape_string($conn, $_POST['q_answer']);
  if ($password != $confirmPassword) {
	array_push($errors, "The two passwords do not match");
  }
  $user_check_query="SELECT * FROM clientreg WHERE email='$email' LIMIT 1";
  $result= mysqli_query($conn, $user_check_query);
  $user=mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['email']===$email) {
      array_push($errors,"email already exist");
    }
  }
  if (count($errors)==0) {
    $confirmedPassword=md5($password);
    $query="INSERT INTO clientreg (`fName`,`lName`, `email`, `password`, `nicNum`, `phoneNum`, `s_question`, `q_answer`) VALUES ('$fName','$lName', '$email', '$confirmedPassword', '$nic', '$phoneNum','$security_question','$security_answer')";
    $responce=mysqli_query($conn, $query);
    if ($responce) {
      echo "query successful";
      // $_SESSION['username']=$username;
      $_SESSION['email']=$email;
      header('location:home.php');
    }
  }
}

 ?>
