<?php
 include("./model/model.php");
//  include("view.php");

 
class Controller{
   function index(){
      $model = new model;
      $data['nama']= $model->getNama();
      $data['nim']= $model->getNim();
      // view->index($data);
   }
 }
?> 
