<?php
class Resetpass extends database{

    function tomail($table, $records, $target= '',$reciever,$code){
        try{
            $vu = '';

            foreach ($records as $key => $value) {
                $vu .= $key.'= :'.$key.',';
            }
            $vu = rtrim($vu, ',');
            $ch = $this->conn->prepare("SELECT * FROM $table WHERE $target");
            $ch->execute();
            $row = $ch->rowCount();
            if($row < 1 ){
                $msg = "User does not exist";

            }

            else{
                $up = $this->conn->prepare("UPDATE $table SET $vu WHERE $target");
                // var_dump($up);
                foreach ($records as $key => $value) {
                    $up->bindValue(':'.$key, $value);
                }
                if ($up->execute()) {
                    // $rp = $this->sms("Dollarsoft","0556676471","045454");
                    // $msg = "Verifcation code sent to your email";
                    if(mail($reciever,"verification","your verifcation code is ".$code)){
                        $msg = "Verifcation code sent to your email";

                    }
                    else{
                    $msg = "Verifcatio failed";

                    }
                } else {
                    $msg = 'Failed to send code';
                }
            }

        }
        catch(PDOException $e){
            $msg = $e;
        }

        return $msg;
    }



    function tophone($table, $records, $target= ''){
        try{
            $vu = '';

            foreach ($records as $key => $value) {
                $vu .= $key.'= :'.$key.',';
            }
            $vu = rtrim($vu, ',');
            $ch = $this->conn->prepare("SELECT * FROM $table WHERE $target");
            $ch->execute();
            $row = $ch->rowCount();
            if($row < 1 ){
                $msg = "User does not exist";

            }

            else{
                $up = $this->conn->prepare("UPDATE $table SET $vu WHERE $target");
                var_dump($up);
                foreach ($records as $key => $value) {
                    $up->bindValue(':'.$key, $value);
                }
                if ($up->execute()) {
                    // $rp = $this->sms("Dollarsoft","0556676471","045454");
                    $msg = "Verifcation code sent to your email";
                } else {
                    $msg = 'Failed to send code';
                }
            }

        }
        catch(PDOException $e){
            $msg = $e;
        }

        return $msg;
    }

   
}