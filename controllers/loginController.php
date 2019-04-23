<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 18/04/2019
 * Time: 23:45
 */

class loginController extends Controller
{
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/json;');
    }
    public function index() { //route to list all Users
        $data = array();
        if (isset($_POST['EMAIL']) and isset($_POST['SENHA'])){
            $l = new PDOLogin();
            $status = $l->doLogin($_POST['EMAIL'], $_POST['SENHA']);
            if ($status != false){
                $data = [
                    'code' => 200,
                    'token' => $status
                ];
            }
        } else {
            $data = [
                'code' => 401,
                'message' => 'Acesso Não Autorizado'
            ];
        }
        http_response_code($data['code']);
        echo json_encode($data);
    }

    public function validaToken(){
        $data = array();
        $l = new PDOLogin();
        if (isset($_POST['TOKEN']) and $l->validaToken($_POST['TOKEN'])){
            $data = [
                'code' => 200,
                'token' => true
            ];
        } else {
            $data = [
                'code' => 401,
                'token' => false
            ];
        }
        http_response_code($data['code']);
        echo json_encode($data);
    }

    public function read(){

    }

    public function update(){

    }

    public function delete(){

    }
}
