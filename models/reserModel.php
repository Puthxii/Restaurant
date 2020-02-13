<?php 
require_once '/../include/dbConnect.php';

class reserModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "reservation");
    }

    public function getAllReservation($restId, $cusId) {
        $query =  array("restaurantId" => $restId, "customerId" => $cusId, "date"=> date("Y-m-d"));
        $cursor = $this->col->find($query);
        return $cursor;
    }
    
  

    
}