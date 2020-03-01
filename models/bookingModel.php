<?php 
require_once '/../include/dbConnect.php';

class bookingModel {
    private $con;
    private $col;

    function __construct() {
        $db = new dbConnect();
        $this->con = $db->connect();
        $this->col = new MongoCollection($this->con, "reservation");
    }

    public function insert($restId , $tableId, $cusId , $timeval, $date){
        $document = [
            "restaurantId" => $restId,
            "tableId" => $tableId,
            "customerId" => $cusId,
            "timeval" => $timeval,
            "date" => $date
        ];
        
    
        try {
            $cur = $this->col->insert($document);
            return $cur;
        }
        catch (MongoCursorException $e) {
            return false;
        }
    }

    



}