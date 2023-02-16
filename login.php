<!DOCTYPE html>
<html>
<head>
	<title> Login Form in HTML5 and CSS3</title>
</head>
<body>
<style>
body{
  background-image: url("cars111.jpg");
	margin: 0 auto;
	background-repeat: no-repeat;
	background-size: cover;
}

.container{
	width: 500px;
	height: 450px;
	text-align: center;
	margin: 0 auto;
	background-color: rgba(44, 62, 80,0.7);
	margin-top: 160px;
}

.container img{
	width: 150px;
	height: 150px;
	margin-top: -60px;
}

input[type="text"],input[type="password"]{
	margin-top: 30px;
	height: 45px;
	width: 300px;
	font-size: 18px;
	margin-bottom: 20px;
	background-color: #fff;
	padding-left: 40px;
}

.form-input::before{
	content: "\f007";
	font-family: "FontAwesome";
	padding-left: 07px;
	padding-top: 40px;
	position: absolute;
	font-size: 35px;
	color: #2980b9;
}

.form-input:nth-child(2)::before{
	content: "\f023";
}

.btn-login{
	padding: 15px 25px;
	border: none;
	background-color: #27ae60;
	color: #fff;
}
</style>
	<div class="container">
		<form method='POST' action='#'>
			<div class="form-input">
				<input type="text" name="username" placeholder="Enter the User Name"/>
			</div>
			<div class="form-input">
				<input type="password" name="password" placeholder="password"/>
			</div>
			<input type="submit" value="LOGIN" class="btn-login"/>
    </form>
	</div>


<?php

     // servername => localhost
     // username => root
     // password => empty
     // database name => staff
     $conn = mysqli_connect("localhost:3306", "root", "123", "vehicle");

     // Check connection
     if($conn === false){
         die("ERROR: Could not connect. "
             . mysqli_connect_error());
     }

     // Taking all 5 values from the form data(input

  $username = $_POST['username'];
  $password = $_POST['password'];

      //to prevent from mysqli injection
      $username = stripcslashes($username);
      $password = stripcslashes($password);
      //$username = mysqli_real_escape_string($con, $username);
      //$password = mysqli_real_escape_string($con, $password);

      $sql = "select * from vehicle.loginform where username = '$username' and password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if($count == 1){
          echo "Login Successful.";

      }
      else{
          echo "<h1> Login failed. Invalid username or password.</h1>";
      }

     ?>



</body>
</html>
