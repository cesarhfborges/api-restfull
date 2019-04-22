<?php
Class homeController extends Controller {
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-cache, no-store, must-revalidate"); // limpa o cache
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=utf-8");
        clearstatcache(); // limpa o cache
        if (!isset($_POST['TOKEN'])){
            header("location: ".BASE_URL."error/notFound/");
        }
    }

    public function index(){ //Lista Todos os Dados
        $data = array();
        $l = new PDOLogin();
        $auth = $l->isLogged(isset($_POST['TOKEN']) ? $_POST['TOKEN'] : false);
        $data = [
            'code' => 200,
            'auth' => $auth
        ];
        echo json_encode($data);
        http_response_code($data['code']);
    }

    public function create(){
        
    }

    public function read()
    {

    }

    public function update(){

    }

    public function delete(){

    }
}
