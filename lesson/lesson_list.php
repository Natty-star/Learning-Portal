<?php
include_once "./class/lesson.php";
$lesson=new lesson();
$category="";
if(isset($_GET['cata'])){
    $category=$_GET['cata'];
}
$result=$lesson->fetch_all_lessons($category);

?>

<section id="pricing" class="section-bg">
    <div class="container">

        <div class="section-header">
            <h3 class="section-title">
                <?php
                if(isset($_GET["cata"]))
                    echo $_GET["cata"]." Level Lessons";
                else
                    echo "All Lessons";
                ?>
            </h3>
        </div>


<?php
//echo count($result);
for($j=0;$j<count($result);$j++){
?>
        <div class="row">
            <?php
            for($i=0;$i<3 && $j<count($result);$i++){
            ?>
            <div class="col-lg-4 col-md-6">
                <div class="box wow fadeInLeft">
                    <h3><?php echo $result[$j]["lesson_name"];?></h3>
                    <h4><span>Lesson <?php echo $result[$j]["lesson_sequence"]." : ".$result[$j]["category"];?></span></h4>
                    <?php //echo  substr( $result[$j]["lesson_description"], 0, 80);?>
                    <br> <br>
                    <a href="
                            <?php echo LESSSONURL."?lsid=".$result[$j]["lesson_sequence"];?>"
                       class="get-started-btn">Get Started</a>
                </div>
            </div>
                <?php
                $j++;
            }
            $j--;
            ?>
        </div>
<?php
}
?>
    </div>
</section>