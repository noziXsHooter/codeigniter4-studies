<?php 
namespace App\Controllers;

use CodeIgniter\Controller;

class User extends Controller{

    public function index()
    {
        var_dump('store'); 
    }

    public function store()
    {
        var_dump('store');
        var_dump(url_to('userStore'));
    }
}