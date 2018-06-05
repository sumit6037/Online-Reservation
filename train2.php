<?php
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$uname=$_POST['uname'];
	$password=$_POST['password'];
	$dob=$_POST['year'].'/'.$_POST['month'].'/'.$_POST['date'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$zip=$_POST['zip'];
	$country=$_POST['country'];
	$eid=$_POST['eid'];
	$pno=$_POST['pno'];
	$ano=$_POST['ano'];
	$Encryptedpwd=md5($ano);
	//$Encryptedpwd1=md5($password);
	$connect=mysqli_connect("localhost","root","","test");
	$query="INSERT INTO `clone2`(`FIRST NAME`, `LAST NAME`, `USER NAME`, `PASSWORD`, `AADHAR NO`, `PHONE NO`, `ZIP CODE`, `COUNTRY`, `EMAIL-ID`, `DOB`, `GENDER`, `ADDRESS`)
	VALUES ('$fname','$lname','$uname','$password','$Encryptedpwd','$pno','$zip','$country','$eid','$dob','$gender','$address')";
	
	
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
header('Location: nav1.php');
	
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

if ( (o.checked == false ) && (t.checked == false ) )
{
alert ( "Please choose Gender" );
document.myForm.gender.focus();
return false;
}
return true;
}

      
         if( document.myForm.fname.value == "" )
         {
            alert( "Please provide your first name!" );
            document.myForm.fname.focus() ;
            return false;
         }
		 
		 if( document.myForm.lname.value == "" )
         {
            alert( "Please provide your last name!" );
            document.myForm.lname.focus() ;
            return false;
         }
         
		 if( document.myForm.ano.value == "" )
         {
            alert( "Please provide your adhar no!" );
            document.myForm.ano.focus() ;
            return false;
         }
		 
         if( document.myForm.eid.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.eid.focus() ;
            return false;
         }
         
         if( document.myForm.zip.value == "" ||
         isNaN( document.myForm.zip.value ) ||
         document.myForm.zip.value.length != 6 )
         {
            alert( "Please provide a zip in the format #####." );
            document.myForm.zip.focus() ;
            return false;
         }
		 
		 if( document.myForm.pno.value == "" ||
         isNaN( document.myForm.pno.value ) ||
         document.myForm.pno.value.length != 10 )
         {
            alert( "Please provide a Phone No in the format ##########." );
            document.myForm.zip.focus() ;
            return false;
         }
         
		if( document.myForm.country.value == "-1" )
         {
            alert( "Please provide your country!" );
            return false;
         } 
		 
		 if( document.myForm.date.value == "-1" )
         {
            alert( "Please provide your correct date!" );
            return false;
         }
		 
		 if( document.myForm.month.value == "-1" )
         {
            alert( "Please provide your correct month!" );
            return false;
         }
		 
		 if( document.myForm.year.value == "" )
         {
            alert( "Please provide your correct year!" );
            document.myForm.year.focus() ;
            return false;
         }
		 
      }
   //-->
</script>
<STYLE>


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
div {
    background:rgba(200,200,200,0.5) ;
    width: 560px;
	height: 850px;
    border: 05px solid black;
    padding: 25px;
    margin: 25px;
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
body{
	background-image:url('2.jpeg');
	background-size: cover;
}
</style>


</head>
<title> SIGN UP
</title>
<body>

<center>
		<h1 style="background-color:hsla(0,0%,100%,0.5);"><font size="7">REGISTRATION FORM</font></h1>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myForm" onsubmit="return(validate());" method=POST>
<div>
<h2><b><font size="6">Enter the details</b></font></h2>
<p><span class = "error">* required field.</span></p>
<font size="5"> First Name &nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp
<input type="text" name="fname">
<span class = "error">*
<br>
<br>
<font size="5">Last Name &nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp
<input type ="text" name="lname">
<span class = "error">*

<br>
<br>
<font size="5">User Name &nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp
<input type ="text" name="uname">
<span class = "error">*

<br>
<br>
<font size="5">Password &nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp
<input type ="password" name="password">
<span class = "error">*

<br>
<br>
<font size="5">Aadhar No. &nbsp&nbsp&nbsp:</font> &nbsp&nbsp&nbsp
<input type="text" name="ano">
<span class = "error">*
<br>
<br>
<font size="5">Phone No. &nbsp&nbsp&nbsp&nbsp&nbsp:</font> &nbsp&nbsp&nbsp&nbsp
<input type="text" name="pno">
<span class = "error">*
<br>
<br>
<font size="5">Zip Code &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" name="zip">
<span class = "error">*
<br>
<br>

<font size="5">Country&nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp
<select name="country">
<option value="-1" selected>[choose country]</option>
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
<br>
<br>
<font size="5">Date Of Birth &nbsp&nbsp&nbsp&nbsp:</font>&nbsp&nbsp&nbsp

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
<br>
<font size="5">Email-ID&nbsp&nbsp&nbsp&nbsp:</font>
<input type="text" name="eid">
<span class = "error">*
<br><br>
<font size="5">Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:</font> 
<input type ="radio"name="gender"value="MALE">MALE
<input type ="radio"name="gender"value="female">FEMALE<BR>
<BR>
<font size="5">Address:-</font><BR>
<textarea name="address" rows="8" cols="60">
</textarea>
<br>
<br>

<button class="button" name="submit" value="Submit" style="vertical-align:middle"><span>SUBMIT </span></button><br><br>
</div>
</form>
</body>
</html>

