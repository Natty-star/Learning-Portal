<?php
include_once "db.php";

class lesson {
    private $lesson_sequence;
    private $lesson_name;
    private $lesson_description;
    private $pre_req;
    private $pass_score;

    public function __construct(){

    }

     public function fetch_all_lessons($category){
         $whereCondition="";
         if($category!=""){
             $whereCondition=" WHERE `category` LIKE '$category'";
         }
         $query="SELECT * FROM `lesson`".$whereCondition;
         //echo $query;
         $db = new db();
         $result=$db->fetchAll($query);
         return $result;
    }
    public function fetch_lessons_detail($lesson_sequence){
         $query="SELECT * FROM `lesson` WHERE `lesson_sequence` = $lesson_sequence";
         $db = new db();
         $result=$db->fetchAll($query);
         return $result;
    }

}
