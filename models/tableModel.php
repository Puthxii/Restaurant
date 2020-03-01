<?php 
require_once '/../include/dbConnect.php';

class tableModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "table");
    }

    public function getAlltable() {
        $cursor = $this->col->find();
        return $cursor;
    }

    public function getNameById($id){
        $query =  array("id" => intval($id) );
        $cursor = $this->col->findOne($query);
        // var_dump($query);
        // exit();
        return $cursor;
    }

    
}