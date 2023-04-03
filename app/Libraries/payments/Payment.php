<?php 

namespace App\Libraries\payments;

use App\Libraries\interfaces\PaymentInterface;

class Payment
{
    public function pay(PaymentInterface $payment)
    {
        $payment->pay();
    }
}

?>