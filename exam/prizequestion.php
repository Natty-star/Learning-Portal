<?php
include_once "./class/question.php";

 

$question=new question();
$result=$question->get_questions_for_prize();
$choiceAnsCode="";
?>

<section id="about" class="section-bg">
    <div class="container-fluid">
    <div class="section-header">
            <h3 class="section-title">Prize Question</h3>
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
                                   name="groupOfDefaultRadios[]" value="<?php echo $name?>">
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
                <?php 
                //echo $jsAnsArray;
                ?>
                <script>
                    var answers=[<?php echo  substr($choiceAnsCode, 0, -1);?>];
                    var answer_statu="";
                    var correctans = [<?php echo  substr($jsAnsArray, 0, -1);?>];
                   
                    function checkAnswer() {
                        score=0;
                        lose=0;
                        for(i=0;i<answers.length;i++){
                            if (document.getElementById(answers[i]).checked) {
                                answer_statu = "Correct";
                                score++;
                                }
                            else {
                                lose++;
                            }
                           
                        }
                        var checkall = document.querySelectorAll('input[name="groupOfDefaultRadios[]"]:checked').length;
                        if(answers.length == checkall){
                             window.location.href = "result.php?score=" + score;
                          }else{
                
                            document.getElementById("score").textContent = "You have to answer all question";
                           // console.log(le)
                           
                            
                        }
                        

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


