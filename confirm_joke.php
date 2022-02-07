<?php
include_once 'class/config.php';
include_once 'class/db.php';
//include_once 'common/security.php';
$headers = apache_request_headers();
$mobile="";
$turnwifioff=false;
$onDesktop=false;

$device="";

foreach ($headers as $header => $value) {
    //echo "$header: $value <br />\n";
    if($header=="Msisdn"){
        $mobile=$value;
    }
    if($header=="User-Agent" and strpos($value, 'Mobile')){
        $device="Mobile";
    }

}
$db = new db();

$sql2="INSERT INTO `visit`( `device_type`, `date`) VALUES ('$mobile',NULL)";
   if($db->executeQuery($sql2))
   {}
//if($db->exist("SELECT * FROM `subscribers_joke` WHERE `id` LIKE '0122072000006508".$mobile."';"))
//header("Location: ".JOKES);







function generatePIN(){
  $i = 0; //counter
  $pin = ""; //our default pin is blank.
  while($i < 4){
    //generate a random number between 0 and 9.
    $pin .= mt_rand(0, 9);
    $i++;
  }
  return $pin;
}
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

  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to Arif</h2>
      <p>አስቂኝና አዝናኝ ቀልዶችን የሚያገኙበት ምርጥ ዌብሳይት</p>
      <?php

      if($onDesktop)
      {
        if(isset($_GET['err'])) {
          echo "<p>" . $err_msg . "</p>";
          echo '<form action="reg_subscriber_joke.php" id="subform" method="post" >
        <p>2519'.$_GET['err'].'</p>
        
        
        <input name="code" class="form-control" type="text" placeholder="Enter Code">
        <input name="phone" style="display: none;" value="'.$_GET['err'].'" >

        <input name="zsubmit" id="zsubmit"  class="btn-get-started scrollto" value="CONFIRM"  type="SUBMIT" />
      </form>';
        }
        else
        if(isset($_POST['phone'])){
        echo '<form action="reg_subscriber_joke.php" id="subform" method="post" >
        <p>2519'.$_POST['phone'].'</p>
        
        
        <input name="code" class="form-control" type="text" placeholder="Enter Code">
        <input name="phone"  value="'.$_POST['phone'].'" style="display: none;">

        <input name="zsubmit" id="zsubmit"  class="btn-get-started scrollto" value="CONFIRM"  type="SUBMIT" />
      </form>';

        }
      }
      else{
        echo '<a href="'.MAINURL.'reg_by_msid_joke.php?phone='.$mobile.'" class="btn-get-started scrollto">CONFIRM</a>';

      }

      ?>


      <p style="font-size:12px;">First 3 Days Free, Then 2 Birrs Per day</p>

      <p style="font-size:12px;">የመጀመሪያ 3ቀን በነፃ፤ ቀጥሎ በቀን 2 ብር</p>

      <h6 style="color:#ffffff">To Unsubscribe, Send 'STOP' to 6414</h6>


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
