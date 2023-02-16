<!DOCTYPE html>
<html>
<head>
<title>- Car sales Management System</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="car1.png" class="img"></a> Car sales Management System</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="admin.php">Home</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="review.php">Review</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
		</div>
<div id="main">
<div class="grid_7">
        <center>
          <h2>Review</h2>
        </center>
        <form method="post" action="review.php">
				<a href="table.html"><h4>Please refer the vehicle id on clicking this.</h4></a>
  		  <p><input type="text" name="Car_id" value="" placeholder="Car ID" required></p>
        <p><input type="text" name="rating" value="" placeholder="Rating(1-10)" required></p>

        	<center><p class="submit"><input type="submit" name="submit" value="Submit"></p> </center>

          <br>
          <div>
            <?php
            include_once 'connect_db.php';

            if(isset($_POST['submit'])){
            $Car_id=$_POST['Car_id'];
            $rating=$_POST['rating'];

            $sql = mysqli_query($conn,"INSERT INTO review(v_id,rating) VALUES('$Car_id','$rating')");
            if($sql>0) {
              echo "Inserted Successful";}
           }
           ?>
          </div>
        </form>
			</div>
</div>
</body>
</html>
