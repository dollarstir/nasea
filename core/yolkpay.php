<?php

class Yolkpay
{
    public $key;

    public function __construct()
    {
        // $this->key = 'pk_test_25b3d5f8bfb5621c4569175877020aafe6085a0a';
    }

    public $email;
    public $name;
    public $phone;
    public $secret;
    public $amount;
    public $orderid;

    public static function pay()
    {
        echo '<button class="btn btn-primary" type="submit" onclick="payWithPaystack()"> Pay </button>';
    }

    public static function handler()
    {
        echo ' <script src="https://js.paystack.co/v1/inline.js"></script>';
    }

    public function payscript($fname, $lname, $email, $phone, $amount, $ref = '')
    {
        if ($ref == '') {
            $r1 = 'YP';
            $r2 = uniqid('AdfSXD');
            $r3 = time();
            $ref = $r1.''.$r2.''.$r3;
        }
        echo '<script>
       // var paymentForm = document.getElementById("paymentForm");

       // paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack() {

  var handler = PaystackPop.setup({

    key:"'.Config::get('PUBLIC_KEY').'", 

    email: "'.$email.'",

    amount: '.$amount.' * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit

    currency: "'.Config::get('CURRENCY_CODE').'", // Use GHS for Ghana Cedis or USD for US Dollars

    firstname: "'.$fname.'",

    lastname: "'.$lname.'",

    ref: "'.$ref.'", // Replace with a reference you generated
    metadata: {
        custom_fields : 
            [
                    {
                        display_name: "Mobile Number",
                        variable_name: "mobile_number",
                        value:"+233556676471"
                    }
                    
            
            ]
    },

    callback: function(response) {

      //this happens after the payment is completed successfully

      var reference = response.reference;
      var fname  = "'.$fname.'";
      var lname = "'.$lname.'";
      var email = "'.$email.'";
      var amount = "'.$amount.'";
       

      //alert("Payment complete! Reference: " + reference);
    window.location="'.Config::get('CALLBACK_URL').'/'.$fname.' '.$lname.'/'.$email.'/'.$phone.'/'.$amount.'/'.$ref.'" ;
      
      // Make an AJAX call to your server with the reference to verify the transaction
      
                   
    },

    onClose: function() {

      alert("Transaction was not completed, window closed.");

    },

  });

  handler.openIframe();

}
    </script>';
    }
}
