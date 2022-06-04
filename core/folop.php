<?php

class Folop {

    static public function foe($response,$action){
            $count = 1;
        foreach($response as $ss){

            echo call_user_func($action,$ss,$count++);
        }
    }

    static public function folo($first,$last,$callback,$steps= 1){

        if($first > $last){
            for ($i = $first; $i >= $last ;$i= $i - $steps){
                echo call_user_func($callback,$i);
            }
        }
        else{
            for ($i = $first; $i <= $last ;$i= $i + $steps){
                echo call_user_func($callback,$i);
            }
        }


    }

    
}


?>