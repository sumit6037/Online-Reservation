<?php
if(isset($_POST['submit']))
{
	$cardno=$_POST['card-number'];
	$cvv=$_POST['cvc'];
	$exp=$_POST['exp-year'].'/'.$_POST['exp-month'];

	$connect=mysqli_connect("localhost","root","","sumit2");
	$query="INSERT INTO `pay7`(`CARD NO`, `CVV`, `EXPIRATION`) VALUES ('$cardno','$cvv','$exp')";
	$res=mysqli_query($connect,$query);
	if($res)
	{
		echo"Data saved";
	}	
	else
	{
		echo"data not saved";
	}
header('Location: pay8.php');
	
	}
?>
<html >
<head>

  <meta charset="UTF-8">
  <title>Daily UI 002 - Credit Card</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.typekit.net/fjq2gnx.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://dfcb.github.io/extra-strength-responsive-grids/css/grid.css'>
<link rel='stylesheet prefetch' href='http://thisisstar.com/images/100UI/002/css/paymentfont.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @font-face {
  font-family: 'PaymentFont';
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.eot');
  src: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.eot?#iefix') format('embedded-opentype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.woff') format('woff2'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.woff2') format('woff'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.ttf') format('truetype'), url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/184748/paymentfont-webfont.svg#paymentfont-webfont') format('svg');
  font-weight: normal;
  font-style: normal;
}

body  {
    background-image: url("7.jpg");
	background-size: cover;
}

.space {
  margin-top: 5px;
}

.clear {
  clear: both;
}

.center {
  text-align: center;
}

.no-margin {
  margin: 0!important;
}

img {
  max-width: 100%;
}

.max-width {
  max-width: 940px;
  width: 90%;
  margin: 0 auto;
}

.payment {
  padding: 5%;
  position: relative;
  top: 15vh;
  box-shadow: 15px 15px 0px -4px rgba(0, 0, 0, 0.3), 0px 0px 85px 0px rgba(0, 0, 0, 0.4), ;
;
}

.turquoise {
  background-color: hsl(0, 0%, 66%,8);
  color: #416051;
  border: 1px solid rgb(111, 154, 111);
}

.headline {
  position: relative;
  margin-bottom: 50px;
  border-bottom: 1px solid;
  line-height: 30px;
}

.headline abbr {
  display: inline-block;
  position: relative;
  margin: 0 auto;
  padding: 0 15px;
  background: #fff;
  top: 15px;
}

p {
  font-weight: 300;
  font-size: 12px;
  line-height: 16px;
}

strong {
  font-weight: 900;
}

h1,
h2,
h3,
h4,
h5 {
  font-family: "bryant-web", bryant, sans-serif;
  text-transform: uppercase;
  font-weight:600;
  letter-spacing: 0.03em;
}

h1 {
  font-size: 30px;
}

h2 {
  font-size: 24px;
}

h3 {
  font-size: 20px;
}

h4 {
  font-size: 16px;
}

h5 {
  font-size: 14px;
}

.upper-bryant {
  font-family: "bryant-web", bryant, sans-serif;
  text-transform: uppercase;
}

.small-bold {
  font-weight: 600;
  font-size: 14px;
}

.micro {
  font-size: 9px;
  letter-spacing: 0.4px;
}

.tiny {
  font-size: 12px;
}

.huge {
  font-size: 22px;
}

.dark-content-box {
  background: rgba(0, 0, 0, 0.25);
  padding: 5%;
  color: #fff;
}

hr {
  border-top: 1px solid;
  border-bottom: 0;
}

input,
textarea {
  width: 100%;
  width: calc(100% - 2px);
  border-radius: 2px;
  border: 0;
  font-size: 18px;
  padding: 10px 0;
  font-family: "bryant-web", bryant, sans-serif;
  box-shadow: 0 0 0 1pt #eee;
  transition: box-shadow 0.3s;
}

input:focus,
textarea:focus,
input[type=number]:focus {
  box-shadow: 0 0 0 1pt #416051;
  outline: none;
}

textarea {
  min-height: 75px;
}

input,
textarea {
  margin: 10px 0;
  padding: 10px 2%;
  width: 96%;
}

textarea.btn,
input.btn {
  padding: 12px 0;
  margin: 10px 0;
  width: 100%;
}

section {
  margin: 20px 0;
}

.cvc-box {
  position: relative;
}

.cvc {
  position: relative;
  top: 20px;
  height: 44px;
}

p .pf {
  font-size: 2vw;
  opacity: 0.7;
  margin: 0 0.5% 1%;
}

.cards {
  text-align: center;
  border: 1px solid;
}

.cards h6 {
  margin: -5px auto 5px;
  background: #849E91;
  width: 52%;
}

.dark-content-box.payment-info {
  min-height: 183px;
}

.dark-content-box.payment-info p {
  padding: 8px 0;
  font-size: 15px;
  font-weight: 100;
  line-height: 22px;
}

.tall-slash {
  font-size: 32px;
  font-weight: 100;
  padding-top: 10px;
  display: block;
}

.btn {
  border: none;
  background: none;
  cursor: pointer;
  padding: 12px 0;
  display: inline-block;
  margin: 10px 0;
  letter-spacing: 1px;
  outline: none;
  position: relative;
  border-radius: 2px;
  background: rgb(101, 140, 124);
  color: #fff;
  font-size: 18px;
  font-family: "bryant-web", bryant, sans-serif;
  text-decoration: none;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  width: 100%;
  box-shadow: none;
}

.btn:active {
  background-color: #BA2348;
  color: #999;
  -webkit-transition: none;
  -moz-transition: none;
  transition: none;
  box-shadow: none;
}

.btn:disabled {
  background-color: #898C8C;
  color: #ddd;
}

.btn:hover {
  cursor: default;
  background-color: #444;
  color: #ddd;
}

.btn:active {
  background-color: #898C8C;
  color: #ddd;
}

@media (min-width: 1100px) {
  p .pf {
    font-size: 22px;
  }
}

@media (max-width: 795px) {
  p .pf {
    font-size: 4.5vw;
  }
  .cards h6 {
    width: 40%;
  }
  .icon-wallet img {
    max-width: 60%;
  }
}

@media (max-width: 500px) {
  .cards h6 {
    width: 50%;
  }
  .icon-wallet img {
    max-width: 40%;
  }
}
body  {
    background-color: url("7.jpg");
	background-size: cover;
}
    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
  <body class="settings">
  <div>
    <div class="max-width">
      <section class="payment turquoise">
        <div class="grid-full padded-reverse">
          <div class="grid-whole padded">
            <h3>Payment Details</h3>
            <hr>
          </div>
          <div class="grid-5 padded m-grid-whole s-grid-whole xs-grid-whole">
            <div class="grid-whole">
              <div class="dark-content-box payment-info">
                <h5>Card on file</h5>
                <hr>
                <div class="grid-3 s-grid-12 padded">
                  <p class="center">
                    <span class="icon-wallet icon-huge">
                    <img src="http://www.thisisstar.com/images/100UI/002/wallet.svg">
                    </span>
                  </p>
                </div>
                <div class="grid-9 s-grid-12 padded">
                  <p>
                    MERCHANT : IRCTC APIN
					WEBSITE : http://www.irctc.co.in
                  </p>
                </div>
                <div class="clear"></div>
                <div class="cards">
                  <h6 class="upper-bryant micro">accepted payment types</h6>
                  <p>
                    <span class="pf pf-visa"></span> <span class="pf pf-mastercard"></span> <span class="pf pf-american-express"></span> <span class="pf pf-jcb"></span> <span class="pf pf-discover"></span> <span class="pf pf-diners"></span>
                  </p>
                  <div class="clear"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid-7 padded m-grid-whole s-grid-whole xs-grid-whole">
            <form id="payment-form" action="<?php echo $_SERVER['PHP_SELF']; ?>"onsubmit="return(credit());" accept-charset="UTF-8" method="post">
              <input name="utf8" type="hidden" value="✓">
              <div class="grid-whole">
                <label for="card-number">
                  <span class="upper-bryant small-bold">Card Number</span>
                </label>
                <input type="number" class="space" size="20" name="card-number" id="card-number">
              </div>
              <div class="grid-whole padded-reverse">
                <div class="grid-5 padded">
                  <div class="grid-5">
                    <label for="cvc">
                      <span class="upper-bryant small-bold">CVC</span>
                      <input type="number" class="space" size="4" name="cvc" id="cvc">
                    </label>
                  </div>
                  <div class="grid-7 cvc-box center">
                    <img class="cvc" src="http://www.thisisstar.com/images/100UI/002/cvc_opt.svg">
                  </div>
                </div>
                <div class="grid-7 padded">
                  <div class="grid-whole">
                    <span class="upper-bryant small-bold">
                <label for="exp-month">
                  Expiration
                </label>
              </span>
                    <span class="upper-bryant micro">
                <label for="exp-year">
                  (MM/YYYY)
                </label>
              </span>
                  </div>
                  <div class="grid-4">
                    <input type="number" name="exp-month" class="space" size="2" data-stripe="exp-month" id="exp-month">
                  </div>
                  <div class="grid-2 center huge valign-dollar">
                    <span class="upper-bryant tall-slash"> / </span>
                  </div>
                  <div class="grid-6">
                    <input type="number" class="space" size="4" id="exp-year" name="exp-year">
                  </div>
                </div>
              </div>
              <button type="submit" name='submit' value='submit'class="btn" id="update-payment">proceed</button>
			  <form action='nav1.php' method='POST'>
            <button type="submit" name='submit' value='submit' class="btn" id="update-payment">Cancel</button>
			</form>
			</form>
          </div>
          <div class="clear"></div>
        </div>
      </section>
    </div>
  </div>
</body>
  
  
</body>
</html>
