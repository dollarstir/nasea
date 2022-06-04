<?php

class Del extends Database
{
    public function delete($table, $target, $conjunction = '')
    {
        $vs = '';
        // $allval = []
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $colunmname = $value[0];
                    $operator = $value[1];
                    $colunmvalue = $value[2];
                    if ($vs == '') {
                        $vs .= 'WHERE '.$colunmname.' '.$operator.' :'.$colunmname;
                    } else {
                        $vs .= " $conjunction $colunmname $operator :$colunmname";
                    }
                }
            }
        }
        // $vs = rtrim($vs, $conjunction);
        // echo $vs;
        try {
            $sel = $this->conn->prepare("DELETE  FROM $table $vs");
            foreach ($target as $value) {
                if (is_array($value)) {
                    if (count($value) == 3) {
                        $sel->bindValue(':'.$value[0], $value[2]);
                    }
                }
            }
            $sel->execute();
            $msg = 'deleted';
        } catch (PDOException $e) {
            $msg = $e->getMessage();
        }

        return $msg;
    }
}
