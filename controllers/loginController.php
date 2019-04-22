<?php
/**
 * Created by PhpStorm.
 * User: cesar.borges
 * Date: 22/04/2019
 * Time: 09:48
 */

class loginController extends Controller
{
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
        header("Access-Control-Allow-Origin: *"); // Controle de Acesso
        header("Content-Type: application/json; charset=utf-8"); //Tipo de Conteudo no caso json
        clearstatcache(); // limpa o cache
    }

    public function index(){
        $data = array();
        $login = isset($_POST['LOGIN']) ? $_POST['LOGIN'] : false;
        $senha = isset($_POST['SENHA']) ? $_POST['SENHA'] : false;
        $token = isset($_POST['TOKEN']) ? $_POST['TOKEN'] : false;
        $l = new PDOLogin();
        $r = $l->doLogin($login, $senha);
        if ($r != false){
            $data = [
                'code' => 200,
                'auth' => true,
                'data' => $r
            ];
        } else {
            header("location: ".BASE_URL."error/loginError/");
        }
        echo json_encode($data);
        http_response_code($data['code']);
    }

    public function verify(){
        $data = array();
        $token = isset($_POST['TOKEN']) ? $_POST['TOKEN'] : null;
        $l = new PDOLogin();

    }

    public function logout(){

    }
}