<?php 

namespace App\Libraries\payments;

use App\Libraries\interfaces\PaymentInterface;


class PaymentPagSeguro implements PaymentInterface
{
    public function pay()
    {
        var_dump('pay with pagseguro');
    }

}
