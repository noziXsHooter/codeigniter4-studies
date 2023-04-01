<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class Contact extends Controller{

    public function index()
    {
       // var_dump("INDEX");
       return $this->response->setJson('data')->setStatusCode(200);
    }

    public function edit($param1,$param2)
    {
        var_dump($param1, $param2);
    }

    public function store()
    {
/*         var_dump('oi');
        die(); */
        redirect('home');
    }
}