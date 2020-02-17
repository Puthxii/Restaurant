<?php 
require_once '/../include/dbConnect.php';

class restModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "rest");
    }

    public function getAllRestaurant() {
        $cursor = $this->col->find();
        return $cursor;
    }

    public function getNameById($id){
        $query =  array("id" => (int)$id );
        $cursor = $this->col->findOne($query);
        return $cursor;
    }
}