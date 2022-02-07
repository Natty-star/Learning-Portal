<?php
include_once "db.php";

class user{

    public function check_subscription($user_id){
        $query="SELECT * FROM `users` WHERE `user_id` = $user_id";
        $db = new db();
        $result=$db->fetchAll($query);
        if($result!=null)
        return true;
        return false;
    }

    public function subscribe($user_id){

        $dateAndTime=date("Y-m-d H:i:s");
        $query="INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_status`, `registration_date`, `sms_sync`) VALUES ('$user_id', 'qwe', 'qwe', 'Active', '$dateAndTime', '1');";
        $db = new db();
        return $db->executeQuery($query);
    }

    public function unsubscribe($user_id){
        $dateAndTime=date("Y-m-d H:i:s");
        $query="UPDATE `users` SET 
                `user_status`='Inactive',`sms_sync`=1 WHERE `user_id` =$user_id";
        $db = new db();
        $result=$db->executeQuery($query);
        if($result>0)
            return true;
        return false;
    }



}