<?php

class Counter extends database
{

    public function countall($table){
        try{
            $co = $this->conn->prepare("SELECT count(*) FROM $table");
            $co->execute();
            $cc = $co->fetchColumn();
            if($cc <= 0){
                $msg= "0";
            }
            else{
                $msg =$cc;
            }
        }
        catch(PDOException $e){
            $msg = $e;
        }

        return $msg;
    }

    public function customcount($table, $target, $conjunction = ''){
        $vs = '';
        foreach ($target as $value){
            if(is_array($value)){
                if (count($value) == 3) {
                    $colunmname = $value[0];
                    $operator = $value[1];
                    $colunmvalue = $value[2];
                    if($vs == ''){
                        $vs .= 'WHERE '.$colunmname.' '.$operator.' :'.$colunmname;
                    }
                    else{
                        $vs .= " $conjunction $colunmname $operator :$colunmname";
                    }   

                }
            } 
        }

        $co = $this->conn->prepare("SELECT count(*) FROM $table $vs");
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $co->bindValue(':'.$value[0], $value[2]);
                }
            }
        }
        try{
            $co->execute();
            $cc = $co->fetchColumn();
            if($cc <= 0){
                $msg= "0";
            }
            else{
                $msg =$cc;
            }

        }
        catch(PDOException $e){
            $msg = $e;
        }

        return $msg;
    }


}