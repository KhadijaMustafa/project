<?php include('loginL.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
   <meta name="viewport" content="width=device-width , initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">


<style type="text/css">
     /* .body{
      background-image: url("img/y4.jpg");
      background-color: #cccccc;
      background-repeat: no-repeat;
      background-size: cover;

   }*/
  #h5{

   text-align: center;
   text-shadow: #808080;
   color: black;
   margin-top: 5PX;
   margin-right: 0px;
  }
   #form{
    background-color: grey;
    color: #black;
    text-align: left;
    height: 460px;
    margin-top: 50px;
       }
</style>
</head>
<body class="body">
  <br>


      <div class="container" >
    <div row align="center">

              <div class="col-sm-5" id="form">
                <br>

                 <h2  id="h5">Login <br><small>Please provide your authentication</small></h2>

      <form method="post" action="login.php">
        <?php include('error.php'); ?>
        <br>
                 <div class="form-group" >
                <lable>Email*</lable>
              <input type="text" name="email" class="form-control" placeholder="User Name" required="true" style="border-radius: 7px; width: 400px; border: 1px solid gray;">
          </div>
            <div class="form-group">
           <label> Password*</label>
            <input type="password" name="password" class="form-control" placeholder="Enter password" required="true" style="border-radius: 7px; border: 1px solid gray; width: 400px">
          </div>

       <br>
       <div class="form-group">
     <input type="submit" name="login" class="bn2" value="Login" style="width: 400px">
            <center><p><a href="forgotpassword.php" style="color: white;">Forgot Password?</a> </p></center>
            <center><p>create a new <a href="registration.php" style="color: white;">account</a> </p></center>
            </div>
  </form>
    </div>

  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
