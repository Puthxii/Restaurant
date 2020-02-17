<?php
require_once '/../models/tableModel.php';
class tableController
{
   function index(){
         $db = new tableModel();
         $cursor = $db->getAlltable();
      
         $arrRest = [];
         foreach( $cursor as $key => $value){   
            $tablePic = "";
            if($value["type"] == "classic"){
               $tablePic = "classic.jpg";
            }else if($value["type"] == "romantic"){
               $tablePic = "roman.jpg";
            }else{
               $tablePic = "Picnic.jpg";
            }
            $restData = [
               "id" => $value["id"],
               "number" => $value["number"],
               "type" => $value["type"],
               "picture" => $tablePic

             ];
            array_push($arrRest,$restData);
         }

        response(200, $arrRest);
   }
} 