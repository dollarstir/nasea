<?php

class Converter{

    static function currency($amount,$from_currency,$to_currency){
        $apikey = 'b956567a2dd5aa819f1e';
      
        try{

            $from_Currency = urlencode($from_currency);
        $to_Currency = urlencode($to_currency);
        $query =  "{$from_Currency}_{$to_Currency}";
      
       
        
            $json = file_get_contents("https://free.currconv.com/api/v7/convert?q={$query}&compact=ultra&apiKey={$apikey}");
        

        
        $obj = json_decode($json, true);
      
        $val = floatval($obj["$query"]);
      
      
        $total = $val * $amount;
        $response = number_format($total, 2, '.', '');
        }
        catch(Exception $e){
            $response = "Check internet connection";
        }

        return $response;
    }
}