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
.button {
    display: inline-block;
  border-radius: 4px;
  background-color: #000080;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 20px;
  width: 400px;
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
body  {
    background-image: url("7.jpg");
	background-size: cover;
}
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
<marquee><b><i><font size="5">"If God had intended us to fly he would have given us railways"
</font></i></b></marquee>


<form action="pay7.php" method="post">
<table style="width:20%">
<BR>
  <caption><U>PAYMENT MODE</U></caption>
  <tr>
    <th><font size='6'><b>BHIM/UPI/USSD</b></th></font
  </tr>
  <tr>
    <th>
	<font size='6'><b>DEBIT CARD WITH PIN</b>
	</th></font>
    
  </tr>
  <tr>
    <td><font size='6'><b>NET BANKING</b></td></font>
   
  </tr>
  <tr>
    <td><font size='6'><b>EWALLET</b></td></font>
   
  </tr>
  <tr>
    <td><font size='6'><b>CREDIT CARD</b></td></font>
  </tr>
</table>
<BR><BR>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>Visa/Master Card(Powered By ICICI Bank)</i></font></th>
</table>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>Visa/Master Card(Powered By HDFC Bank)</i></font></th>
</table>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>Visa/Master Card(Powered By AXIS Bank)</i></font></th>
</table>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>Visa/Master Card(Powered By CITI Bank)</i></font></th>
</table>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>American Express</i></font></th>
</table>
<table style="width:100%">
<tr>
<th><input type="radio"name="ewall"value="ewall"><FONT SIZE='4'><i>Rupay Card(Powered by Kotak Bank)</i></font></th>
</table>
<br><br>
<font size='5'><i>Transaction Charge:&nbsp&nbsp&nbsp&nbsp&nbsp Rs.10/-+Applicable Taxes</font></i>
<br>
<input type="radio"name="bhim"value="bhim"><font size='4'><b>Add as Preffered Bank</b>
<br><br>
<button class="button" name='submit' value='MAKE PAYMENT' style="vertical-align:middle"><span>MAKE PAYMENT </span></button>
</form>
</body>
</html>