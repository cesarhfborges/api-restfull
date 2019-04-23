<?php
class usersController extends Controller
{
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/json;');
        $l = new PDOLogin();
        if (!isset($_POST['TOKEN'])){
            header("location: ".BASE_URL);
        } else if ($l->validaToken($_POST['TOKEN'])){
            //header("location: ".BASE_URL.'error/canAccess/');
        }
    }
    public function index() { //route to list all Users
        $data = array();
        $usuarios = new PDOUsuarios();
        $data = [
            'code' => 200,
            'auth' => ''
        ];
        $lista = $usuarios->listaUsuarios();
        for ($i = 0; $i < count($lista); $i++){
            echo $lista[$i]->getId();
            echo $lista[$i]->getNome();
        }
        //echo json_encode($data);
    }

    public function create(){
        $id         = ( isset($_POST['ID']) ) ? $_POST['ID'] : null;
        $nome       = ( isset($_POST['NOME']) ) ? $_POST['NOME'] : null;
        $sobrenome  = ( isset($_POST['SOBRENOME'])) ? $_POST['SOBRENOME'] : null;
        $email      = ( isset($_POST['EMAIL']) ) ? $_POST['EMAIL'] : null;
        $senha      = ( isset($_POST['SENHA']) ) ? $_POST['SENHA'] : null;
        $telefone1  = ( isset($_POST['TELEFONE1'])) ? $_POST['TELEFONE1'] : null;
        $telefone2  = ( isset($_POST['TELEFONE2'])) ? $_POST['TELEFONE2'] : null;
        $ativo      = ( isset($_POST['ATIVO'])) ? $_POST['ATIVO'] : true;
        $u = new Usuario($id, $nome, $sobrenome, $email, $senha, $telefone1, $telefone2, $ativo);
    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }
}
