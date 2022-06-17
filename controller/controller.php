<?php
 include("model.php");
 include("view.php");
 
class Controller{
function index(){
   $data['nama']= model->getNama();
   $data['nik']= model->getNim();
   view->index($data);
  }
 }
?> 
