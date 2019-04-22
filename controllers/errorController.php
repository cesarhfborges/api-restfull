<?php
/**
 * Created by PhpStorm.
 * User: cesar.borges
 * Date: 22/04/2019
 * Time: 10:07
 */

class errorController extends Controller
{
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=utf-8");
        clearstatcache(); // limpa o cache
    }

    public function index(){
        $data = array();
        $data = [
            'code' => 404,
            'message' => 'Requisição Inválida'
        ];
        echo json_encode($data);
        http_response_code($data['code']);
    }

    public function notFound(){
        $data = array();
        $data = [
            'code' => 404,
            'message' => 'Requisição Inválida'
        ];
        echo json_encode($data);
        http_response_code($data['code']);
    }

    public function loginError(){
        $data = array();
        $data = [
            'code' => 401,
            'auth' => 'Auth Error, Try Again'
        ];
        echo json_encode($data);
        http_response_code($data['code']);
    }
}