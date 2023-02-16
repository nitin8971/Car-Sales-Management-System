
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
<form method="post">
<div class="dropdown">Select the car brand


  <select name="Brand">
    <option value="" disabled selected>Choose option</option>
    <option value="Maruthi Suzuki">Maruthi Suzuki</option>
    <option value="Tata">Tata</option>
    <option value="Honda">Honda</option>
  </select>

          </div>
          <br>
          <div class="dropdown">Select the fuel

          <select name="Fuel">
            <option value="" disabled selected>Choose option</option>
            <option value="Petrol">Petrol</option>
            <option value="Diesel">Diesel</option>
          </select>
          </div>
          <br>
          <div class="dropdown">Select the vehicle type


          <select name="type">
            <option value="" disabled selected>Choose option</option>
            <option value="SUV">SUV</option>
            <option value="Sedan">Sedan</option>
            <option value="Hatchback">Hatchback</option>
          </select>


          </div>
          <br>
          <br>
          <center>
            <input type="submit" name="submit" value="Submit"/>
          </center>
          <br>
          <br>
          <div>
            <?php
            include_once 'connect_db.php';

            if(isset($_POST['submit'])){
            $Brand=$_POST['Brand'];
            $Fuel=$_POST['Fuel'];
            $type=$_POST['type'];
            $sql = ("SELECT d.v_desc FROM v_brand v, b_vehicle b, f_type f, v_type t, description d WHERE b.b_id=v.b_id AND f.v_id=b.v_id AND t.v_id=b.v_id AND d.v_id=b.v_id AND v.brand='$Brand' AND f.fuel='$Fuel' AND t.type='$type'");
            if ($result=mysqli_query($conn,$sql))
            {
              while ($row=mysqli_fetch_row($result))
              {
              printf ("%s (%s)\n",$row[0],$row[1]);
              }
            }
            }
           ?>
          </div>
        </form>
			</div>
</div>
</body>
</html>
