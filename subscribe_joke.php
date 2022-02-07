<?php 
include_once 'class/config.php';
include_once 'class/db.php';
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
$db->executeQuery($sql2);
   
	   
if(!$db->exist("SELECT * FROM `subscribers_joke` WHERE `id` LIKE '0122072000006508".$mobile."';"))
header("Location: ".SUBJOKES);
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

<style>
    .head {
        font-size:22px;
        margin: auto;
        width: 50%;
        margin-bottom:35px;
    }
    .par {
      width: 50%;
      margin: auto;
      margin-bottom: 25px;
    }
</style>
</head>

<body>

  <!-- Header start -->
<?php include_once "common/header.php"?>
  <!-- Header end -->

  <!-- Intro start  -->
<?php //include_once "common/intro.php"?>
  <!-- Intro end -->


  <main id="main">



    <?php //if(isset($_GET['lsid'])){include_once "lesson/lesson_profile.php";}?>
    <?php //if(isset($_GET['lsid'])!=1)include_once "lesson/lesson_list.php";?>



  </main>
  <div>
  <br><br><br>
      <ul class= "head" ><b>የተመረጡ ቀልዶች</b></ul>
           <ol class= "par"> A:በዓመት ሁለቴ ብቻ ነው መጠጥ የምጠጣው<br>
                  B:መቼና መቼ?<br>
                  A:ለልደቴ ጊዜና ልደቴ ያልሆነ ጊዜ<br><br>
                  <p>***************************</p>
          </ol>
          
          <ol class= "par"> እሷ:ቆይ ሜካፔን ልጨርስ <br>
               እሱ:ሜካፕ አያስፈልግሽም <br>
               እሷ:ውይ..ኸረ.. <br>
               እሱ:ፕላስቲክ ሰርጀሪ ነው የሚያስፈልግሽ <br><br>
               <p>***************************</p>
          </ol>

          <ol class= "par"> ዮኒ: የአዲሱ ውሻክ ስሙ ማነው?<br>
            በቄ: እኔንጃ, እስካሁን አልነገረኝም<br><br>
            <p>***************************</p>
          </ol>

          <ol class= "par"> A: በጣም አጭር ነው ቁመቱ ስትይ, ምን ያህል?<br>
               B: ካስነጠሰ ግንባሩ መሬት ይነካል<br><br>
               <p>***************************</p>
          </ol>
          <ol class= "par"> A:አተኩሬ ሳይክ ሳሚን መሰልከኝ<br>
               B:በመልክ እንመሳሰላለን?<br>
               A:አይ,እሱም እንዳንተ 100ብር ተበድሮ አልመለሰም<br><br>
               <p>***************************</p>
          </ol>
      <ul class= "head" ><b>የቤተሰብ ቀልዶች</b></ul>
          <ol class= "par"> A: እኛ ቤት ከበላን በኋላ ነው ምንፀልየው<br>
               B: ለምን?<br>
               A: ሁሌ የሚሰራው ምግብ ለሆድ አስጊ ስለሆነ<br><br>
               <p>***************************</p>
          </ol>

          <ol class= "par"> ሚስት: ከተጋባን 3ኛ ዓመታችን ነገ ነው። ምን አድርገን እናክብረው?<br>
              ባል: በ2 ደቂቃ የህሊና ፀሎት<br><br>
              <p>***************************</p>
          </ol>

          <ol class= "par"> ሚስት: አስሬ ለምንድነው የስኳር እቃውን የምታየው?<br>
               ባል: ሀኪም የስኳር መጠንህን በየጊዜው ቼክ አድርግ ስላለኝ<br><br>
               <p>***************************</p>
          </ol>

          <ol class= "par"> አባት:ልጄን የምታኖርበት ገቢህ ስንት ነው?<br>
               ዮኒ:3ሺ<br>
               አባት:ከሷ 3ሺ ደሞዝ ጋር ይበቃል<br>
               ዮኒ:እሱን አስቤው ነው<br><br>
               <p>***************************</p>
          </ol>
          <ol class= "par"> አባት:የፈተና ውጤት ካርድክ የታለ?<br>
               ልጅ:ጓደኛዬ ወስዶታል<br>
               አባት:ለምን?<br>
               ልጅ:ቤተሰቡን ሊያስደነግጥበት!<br><br>
               <p>***************************</p>
          </ol>

        <ul class= "head" ><b>የስራ ቦታ ቀልዶች</b></ul>
          <ol class= "par">ዶ/ር: ለጤንነትክ ሲባል ሰላጣ መመገብ አለብክ።<br>
              ታማሚ: እሺ, ግን ከምግብ በፊት ነው ወይስ ከምግብ በኋላ?<br><br>
              <p>***************************</p>
          </ol>
          <ol class= "par">አስተማሪ: ድጋሚ ስትኮርጅ እንዳላይክ!<br>
              ተማሪ: እኔም ባታየኝ ነው ደስ የሚለኝ<br><br>
              <p>***************************</p>
          </ol>
          <ol class= "par">ቀጣሪ: ደሞዝ መነሻ 2ሺ ብር,ትንሽ ቆይተህ ደግሞ ይጨመርልሀል<br>
              ተቀጣሪ: በቃ ትንሽ ቆይቼ እመጣለሁ<br><br>
              <p>***************************</p>
          </ol>
          <ol class= "par">ሻጭ: ይሄ ኮምፒውተር ስራህን በግማሽ ያቀልልካል<br>
              ገዢ: ጥሩ,2ት ስጠኝና ስራዬን በሙሉ ይስራልኝ<br><br>
              <p>***************************</p>
          </ol>
          <ol class= "par">አሰሪ: ለምን አረፈድክ?<br>
              ሰራተኛ: እንቅልፍ ወስዶኝ ነው<br>
              አሰሪ: ቤትህም ትተኛለህ ማለት ነዋ!<br>
              <p>***************************</p>
          </ol>
          <ol class= "par">ዶ/ር:ጥርስ ለመንቀል ክፍያ 1000 ብር ነው<br>
              ታማሚ:ባይሆን ግማሹን ልክፈልና አነቃንቀው,በኋላ ራሴ እነቅለዋለሁ<br>
              <p>***************************</p>
          </ol>
      
    </div>


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
