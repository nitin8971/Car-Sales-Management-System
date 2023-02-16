<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
  setTimeout(function(){
    document.getElementById('alert-messo').style.display = 'none';
  }, 2000);
</script>
<?php
include_once 'connect_db.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
if($position!=''){
switch($position){
case 'User':
$result=mysqli_query($conn,"SELECT username, password FROM loginform WHERE username='$username' AND password='$password'");
$row=mysqli_fetch_array($result);
if($row>0){
session_start();
$_SESSION['username']=$row[0];
$_SESSION['password']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
$message="<font color=orangered class= messo id=alert-messo>Invalid login Try Again</font>";
}
break;
}
}else{
echo'<script>window.alert("Please select your login category")</script>';
}
}
echo <<<LOGIN
<!DOCTYPE html>
<html>
<head>
<title>Car sales Management System</title>
<link rel="stylesheet" type="text/css" href="login.css">
<style>
#content {
height: auto;
}
#main{
height: auto;}
body{
background-color:;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><img src="car1.png">Car Sales Management System</h1>
</div>
<div id="main">

  <section class="container">

     <div class="login">
	 <img src="avatar.png">
     <div class="form">
      <h1 class="head">Login here</h1>
	  $message
      <form method="post" action="login1.php">
		 <p><input type="text" name="username" value="" placeholder="Username" required></p>
        <p><input type="password" name="password" value="" placeholder="Password" required></p>
		<select name="position">
	        <option>User</option>
			<option>Admin</option>
			</select>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
				<center><p>New User?<a href="login2.php">Signup</a></p></center>
      </form>
      </div>
      </div>

    </section>
</div>
</div>
</body>
</html>
LOGIN;
?>
</html>
