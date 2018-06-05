<?php
if(isset($_POST['submit1']))
{
	session_start();
	$uname=$_POST['uname'];
	$pass=$_POST['password'];

	
	$connect=mysqli_connect("localhost","root","","test");
	// Check if user with that username and password already exists
	$query="SELECT * FROM `clone2` WHERE `USER NAME`='$uname' AND`PASSWORD`='$pass'";
	$result=mysqli_query($connect,$query);
   
// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    
    header("location:train3.php");
    
}
else
{ 

echo "INVALID USER NAME AND PASSWORD";

}

}
if(isset($_POST['submit2']))
{
	header("location:http://localhost/credit/train2.php");
}
?>


<html>
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    padding: 0.5em;
    color: #b41818;
    background-color:hsla(219,79%,66%,0.02);
    clear: left;
    text-align: center;
	
}

.sumit
	a:link
	{
		color:red;
	}

nav {
    float: left;
    max-width: 160px;
    margin: 0;
    padding: 1em;
    color:green;
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
  font-size: 15px;
  padding: 20px;
  width: 150px;
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
body{
	background-image:url('3.jpeg');
	background-size: cover;
}
fieldset {
  background-color:hsla(0,0%,100%,0.5);
  padding: 2px;
  border: 1px solid green;
}
</style>
</head>


<div class="container">

<header>
   <h1><font size="8" style="font-family:COURIER;">Rapid Rail Corporation Limited</font></h1>
</header>
 
 <body>
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
  <a href="#news">Sign Out</a>
  <a href="contactus.php">Contact Us</a>
</div>
<br>
<marquee><b><i><font size="5">"If God had intended us to fly he would have given us railways"</font></i></b></marquee>
 <div class="sumit">
<nav>
<fieldset>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<b><font color="black">
<center>Username:
<input type="text" name="uname"><br><br>
Password:
<input type="password" name="password"><br></center>
</b></font>
<button class="button" value='submit' name='submit1' style="vertical-align:middle"><span>LOGIN </span></button>
<button class="button" name='submit2' value='submit'style="vertical-align:middle"><span>SIGNUP </span></button>
</form>
<!--<form action="train2.php" method="post">-->






</fieldset>
  </nav>

</div>

<article>
  <h1 style="background-color:hsla(0,0%,100%,0.5);"><center><font color="black" size="7">Reserved Trains Between Stations</font></center></h1>
  
 <fieldset>
 <center>
 
 <form action="" method="post">
 &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font color="black"><font size="6">Enter Journey Date:</font> 
  <select name="date">
<option value="-1" selected></option>
<option value="01">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>


<select name="month">
<option value="-1" selected></option>
<option value="JAN">JAN</option>
<option value="FEB">FEB</option>
<option value="MAR">MAR</option>
<option value="APR">APR</option>
<option value="MAY">MAY</option>
<option value="JUN">JUN</option>
<option value="JUL">JUL</option>
<option value="AUG">AUG</option>
<option value="SEP">SEP</option>
<option value="OCT">OCT</option>
<option value="NOV">NOV</option>
<option value="DEC">DEC</option>
</select>
<input type="text" name="year"><br>

<font size="6"><font color="black">Enter Source Station :</font> 
<select id="station1">
<option value="-1" selected>From Station</option>
<option value="AGRA CANTT AGC">AGRA CANTT AGC</option>
<option value="AHMEDABAD JN ADI">AHMEDABAD JN ADI</option>
<option value="ALLAHABAD CITY ALY">ALLAHABAD CITY ALY</option>
<option value="ALLAHABAD JN ALD">ALLAHABAD JN ALD</option>
<option value="ALUVA AWY">ALUVA AWY</option>
<option value="AMALA CANT JN UMB">AMALA CANT JN UMB</option>
<option value="AMRITSAR JN ASR">AMRITSAR JN ASR               </option>
<option value="ASANSOL JN ASN">ASANSOL JN ASN</option>
<option value="BANGALORE EAST BNCE">BANGALORE EAST BNCE</option>
<option value="BARABANKI JN BBK">BARABANKI JN BBK</option>
<option value="BARDDHAMAN JN BWN">BARDDHAMAN JN BWN</option>
<option value="BAREILLY BE">BAREILLY BE</option>
<option value="BEAS BEAS">BEAS BEAS</option>
<option value="BHATAPARA BYT">BHATAPARA BYT</option>
<option value="BHOPAL JN BPL">BHOPAL JN BPL</option>
<option value="BHUBANESWAR BBS">BHUBANESWAR BBS</option>
<option value="BHUSAVAL JN BSL">BHUSAVAL JN BSL</option>
<option value="BILASPUR JN BSP">BILASPUR JN BSP</option>
<option value="BINA JN BINA">BINA JN BINA</option>
<option value="CHENNAI CENTRAL MAS">CHENNAI CENTRAL MAS</option>
<option value="DADAR DR">DADAR DR</option>
<option value="DAUND JN DD">DAUND JN DD</option>
<option value="DELHI DLI">DELHI DLI</option>
<option value="DURG DURG">DURG DURG</option>
<option value="DURGAPUR DGR">DURGAPUR DGR</option>
<option value="ERNAKULAM JN ERS">ERNAKULAM JN ERS</option>
<option value="ERODE JN ED">ERODE JN ED</option>
<option value="FARIDABAD FDB">FARIDABAD FDB</option>
<option value="GHAZIABAD GZB">GHAZIABAD GZB</option>
<option value="GORAKHPUR JN GKP">GORAKHPUR JN GKP</option>
<option value="GUDUR JN GDR">GUDUR JN GDR</option>
<option value="GWALIOR GWL">GWALIOR GWL</option>
<option value="H NIZAMUDDIN NZM">H NIZAMUDDIN NZM</option>
<option value="HOWRAH JN HWH">HOWRAH JN HWH</option>
<option value="IGATPURI IGP">IGATPURI IGP</option>
<option value="ITARSI JN ET">ITARSI JN ET</option>
<option value="JABALPUR JBP">JABALPUR JBP</option>
<option value="JAIPUR JP">JAIPUR JP</option>
<option value="JALANDHAR CANT JRC">JALANDHAR CANT JRC</option>
<option value="JALANDHAR CITY JUC">JALANDHAR CITY JUC</option>
<option value="JHANSI JN HS">JHANSI JN HS</option>
<option value="KACHEGUDA KCG">KACHEGUDA KCG</option>
<option value="KALYAN JN KYN">KALYAN JN KYN</option>
<option value="KANPUR CENTRAL CNB">KANPUR CENTRAL CNB</option>
<option value="KATNI KTE">KATNI KTE</option>
<option value="KHARAGPUR JN KGP">KHARAGPUR JN KGP</option>
<option value="KHURDA ROAD JN KUR">KHURDA ROAD JN KUR</option>
<option value="KIUL JN KIUL">KIUL JN KIUL</option>
<option value="KOTA JN KOTA">KOTA JN KOTA</option>
<option value="LUCKNOW CITY LC">LUCKNOW CITY LC</option>
<option value="LUCKNOW NR LKO">LUCKNOW NR LKO</option>
<option value="LUDHIANA JN LDH">LUDHIANA JN LDH</option>
<option value="MANMAD JN MMR">MANMAD JN MMR</option>
<option value="MATHURA JN MTJ">MATHURA JN MTJ</option>
<option value="MOKAMEH JN MKA">MOKAMEH JN MKA</option>
<option value="MORADABAD MB">MORADABAD MB</option>
<option value="MUGHAL SARAI JN MGS">MUGHAL SARAI JN MGS</option>
<option value="N GHAZIABAD GZN">N GHAZIABAD GZN</option>
<option value="NADIAD JN ND">NADIAD JN ND</option>
<option value="NAGPUR NGP">NAGPUR NGP</option>
<option value="NASIK ROAD NK">NASIK ROAD NK</option>
<option value="NELLORE NLR">NELLORE NLR</option>
<option value="NEW DELHI NDLS">NEW DELHI NDLS</option>
<option value="ONGOLE OGL">ONGOLE OGL</option>
<option value="PATNA JN PNBE">PATNA JN PNBE</option>
<option value="PHAGWARA JN PGW">PHAGWARA JN PGW</option>
<option value="PHILLAUR JN PHR">PHILLAUR JN PHR</option>
<option value="PUNE JN PUNE">PUNE JN PUNE</option>
<option value="RAIPUR JN R">RAIPUR JN R</option>
<option value="RAJAHMUNDRY RJY">RAJAHMUNDRY RJY</option>
<option value="RENIGUNTA JN RU">RENIGUNTA JN RU</option>
<option value="ROORKEE RK">ROORKEE RK</option>
<option value="SALEM JN SA">SALEM JN SA</option>
<option value="SALEM TOWN SXT">SALEM TOWN SXT</option>
<option value="SAWAI MADHOPUR SWM">SAWAI MADHOPUR SWM</option>
<option value="SHAHJEHANPUR SPN">SHAHJEHANPUR SPN</option>
<option value="TATANAGAR JN TATA">TATANAGAR JN TATA</option>
<option value="THANE TNA">THANE TNA</option>
<option value="THRISUR TCR">THRISUR TCR</option>
<option value="TIRUPATI TPTY">TIRUPATI TPTY</option>
<option value="TUNDLA JN TDL">TUNDLA JN TDL</option>
<option value="VADODARA JN BRC">VADODARA JN BRC</option>
<option value="VALSAD BL">VALSAD BL</option>
<option value="VARANASI JN BSB">VARANASI JN BSB</option>
<option value="VIDISHA BHS">VIDISHA BHS</option>
<option value="VIJAYAWADA JN BZA">VIJAYAWADA JN BZA</option>
<option value="VISAKHAPATNAM VSKP">VISAKHAPATNAM VSKP</option>
<option value="VIZIANAGRAM JN VZM">VIZIANAGRAM JN VZM</option>
</select>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<font color="black">Enter Destination Station:</font> 
<select id="station2">
<option value="-1" selected>From Station</option>
<option value="AGRA CANTT AGC">AGRA CANTT AGC</option>
<option value="AHMEDABAD JN ADI">AHMEDABAD JN ADI</option>
<option value="ALLAHABAD CITY ALY">ALLAHABAD CITY ALY</option>
<option value="ALLAHABAD JN ALD">ALLAHABAD JN ALD</option>
<option value="ALUVA AWY">ALUVA AWY</option>
<option value="AMALA CANT JN UMB">AMALA CANT JN UMB</option>
<option value="AMRITSAR JN ASR">AMRITSAR JN ASR               </option>
<option value="ASANSOL JN ASN">ASANSOL JN ASN</option>
<option value="BANGALORE EAST BNCE">BANGALORE EAST BNCE</option>
<option value="BARABANKI JN BBK">BARABANKI JN BBK</option>
<option value="BARDDHAMAN JN BWN">BARDDHAMAN JN BWN</option>
<option value="BAREILLY BE">BAREILLY BE</option>
<option value="BEAS BEAS">BEAS BEAS</option>
<option value="BHATAPARA BYT">BHATAPARA BYT</option>
<option value="BHOPAL JN BPL">BHOPAL JN BPL</option>
<option value="BHUBANESWAR BBS">BHUBANESWAR BBS</option>
<option value="BHUSAVAL JN BSL">BHUSAVAL JN BSL</option>
<option value="BILASPUR JN BSP">BILASPUR JN BSP</option>
<option value="BINA JN BINA">BINA JN BINA</option>
<option value="CHENNAI CENTRAL MAS">CHENNAI CENTRAL MAS</option>
<option value="DADAR DR">DADAR DR</option>
<option value="DAUND JN DD">DAUND JN DD</option>
<option value="DELHI DLI">DELHI DLI</option>
<option value="DURG DURG">DURG DURG</option>
<option value="DURGAPUR DGR">DURGAPUR DGR</option>
<option value="ERNAKULAM JN ERS">ERNAKULAM JN ERS</option>
<option value="ERODE JN ED">ERODE JN ED</option>
<option value="FARIDABAD FDB">FARIDABAD FDB</option>
<option value="GHAZIABAD GZB">GHAZIABAD GZB</option>
<option value="GORAKHPUR JN GKP">GORAKHPUR JN GKP</option>
<option value="GUDUR JN GDR">GUDUR JN GDR</option>
<option value="GWALIOR GWL">GWALIOR GWL</option>
<option value="H NIZAMUDDIN NZM">H NIZAMUDDIN NZM</option>
<option value="HOWRAH JN HWH">HOWRAH JN HWH</option>
<option value="IGATPURI IGP">IGATPURI IGP</option>
<option value="ITARSI JN ET">ITARSI JN ET</option>
<option value="JABALPUR JBP">JABALPUR JBP</option>
<option value="JAIPUR JP">JAIPUR JP</option>
<option value="JALANDHAR CANT JRC">JALANDHAR CANT JRC</option>
<option value="JALANDHAR CITY JUC">JALANDHAR CITY JUC</option>
<option value="JHANSI JN HS">JHANSI JN HS</option>
<option value="KACHEGUDA KCG">KACHEGUDA KCG</option>
<option value="KALYAN JN KYN">KALYAN JN KYN</option>
<option value="KANPUR CENTRAL CNB">KANPUR CENTRAL CNB</option>
<option value="KATNI KTE">KATNI KTE</option>
<option value="KHARAGPUR JN KGP">KHARAGPUR JN KGP</option>
<option value="KHURDA ROAD JN KUR">KHURDA ROAD JN KUR</option>
<option value="KIUL JN KIUL">KIUL JN KIUL</option>
<option value="KOTA JN KOTA">KOTA JN KOTA</option>
<option value="LUCKNOW CITY LC">LUCKNOW CITY LC</option>
<option value="LUCKNOW NR LKO">LUCKNOW NR LKO</option>
<option value="LUDHIANA JN LDH">LUDHIANA JN LDH</option>
<option value="MANMAD JN MMR">MANMAD JN MMR</option>
<option value="MATHURA JN MTJ">MATHURA JN MTJ</option>
<option value="MOKAMEH JN MKA">MOKAMEH JN MKA</option>
<option value="MORADABAD MB">MORADABAD MB</option>
<option value="MUGHAL SARAI JN MGS">MUGHAL SARAI JN MGS</option>
<option value="N GHAZIABAD GZN">N GHAZIABAD GZN</option>
<option value="NADIAD JN ND">NADIAD JN ND</option>
<option value="NAGPUR NGP">NAGPUR NGP</option>
<option value="NASIK ROAD NK">NASIK ROAD NK</option>
<option value="NELLORE NLR">NELLORE NLR</option>
<option value="NEW DELHI NDLS">NEW DELHI NDLS</option>
<option value="ONGOLE OGL">ONGOLE OGL</option>
<option value="PATNA JN PNBE">PATNA JN PNBE</option>
<option value="PHAGWARA JN PGW">PHAGWARA JN PGW</option>
<option value="PHILLAUR JN PHR">PHILLAUR JN PHR</option>
<option value="PUNE JN PUNE">PUNE JN PUNE</option>
<option value="RAIPUR JN R">RAIPUR JN R</option>
<option value="RAJAHMUNDRY RJY">RAJAHMUNDRY RJY</option>
<option value="RENIGUNTA JN RU">RENIGUNTA JN RU</option>
<option value="ROORKEE RK">ROORKEE RK</option>
<option value="SALEM JN SA">SALEM JN SA</option>
<option value="SALEM TOWN SXT">SALEM TOWN SXT</option>
<option value="SAWAI MADHOPUR SWM">SAWAI MADHOPUR SWM</option>
<option value="SHAHJEHANPUR SPN">SHAHJEHANPUR SPN</option>
<option value="TATANAGAR JN TATA">TATANAGAR JN TATA</option>
<option value="THANE TNA">THANE TNA</option>
<option value="THRISUR TCR">THRISUR TCR</option>
<option value="TIRUPATI TPTY">TIRUPATI TPTY</option>
<option value="TUNDLA JN TDL">TUNDLA JN TDL</option>
<option value="VADODARA JN BRC">VADODARA JN BRC</option>
<option value="VALSAD BL">VALSAD BL</option>
<option value="VARANASI JN BSB">VARANASI JN BSB</option>
<option value="VIDISHA BHS">VIDISHA BHS</option>
<option value="VIJAYAWADA JN BZA">VIJAYAWADA JN BZA</option>
<option value="VISAKHAPATNAM VSKP">VISAKHAPATNAM VSKP</option>
<option value="VIZIANAGRAM JN VZM">VIZIANAGRAM JN VZM</option>
</select>
<br>

<script>
function myFunction() {
//var a= document.getElementById("mySelect").value="apple";
//var b= document.getElementById("mySelect1").value="apple";

   if((document.getElementById("station1").value=="AGRA CANTT AGC") && (document.getElementById("station2").value=="AHMEDABAD JN ADI")){
   window.location = 'train4.1.php';
   }
 else if ((document.getElementById("station1").value=="AGRA CANTT AGC") && (document.getElementById("station2").value=="ALLAHABAD CITY ALY")){
	window.location = 'train4.php';
 }
 }

</script>


<button type="button" onclick="myFunction()" style="vertical-align:middle">Go</button>
</form>
 </center>
 </font>
 </fieldset>
</article>

<footer><align="left"><font color="black">Copyright © 2017, Centre For Railway Information Systems, Designed and Hosted by RRCL</align></footer>
</div>

</body>
</html>