<?php
require_once '/../models/bookingModel.php';
require_once '/../models/restModel.php';
require_once '/../models/tableModel.php';
class bookingController
{
    public function insert($request){
        $restId = $request->post('restId');
        $tableId = $request->post('tableId');
        $cusId = $request->post('cusId');
        $date = date("Y-m-d");

        $db = new bookingModel();
        $result = $db->insert($restId , $tableId, $cusId , $date);
        $arrStudent = array();
        if($result) {
            $res["error"] = FALSE;
            $res["message"] = "Success to insert a new friend";
        } else {
            $res["error"] = TRUE;
            $res["message"] = "Failed to add a new friend";
        }
        response(200, $result);
     }


     public function getNameNumberById($request){
        $restId = $request->post('restId');
        $tableId = $request->post('tableId');

        $rest = new restModel();
        $restData = $rest->getNameById($restId);

        $table = new tableModel();
        $tableData = $table->getNameById($tableId);

        response(200, ["rest"=>$restData, "table"=>$tableData]);

     }

}