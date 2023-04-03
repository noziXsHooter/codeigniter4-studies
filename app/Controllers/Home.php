<?php

namespace App\Controllers;

use App\Libraries\payments\PaymentPagSeguro;
use CodeIgniter\Events\Events;

class Home extends BaseController
{
    public function index()
    {

        Events::trigger('payment', new PaymentPagSeguro);
        return view('welcome_message');
    }
}
