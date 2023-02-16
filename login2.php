
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
      <h1 class="head">Sign up here</h1>
      <form method="post" action="login2.php">
		 <p><input type="text" name="username" value="" placeholder="Username" required></p>
        <p><input type="password" name="password" value="" placeholder="Password" required></p>

        <p class="submit"><input type="submit" name="submit" value="Submit" onclick="login1.php"></p>
        <br>
        <div>
          <?php
          include_once 'connect_db.php';

          if(isset($_POST['submit'])){
          $uname=$_POST['username'];
          $pwd=$_POST['password'];

          $sql = mysqli_query($conn,"INSERT INTO loginform(username,password) VALUES('$uname','$pwd')");
          if($sql>0) {
            echo "Inserted Successful";}
         }
         ?>
        </div>
      </form>
      </div>
      </div>

    </section>
</div>
</div>
</body>
</html>
