<?php
include_once 'class/config.php';
include_once 'class/db.php';
include_once 'common/security.php';

$headers = apache_request_headers();
$mobile="";

foreach ($headers as $header => $value) {   
         if($header=="Msisdn"){
           $mobile=$value;
         }
        }


if ( ! empty( $_GET['score'] ) ) {
	$score= $_GET['score'];
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
  <!-- Header start -->
<?php //include_once "common/header.php"?>
  <!-- Header end -->
  <!-- Intro start  -->
 
 <?php 
    $sql= "SELECT * FROM `prize` WHERE `phone` LIKE '$mobile' ";
    $db = new db();
 ?>

  <section id="intro">

    <div class="intro-text">
  
<?php 
if($db->exist($sql))
{
    echo'<p>You have already taken the quiz.</p>';
}
else
{
    echo '<h2>Success!</h2> <p>User : '.$mobile.' </p> <p>you have Scored '.$score.'</p>';
    $db = new db();
    $sql = "INSERT INTO `prize` (`phone`, `result`) VALUES ( '$mobile', '$score')";
    $db->executeQuery($sql);
}

?>


<button class="menu-active"><a href="<?php echo MAINURL?>">Home</a></button>
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
