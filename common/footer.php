

<footer id="footer" style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-lg-left text-center">
                <div class="copyright">
                    &copy; Copyright <strong>Arif.et</strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!--
                      All the links in the footer should remain intact.
                      You can delete the links only if you purchased the pro version.
                      Licensing information: https://bootstrapmade.com/license/
                      Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
                    -->
                    <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a-->
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
                    <!--a href="#intro" class="scrollto">Home</a>
                    <a href="#about" class="scrollto">About</a>
                    <a href="#">Privacy Policy</a-->
					<?php 
                     if(basename($_SERVER['PHP_SELF'])!="subscribe.php" and basename($_SERVER['PHP_SELF'])!="confirm.php"){
 echo '<a href="'.UNSUBSCRIBE.'" onclick="return confirm(\'Are you sure you want to unsubscribe from the service?\');">unsubscribe</a>'; 
}
                
                ?>
                    <a href="<?php echo TERMS?>">Terms and conditions</a>
                </nav>
            </div>
        </div>
    </div>
</footer>
