<?php

   echo "Successfully Updated.";

 //create connection
 $connect=mysqli_connect("localhost","root","","sumit2");
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!';


$result=mysqli_query($connect,"select * from train4");



?>
	<?php
		if(isset($_POST['submit3']))
{
$host="localhost";
$user="root";
$database="test";
$con= mysqli_connect($host, $user, "", $database);
	$num0 = (rand(10,100));
    $num1 = (rand(1000,10000));
    $num2 = (rand(100,1000));
    
    $randnum = $num0 . $num1 . $num2;

$query = "INSERT INTO data (pnr) VALUES ('$randnum');";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
  echo "<script>alert('successful inserted ')</script>";   

	if($result)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
header('Location: train5.php');
	
	
	}
?>



<html>
<head>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validate()
      {
		  {
		 
var o = document.getElementById('one');
var t = document.getElementById('two');
var o1 = document.getElementById('three');
var t1 = document.getElementById('four');
var t3 = document.getElementById('five');

if ( (o.checked == false ) && (t.checked == false ) && (o1.checked == false ) && (t1.checked == false ) && (t3.checked == false ) )
{
alert ( "Please choose Quota" );
document.myForm.gender.focus();
return false;
}
return true;
}
</script>
<style>

	

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

article {
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
    overflow: hidden;
}
.button {
    display: inline-block;
  border-radius: 4px;
  background-color: #000080;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.button {padding: 10px 24px;}

table {
    border-collapse: collapse;
    width: 97%;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover{background-color:#f5f5f5}
</style>
</head>
<body style="background-color:powderblue;">
<div class="navbar">
  <a href="nav1.php">Home</a>
  <a href="#news">My Profile</a>
  <div class="dropdown">
    <button class="dropbtn">My Transactions 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="pay8.php">Last Transaction Detail</a>
      <a href="pay8.php">Booked Ticket History</a>
      <a href="#">Ticket Refund History</a>
      <a href="#">Ticket Cancellation History</a>
	</div>
  </div> 
  <a href="#news">Check PNR Status</a>
  <a href="nav1.php">Sign Out</a>
  <a href="contactus.php">Contact Us</a>
</div>
<br>
<marquee><b><i><font size="5">"If God had intended us to fly he would have given us railways"</font></i></b></marquee>

<h2>TRAIN BETWEEN STATIONS</h2>
<BR>
<p style="background-color:DodgerBlue;"><font size="4">Select Quota: 
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type ="radio"name="r1" value="quota">GENERAL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type ="radio"name="r2" value="quota">PREMIUM TATKAL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type ="radio"name="r3" value="quota">PHYSICALLY HANDICAPED&nbsp&nbsp&nbsp&nbsp&nbsp
<input type ="radio"name="r4" value="quota">LADIES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type ="radio"name="r5" value="quota">TATKAL</font></p>
<BR><br>


<table>
  <tr>
    <th>TRAIN NO</th>
	<th>TRAIN NAME</th>
	<th>FROM</th>
	<th>DEPARTUE</th>
	<th>TO</th>
	<th>ARRIVAL</th>
	<th>DISTANCE(KM)</th>
	<th>TRAVEL TIME</th>
	<th>MON</th>
	<th>TUE</th>
	<th>WED</th>
	<th>THU</th>
	<th>FRI</th>
	<th>SAT</th>
	<th>SUN</th>
	<th>CLASS</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['TRAIN NO'];?></td>
	<td><?php echo $row['TRAIN NAME'];?></td>
	<td><?php echo $row['FROM'];?></td>
	<td><?php echo $row['DEPARTURE'];?></td>
	<td><?php echo $row['TO'];?></td>
	<td><?php echo $row['ARRIVAL'];?></td>
	<td><?php echo $row['DISTANCE(Km)'];?></td>
	<td><?php echo $row['TRAVEL TIME'];?></td>
	<td><?php echo $row['MON'];?></td>
	<td><?php echo $row['TUE'];?></td>
	<td><?php echo $row['WED'];?></td>
	<td><?php echo $row['THU'];?></td>
	<td><?php echo $row['FRI'];?></td>
	<td><?php echo $row['SAT'];?></td>
	<td><?php echo $row['SUN'];?></td>
	<td><?php echo $row['CLASS'];?></td>
	
	</tr>
	<?php endwhile;?> 
</table>
<br>
	<br>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return(validate());" method="post">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp
	

<button class="button" name="submit3" value="submit3" style="vertical-align:middle"><span>GO </span></button>
		</form>
	</body>
	</html>
