<?php
include_once "db.php";
class question{

    public function get_questions_for_lesson($lesson_sequence){
        $query="SELECT * FROM `questions` WHERE `lesson_sequence` = $lesson_sequence";
        $db = new db();
        $result=$db->fetchAll($query);
        return $result;
    }
    public function get_overall_evaluation_question(){
        $query="SELECT * FROM `questions`";
        $db = new db();
        $result=$db->fetchAll($query);
        return $result;
    }

    public function get_questions_for_prize(){
        $query="SELECT * FROM `questions` WHERE `lesson_sequence` = -1";
        $db = new db();
        $result=$db->fetchAll($query);
        return $result;
    }
}