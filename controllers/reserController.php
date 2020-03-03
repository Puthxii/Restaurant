<?php
require_once '/../models/reserModel.php';
class reserController
{
   function getReser($request){
    $restId = $request->post('restId');
    $cusId = $request->post('cusId');

        $db = new reserModel();
        $cursor = $db->getAllReservation($restId, $cusId);
    
        $arrRest = [];
        foreach( $cursor as $key => $value){         
            $restData = [
                "id" => $value["_id"],
                "restaurantId" => $value["restaurantId"],
                "tableId" => $value["tableId"],
                "customerId" => $value["customerId"],
                "timeval" => $value["timeval"],
                "date" => $value["date"]
            ];
            array_push($arrRest,$restData);
        }

    response(200, $arrRest);
   }

   

}