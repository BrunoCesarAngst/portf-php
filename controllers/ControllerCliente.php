<?php 
  require_once("controllers/Controller.php");
  require_once("models/ModelCliente.php");

  class ControllerCliente extends Controller {

    public function __construct(){
      $this->model = new ModelCliente();
    }

    // public function create(){
    //   $cliente = array(
    //     "nome" => $_POST['nome'],
    //     "password" => $_POST['password'],
    //     "sexo" => $_POST['sexo'],
    //     "escolhas" => $_POST['escolhas'],
    //     "selecao" => $_POST['selecao'],
    //     "opcao" => $_POST['opcao'],
    //     "textArea" => $_POST['textArea']
    //   );
    //   $this->model->create($cliente);
    // }

    function index(){
      require_once('models/ModelCliente.php');
      $cliente = new modelCliente();
      $cliente -> index();
      $resultado = $cliente -> getConsulta();

      $arrayClientes = array();
      while ($linha = $resultado -> fetch_assoc()) {
        array_push($arrayClientes, $linha);
      }
      require_once('views/templates/header.php');
      require_once('views/cliente/clientes.php');
      require_once('views/templates/footer.php');
    }

    public function formCliente (){
      $this->template('views/cliente/novoCliente.php');
    }
    public function cliente (){
      $this->template('views/cliente/cliente.php');
    }
  }
?>