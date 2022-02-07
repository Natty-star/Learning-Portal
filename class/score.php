<?php
class score
{

    public function get_user_score($user_id)
    {
        $query = "SELECT * FROM `score` WHERE `user_id` = $user_id";
        $db = new db();
        $result = $db->fetchAll($query);
        return $result;
    }

    public function insert_score($user_id, $lesson_sequence, $scored_value, $total_value)
    {
        if ($this->update_score_required($user_id, $lesson_sequence, $scored_value)) {
            $query = "INSERT INTO `score`
                        (`score_id`, `date_of_test`, `lesson_sequence`, `scored_value`, `total_value`, `user_id`) 
                        VALUES 
                        (," . datetime() . ",$lesson_sequence,$scored_value,$total_value,$user_id)";
            $db = new db();
            $result = $db->executeQuery($query);
            return $result;
        }
    }

    public function delete_score($user_id, $lesson_sequence)
    {
        $query = "DELETE FROM `score` WHERE `user_id` = $user_id AND `lesson_sequence`=$lesson_sequence";
        $db = new db();
        $result = $db->executeQuery($query);
        return $result;
    }

    public function update_score_required($user_id,$lesson_sequence,$scored_value){

        $query="SELECT * FROM `score` WHERE `user_id` = $user_id AND `lesson_sequence`=$lesson_sequence";
        $db = new db();
        $result=$db->fetchAll($query);
        if($result==null){
            return true;
        }
        else{
            for($j=0;$j<1;$j++){
                if($result[$j]["scored_value"]>$scored_value)
                {
                    delete_score($user_id,$lesson_sequence);
                    return true;
                }

                }
            return false;
        }
    }
}
