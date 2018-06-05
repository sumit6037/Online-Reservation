<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}

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

a:link {
    color: grey;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
a:link {
    color: grey;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: red;
    background-color: transparent;
    text-decoration: underline;
}
a:active {
    color: yellow;
    background-color: transparent;
    text-decoration: underline;
}
th {
    height: 50px;
}
td {
    height: 50px;
}
body  {
    background-image: url("7.jpg");
	background-size: cover;
}

	</style>
</head>
<body style="background-image:powderblue;">
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

<table style="width:100%">
<BR>
  <caption><font size="8">PAYMENT MODE</font></caption>
  <tr>
    <th><a href="pay2.php"><font size="5">BHIM/UPI/USSD</font></a></th>
  </tr>
  <tr>
    <td>
	<a href="pay3.php"><font size="5">DEBIT CARD WITH PIN</font></a></a>
	</td>
    
  </tr>
  <tr>
    <td><a href="pay4.php"><font size="5">NET BANKING</font></a></td>
   
  </tr>
  <tr>
    <td><a href="pay5.php"><font size="5">EWALLET</font></a></td>
   
  </tr>
  <tr>
    <td><a href="pay6.php"><font size="5">CREDIT CARD</font></a></td>
  </tr>
</table>
<BR><BR>



</body>
</html>