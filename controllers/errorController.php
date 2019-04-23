<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 18/04/2019
 * Time: 23:40
 */

class erroController extends Controller
{
    public function __construct() {
        parent::__construct();
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header('Content-Type: application/json;');
    }
    public function index() {
        $data = array();
        $data = [
            'code' => 404
        ];
        http_response_code(404);
        echo json_encode($data);
    }
    public function canAccess() {
        $data = array();
        $data = [
            'code' => 401
        ];
        http_response_code($data['code']);
        echo json_encode($data);
    }
}
