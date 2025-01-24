<?php

namespace App\Livewire;

use Livewire\Component;
use Mpesa;

class Payment extends Component
{   
    public $b2bTransaction;
 
    public function pay(){
        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode="174379";
        $LipaNaMpesaPasskey= "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType= "CustomerPayBillOnline";
        $Amount= 1;
        $PartyA="254796675566";
        $PartyB= "174379";
        $PhoneNumber= "254796675566";
        $CallBackURL="http://yourdomain.com/mpesa/confirmation";
        $AccountReference= "AccountReference"; 
        $TransactionDesc="TransactionDesc";
        $Remarks="Remarks";

        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode, 
            $LipaNaMpesaPasskey, 
            $TransactionType, 
            $Amount, 
            $PartyA, 
            $PartyB, 
            $PhoneNumber, 
            $CallBackURL, 
            $AccountReference, 
            $TransactionDesc, 
            $Remarks
        );
        dd($stkPushSimulation);
    }



     
    public function render()
    {
        return view('livewire.payment');
    }


}
