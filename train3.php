<?php
if(isset($_POST['submit']))
{
	$station1=$_POST['station1'];
	$station2=$_POST['station2'];
	$date=$_POST['date'];
	$tt=$_POST['tt'];
	
	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `train3`(`FROM_STATION`, `TO_STATION`, `JOURNEY DATE`, `TICKET TYPE`) 
	VALUES ('$station1','$station2','$date','$tt')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
	header('Location: train4.php');
	}
?>


<html>
<head>
<script type="text/javascript">
   <!--
      // Form validation code will come here.
      function validatestation()
      {
      
         if( document.myForm1.date.value == "" )
         {
            alert( "Please provide the Journey date!" );
            document.myForm1.date.focus() ;
            return false;
         } 
		 
		 if( document.myForm1.station1.value == "-1" )
         {
            alert( "Please provide your From station!" );
            return false;
         }
		 
		 if( document.myForm1.station2.value == "-1" )
         {
            alert( "Please provide your To station!" );
            return false;
         }
		 
		 if( document.myForm1.tt.value == "-1" )
         {
            alert( "Please provide your Ticket type!" );
            return false;
         }
		 
      }
   //-->
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.box {
    background:rgba(200,200,200,0.5) ;
    width: 590px;
	height: 600px;
    border: 5px solid black;
    padding: 25px;
    margin: 25px;
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
  opacity: 0.5;
  right: 0;
}
.button {padding: 10px 24px;}
body{
	background-image:url('4.jpeg');
	background-size: cover;
}
</style>
</head>
<body>

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
<center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm1" onsubmit="return(validatestation());" method=POST>
<div class="box">
<h1><font size="8">Select Favourite Journey List</font></h1>
<font size="6">From Station&nbsp&nbsp&nbsp:</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<select name="station1">
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
<br>
<font size="6">To Station&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="station2">
<option value="-1" selected>To Station</option>
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
<br>


<font size="6">Journey Date&nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="date">
<br>
<br>
<font size="6">Ticket Type&nbsp&nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<select name="tt">
<option value="-1" selected>[choose yours]</option>
<option value="E-Ticket">E-Ticket</option>
<option value="I-Ticket">I-Ticket</option>
</select>
<br>
<br>
<input type="checkbox" name="notice" value="nn">
I'll book in special concession.<br>
(Physically handicapped and Journalist passenger)
<br>
<br>
<button class="button" name="submit" value="Submit" style="vertical-align:middle"><span>SUBMIT </span></button><br><br>
<button class="button" name="reset" value="reset" style="vertical-align:middle"><span>RESET </span></button><br><br>
</div>
</form>
</body>
</html>
