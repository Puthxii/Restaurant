<?php
require_once '/lib/Slim/Slim/Slim.php';
require_once '/controllers/restController.php';
require_once '/controllers/tableController.php';
require_once '/controllers/bookingController.php';
require_once '/controllers/reserController.php';

  Slim\Slim::registerAutoloader();
  $app = new Slim\Slim();

  function response($status, $response) {
    $app = \Slim\Slim::getInstance();
    $app->status($status);
    $app->contentType('application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
  }

  $app->get('/getRest',['restController', 'index']);

  $app->get('/getTable',['tableController', 'index']);

  // $app->get('/getReser',['reserController', 'index']);

  $app->post('/insert', function() use($app){
    bookingController::insert($app->request()); //$name , $age, $education , $address
  });

  $app->post('/getNameNumberById', function() use($app){
    bookingController::getNameNumberByID($app->request()); //$name , $age, $education , $address
  });

  $app->post('/getReser', function() use($app){
    reserController::getReser($app->request()); //$name , $age, $education , $address
  });

  $app->run();
?>
