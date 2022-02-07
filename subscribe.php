<?php
include_once 'class/config.php';
include_once 'class/db.php';

include_once 'common/security.php';





$db = new db();

//if($db->exist("SELECT * FROM `subscribers_joke` WHERE `id` = '0122072000006508".$mobile."';") && ($mobile!= ""))
//header("Location: ".JOKES);
//echo "SELECT * FROM `subscribers_joke` WHERE `id` LIKE '0122072000006508".$mobile."';";



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Arif</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Avilon
    Theme URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>
<script language="javascript" type="text/javascript">
  function limitText(limitField, limitNum) {
    if (limitField.value.length > limitNum) {
      limitField.value = limitField.value.substring(0, limitNum);
    }
  }
</script>
  <!-- Header start -->
<?php //include_once "common/header.php"?>
  <!-- Header end -->
  <!-- Intro start  -->

  <section id="intro">

    <div class="intro-text">
      <img src="img/logo.PNG" >
		<h3 >Improve Your English Today.</h3>
		<p>Advance your<br>Writing | Grammar | Vocabulary | Speaking </p>
      <?php
        if(false)
        {

          echo '<form action="confirm.php" id="subform" method="post" >
      
         <p>2519</p> <input id="phone" name="phone" class="form-control" type="number" placeholder="Phone Number" aria-label="Phone Number" onKeyDown="limitText(this,8);" 
onKeyUp="limitText(this,8);">
      
        <input name="zsubmit" id="zsubmit" href="'.CONFIRM.'" class="myButton" value="SUBSCRIBE"  type="SUBMIT" />
      </form>';
			//echo $mobile;
        }
          else if($turnwifioff)
          {
            echo "<p style='text-decoration-color: red; font-size: 30px;'>Turn Data on please</p>";
			// echo $mobile;
          }
            else{
              echo '<a href="'.CONFIRM.'" class="myButton">SUBSCRIBE</a>';
              //  echo $mobile;
              //echo '<a href="sms:6414?&body=OK" class="myButton">SUBSCRIBE</a>';
              //'.MAINURL.'reg_by_msid.php?phone='.$mobile.'
            }

      ?>

	<br><br><br><br>
      <p >First 3 Days Free, Then 2 Birrs Per day</p>

      <p >የመጀመሪያ 3 ቀን በነፃ፤ ቀጥሎ በቀን 2 ብር</p>
      <h6 style="color:#ffffff">To Unsubscribe, Send 'STOP' to 6414</h6>
      <h6 style="color:#ffffff">--</h6>
      <p style="font-weight: 100; color: darkred;"><?php if(isset($_GET['err'])) echo "Please turn your Data connection on"?></p>
    </div>


  </section>
  <!-- Intro end -->

  <main id="main">


  </main>

  <?php include_once "common/footer.php"?>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
