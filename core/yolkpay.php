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

    public static function pay($text = 'Pay')
    {
        return '<button class="btn btn-primary" type="submit" onclick="payWithPaystack()"> '.$text.' </button>';
    }

    public static function handler()
    {
        return ' <script src="https://js.paystack.co/v1/inline.js"></script>';
    }

    public function payscript($fname, $lname, $email, $phone, $amount, $ref = '', $token)
    {
        if ($ref == '') {
            $r1 = 'YP';
            $r2 = uniqid('AdfSXD');
            $r3 = time();
            $ref = $r1.''.$r2.''.$r3;
            // session_start();
            $_SESSION['token'] = $token;
            $_SESSION['ref'] = $ref;
            $_SESSION['amount'] = $amount;
        }

        return '<script>
       // var paymentForm = document.getElementById("paymentForm");

       // paymentForm.addEventListener("submit", payWithPaystack, false);

function payWithPaystack() {

  var handler = PaystackPop.setup({

    key:"pk_live_8e5873261c6630797f447f3c21ddca5d99b56bde", 

    email: "'.$email.'",

    amount: '.$amount.' * 100, // the amount value is multiplied by 100 to convert to the lowest currency unit

    currency: "GHS", // Use GHS for Ghana Cedis or USD for US Dollars

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
    window.location="../ignitor" ;
      
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
