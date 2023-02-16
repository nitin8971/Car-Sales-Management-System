<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="dropdown">Select the car brand


    <select name="Brand">
      <option value="BMW">BMW</option>
      <option value="AUDI">AUDI</option>
      <option value="Honda">Honda</option>
    </select>

</div>
<br>
<div class="dropdown">Select the fuel


<select name="Fuel">
  <option value="Petrol">Petrol</option>
  <option value="Diesel">Diesel</option>
</select>
</div>
<br>
<div class="dropdown">Select the vehicle type


<select name="type">
  <option value="SUV">SUV</option>
  <option value="SEDAN">SEDAN</option>
  <option value="HATCHBACK">HATCHBACK</option>
</select>


</div>
<br>
<div class="dropdown">Select the Price range

<!-- <select name="Price">
  <option value="1000000">50000-100000</option>
  <option value="2000000">1000000-2000000</option>
</select> -->
</div>
<br>
<style media="screen">
.dropdown{
  align-content: center;
  padding: 20px;
}
.dropbtn {
background-color: #3498DB;
color: white;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:focus {
background-color: #2980B9;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
position: relative;
display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
display: none;
position: absolute;
background-color: #f1f1f1;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}
</style>


  </body>
</html>
