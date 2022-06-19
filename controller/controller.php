<?php
include("./model/model.php");
include("./view/view.php");

 
class Controller{
   function index(){
      $model = new model;
      $view = new view;

      for ($x = 0; $x <= 3; $x++) {
         $nama= $model->getNama($x);
         $nim= $model->getNim($x);
         $view->index($nama, $nim);
      }
   }
 }
?> 
