<?php
require_once '/../models/restModel.php';
class restController
{
   function index(){
         $db = new restModel();
         $cursor = $db->getAllRestaurant();
      
         $arrRest = [];
         foreach( $cursor as $key => $value){         
               $restData = [
                  "id" => $value["_id"],
                  "name" => $value["name"],
                  "phone" => $value["phone"],
                  "address" => $value["address"],
                  "brand" => $value["brand"],
                  "picture" => empty($value["picture"])?"default.jpg": $value["picture"] 
               ];
               array_push($arrRest,$restData);
            }
         response(200, $arrRest);
   }
}