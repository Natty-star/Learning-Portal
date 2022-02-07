<?php
include_once "./class/question.php";
if(!isset($_GET['lsid']))
{
header("Location: ".LESSSONURL);
    die();
}

//echo $_GET['lsid'];
$tele_user="+251911930202";
$question=new question();
$result=$question->get_questions_for_lesson($_GET['lsid']);
$choiceAnsCode="";
?>


<section id="about" class="section-bg">
    <div class="container-fluid">
        <div class="section-header">
            <h3 class="section-title"> <?php
                if($_GET['lsid']!=0)echo "Lesson ".$_GET['lsid']." Test";
                else echo "Primary evaluation Test"?> </h3>
            <span class="section-divider"></span>
        </div>

        <div class="row">


            <div style="text-align: left; width:100%; padding: 0 20%;" class=" content wow ">
                <p><?php echo $result[0]["remark"];?></p>
                <?php for($i=0;$i<count($result);$i++) {
                    ?>
                    <form>

                        <?php echo (1+$i).". ".$result[$i]["question_description"];
                        $choices = json_decode($result[$i]["multiple_choice"], true); ?>


                    <?php for ($j = 0; $j < count($choices); $j++) {
                        $id = "";
                        if ($choices[$j] == $result[$i]["answer"])
                        {
                            $name = "ANS";
                            $id = "C".$i.($j + 1);
                            $choiceAnsCode.='"'.$id.'",';

                        }
                        else
                        {
                            $name="WRO";
                            $id = "C".$i.($j + 1);

                        }
                        ?>
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" id="<?php echo $id ?>"
                                   name="groupOfDefaultRadios" value="<?php echo $name?>">
                            <label class="custom-control-label"
                                   for="<?php echo $id ?>"><?php echo $choices[$j] ?>
                            </label>
                        </div>




                    <?php
                }?>
                        <p id="answer_statu<?php echo $i?>"></p>
                    </form>
                    <br>

                <?php

                }

?>

<div id="score"></div>
                <button onclick="checkAnswer()">Submit</button>
                <?php
                $jsAnsArray="";
                $arrysize=0;
                for($i=0;$i<count($result);$i++){
                    $jsAnsArray.='"'.$result[$i]["answer"].'",';

                }
                $arrysize=$i-1;
                ?>
                <script>
                    var answers=[<?php echo  substr($choiceAnsCode, 0, -1);?>];
                    var answer_statu="";
                    var correctans = [<?php echo  substr($jsAnsArray, 0, -1);?>];

                    function checkAnswer() {
                        score=0;
                        for(i=0;i<answers.length;i++){
                            if (document.getElementById(answers[i]).checked) {
                                answer_statu = "Correct";
                                score++;
                                //alert("correct"+answers[i]+"correct ans"+correctans[i]);
                            }
                            else {
                                answer_statu = "Wrong : The Correct answer is "+correctans[i];
                                //alert("wrong"+answers[i]);

                            }
                            document.getElementById('answer_statu'+i).innerText = answer_statu;

                        }
                        document.getElementById('score').innerText="You have scroed "+score+"/"+answers.length;

                    }
                </script>


                <br>

                <?php //echo $result[0]["lesson_description"];?>
                <br><br>
                <!--a href="<?php //echo LESSSONURL."?cata=Beginner";?>" class="get-started-btn-custom">Take Quiz</--a-->


            </div>
        </div>

    </div>

</section>



