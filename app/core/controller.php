<?php

// main controller class
class Controller{

  public function view($view, $data = []){
    extract($data);
    $filename = "../app/views/".$view.".view.php";
    if(file_exists($filename)){
      require $filename;
    }else{
      echo "could not found view file: $filename";
    }
  }
}