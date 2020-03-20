<?php
  if(!isset($_GET["c"])){
    require_once("controllers/ControllerSite.php");
    $controller = new ControllerSite();
    $controller->home();
  } else {
    switch($_REQUEST["c"]){
      case "s" : require_once("controllers/ControllerSite.php");
      $controller = new ControllerSite();
        switch($_REQUEST["a"]){
          case "h": $controller->home(); break;
          case "a": $controller->about(); break;
          case "p": $controller->product(); break;
          case "f": $controller->contact(); break;  
        }
        break;  
        case 'cliente' : 
          require_once('controllers/ControllerCliente.php');
          util(new ControllerCliente());
        break;
    }
  }

  function util ($controllers) { 
    switch($_REQUEST['metodo']){
      case 'criar': $controllers->formCliente(); break;
      case 'cliente': $controllers->cliente(); break;
      case 'listar': $controllers->index(); break;
    }
  }
?>