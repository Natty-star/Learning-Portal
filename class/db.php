<?php
include_once "config.php";
class db{
    private $host=DBHOST;
    private $dbName=DBNAME;
    private $dbUser=DBUSER;
    private $dbPass=DBPASS;

    protected $connection;
    protected $query;
    public $query_count = 0;

    public function __construct(){
        //echo "db initiated";
        $this->connection = new mysqli($this->host,$this->dbUser , $this->dbPass, $this->dbName);
        if ($this->connection->connect_error) {
            die('Failed to connect to MySQL - ' . $this->connection->connect_error);
        }
       // $this->connection->set_charset($charset);
    }
    public function fetchAll($query){
        $final_result=array();
        $i=0;
        if($result = mysqli_query($this->connection , $query)) {
            if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){

                foreach ($row as $key => $val)
                {
                  // echo "-" .$key. ': ' . $val . "-<br>";
                    $final_result[$i][$key]=$val;
                }
                $i++;
                }
                /*for($j=0;$j<1;$j++){
                    echo $final_result[$j]["lesson_description"];
                }*/
                return $final_result;
            }
            else{
                return null;
            }
        }

    }
    public function executeQuery($query){


        $this->connection->query($query);
        /*if ($this->connection->query($query) === TRUE) {
            return true;
        } else {
            return false;
        }*/


    }

    public function exist($query){
        $result=mysqli_query($this->connection , $query);
        if(mysqli_num_rows($result)>0){
            return true;

        }
        else
            return false;

    }

}


/*
  $db = new db();
    $db->executeQuery("");
//$db->fetchAll("SELECT * FROM `lesson`");
*/
