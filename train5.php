<?php
if(isset($_POST['submit']))
{
	$name1=$_POST['name1'];
	$age1=$_POST['age1'];
	$gender1=$_POST['gender1'];
	$berth1=$_POST['berth1'];
	$country1=$_POST['country1'];
	$id1=$_POST['id1'];
	$idno1=$_POST['idno1'];
	$Encryptedpwd=md5($idno1);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name1','$age1','$gender1','$berth1','$country1','$id1','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}
if(isset($_POST['submit']))
{
	$name2=$_POST['name2'];
	$age2=$_POST['age2'];
	$gender2=$_POST['gender2'];
	$berth2=$_POST['berth2'];
	$country2=$_POST['country2'];
	$id2=$_POST['id2'];
	$idno2=$_POST['idno2'];
	$Encryptedpwd=md5($idno2);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name2','$age2','$gender2','$berth2','$country2','$id2','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}
if(isset($_POST['submit']))
{
	$name3=$_POST['name3'];
	$age3=$_POST['age3'];
	$gender3=$_POST['gender3'];
	$berth3=$_POST['berth3'];
	$country3=$_POST['country3'];
	$id3=$_POST['id3'];
	$idno3=$_POST['idno3'];
	$Encryptedpwd=md5($idno3);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name3','$age3','$gender3','$berth3','$country3','$id3','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}

if(isset($_POST['submit']))
{
	$name4=$_POST['name4'];
	$age4=$_POST['age4'];
	$gender4=$_POST['gender4'];
	$berth4=$_POST['berth4'];
	$country4=$_POST['country4'];
	$id4=$_POST['id4'];
	$idno4=$_POST['idno4'];
	$Encryptedpwd=md5($idno4);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name4','$age4','$gender4','$berth4','$country4','$id4','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}

if(isset($_POST['submit']))
{
	$name5=$_POST['name5'];
	$age5=$_POST['age5'];
	$gender5=$_POST['gender5'];
	$berth5=$_POST['berth5'];
	$country5=$_POST['country5'];
	$id5=$_POST['id5'];
	$idno5=$_POST['idno5'];
	$Encryptedpwd=md5($idno5);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name5','$age5','$gender5','$berth5','$country5','$id5','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}

if(isset($_POST['submit']))
{
	$name6=$_POST['name6'];
	$age6=$_POST['age6'];
	$gender6=$_POST['gender6'];
	$berth6=$_POST['berth6'];
	$country6=$_POST['country6'];
	$id6=$_POST['id6'];
	$idno6=$_POST['idno6'];
	$Encryptedpwd=md5($idno6);
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train5`(`NAME`, `AGE`, `GENDER`, `BERTH PREF.`, `NATIONALITY`, `ID CARD TYPE`, `ID CARD NO`)
	VALUES ('$name6','$age6','$gender6','$berth6','$country6','$id6','$Encryptedpwd')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: pay1.php');
	
}

?>

<html>
<head>
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
  <a href="#home">Home</a>
  <a href="#news">My Profile</a>
  <div class="dropdown">
    <button class="dropbtn">My Transactions 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Last Transaction Detail</a>
      <a href="#">Booked Ticket History</a>
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
<body>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method=POST>
<h1>PASSENGER DETAILS</h1>
<br>
<table >
	<tr>
	<th>S.No</th>
	<th>NAME</th>
	<th>Age</th>
	<th>Gender</th>
	<th>Berth Preference</th>
	<th>Nationality</th>
	<th>Id Card Type</th>
	<th>Id Card No</th>
	</tr>
	 
	 <tr>
    <td>
	1.
	</td>
    <td>
	<input type="text" name="name1">
	</td>
    <td>
	<input type="text" name="age1">
	</td>
	<td>
	<select name="gender1">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth1">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country1">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id1">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno1">
  </td>
  </tr>
  
   <tr>
    <td>
	2.
	</td>
    <td>
	<input type="text" name="name2">
	</td>
    <td>
	<input type="text" name="age2">
	</td>
	<td>
	<select name="gender2">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth2">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country2">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id2">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno2">
  </td>
  </tr>
	
	
	
   <tr>
    <td>
	3.
	</td>
    <td>
	<input type="text" name="name3">
	</td>
    <td>
	<input type="text" name="age3">
	</td>
	<td>
	<select name="gender3">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth3">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country3">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id3">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno3">
  </td>
  </tr>
	
	
	
   <tr>
    <td>
	4.
	</td>
    <td>
	<input type="text" name="name4">
	</td>
    <td>
	<input type="text" name="age4">
	</td>
	<td>
	<select name="gender4">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth4">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country4">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id4">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno4">
  </td>
  </tr>
	
	
   <tr>
    <td>
	5.
	</td>
    <td>
	<input type="text" name="name5">
	</td>
    <td>
	<input type="text" name="age5">
	</td>
	<td>
	<select name="gender5">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth5">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country5">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id5">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno5">
  </td>
  </tr>
	
	
   <tr>
    <td>
	6.
	</td>
    <td>
	<input type="text" name="name6">
	</td>
    <td>
	<input type="text" name="age6">
	</td>
	<td>
	<select name="gender6">
	<option value="-1">Select</option>
	<option value="Male">Male</option>
	<option value="Female">Female</option>
	</select>
	</td>
	<td>
	<select name="berth6">
	<option value="-1" selected>No Preferance</option>
	<option value="LOWER">LOWER</option>
	<option value="UPPER">UPPER</option>
	<option value="MIDDLE">MIDDLE</option>
	<option value="SIDE LOWER">SIDE LOWER</option>
	<option value="SIDE UPPER">SIDE UPPER</option>
	</select>
	</td>
	<td>
<select name="country6">
<option value="-1" selected>[choose yours]</option>
<option value="India">India</option>
<option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Armenia">Armenia	</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Botswana">Botswana</option>
<option value="Brazil">Brazil</option>
<option value="Brunei">Brunei</option>
<option value="Cabo Verde">Cabo Verde</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Central African Republic (CAR)">Central African Republic (CAR)</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Greece">Greece</option>
<option value="Haiti">Haiti</option>
<option value="Honduras">Honduras</option>
<option value="Hungary">Hungary</option>
<option value="Indonesia">Indonesia</option>                             
<option value="Iran">Iran</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
</select>
</td>

	<td>
	<select name="id6">
	<option value="-1" selected>ID CARD TYPE</option>
	<option value="VOTER ID CARD">VOTER ID CARD</option>
	<option value="PASSPORT">PASSPORT</option>
	<option value="PAN CARD">PAN CARD</option>
	<option value="DRIVING LIC.">DRIVING LIC.</option>
	<option value="AADHAR CARD">AADHAR CARD</option>
	</select>
	</td>
	<td>
	<input type="text" name="idno6">
  </td>
  </tr>
	
	</table>
  <br><br>
 
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

	<button class="button" value="submit" name="submit" style="vertical-align:middle"><span>GO </span></button>
	</form>
	
</body>
</html>

  
  