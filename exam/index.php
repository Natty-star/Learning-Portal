<?php include_once 'class/config.php';
//check if the header information
$tele_user_id="";
if($tele_user_id==""){

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

  <section id="intro">

    <div class="intro-text">
      <h2>Welcome to Arif</h2>
      <p>A Great place to Learn English Language in a simple way!</p>
      <a href="<?php echo CONFIRM ;?>" class="btn-get-started scrollto">SUBSCRIBE</a>
      <p>First 3 Days Free, Then 2 Birrs Per day</p>

      <p>የመጀመሪያ 3 ቀን በነፃ፤ ቀጥሎ በቀን 2 ብር</p>

      <h6 style="color:#ffffff">To Unsubscribe, Send 'STOP' to 6414</h6>
      <p style="font-weight: 100; color: darkred;"><?php if(isset($_GET['err'])) echo "Please turn your Data connection on"?></p>
    </div>


  </section>
  <!-- Intro end -->

  <main id="main">


  </main>



  <?php //include_once "common/footer.php"?>
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
