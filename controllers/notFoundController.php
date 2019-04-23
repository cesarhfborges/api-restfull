<?php
/**
 * Created by PhpStorm.
 * User: Cesar
 * Date: 18/04/2019
 * Time: 23:40
 */

class notFoundController extends Controller
{
    public function index() {
        $data = array();
        $data = [
            'code' => 404
        ];
        header('Content-Type: application/json');
        http_response_code(404);
        echo json_encode($data);
    }
}
