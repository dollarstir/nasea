<?php

class Sel extends database
{
    public function select($table, $target, $conjunction = '', $order = [], $limit = '')
    {
        if (is_array($order)) {
        } else {
            $order = [$order];
        }

        $kof = '';
        if ($order != []) {
            foreach ($order as $key => $value) {
                $kof .= "ORDER BY $key $value";
            }
        } else {
            $kof = '';
        }
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
        // echo "SELECT * FROM $table $vs $limit";
        // $vs = rtrim($vs, $conjunction);
        // echo $vs;
        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof ");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof LIMIT $limit");
        }
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $sel->bindValue(':'.$value[0], $value[2]);
                }
            }
        }
        try {
            $sel->execute();

            return $sel->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e;
        }
    }

    // random

    public function randomfetch($table, $target, $conjunction, $limit)
    {
        $kof = 'ORDER BY RAND()';

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
        // echo "SELECT * FROM $table $vs $limit";
        // $vs = rtrim($vs, $conjunction);
        // echo $vs;
        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof ");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof LIMIT $limit");
        }
        foreach ($target as $value) {
            if (is_array($value)) {
                if (count($value) == 3) {
                    $sel->bindValue(':'.$value[0], $value[2]);
                }
            }
        }
        try {
            $sel->execute();

            return $sel->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function getall($table, $order = [], $limit = '')
    {
        if (is_array($order)) {
        } else {
            $order = [$order];
        }
        $kof = '';
        if ($order != []) {
            foreach ($order as $key => $value) {
                $kof .= "ORDER BY $key $value";
            }
        } else {
            $kof = '';
        }
        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof  LIMIT $limit");
        }

        $sel->execute();

        return $sel->fetchAll(PDO::FETCH_ASSOC);
    }

    public function allrandom($table, $limit = '')
    {
        $kof = 'ORDER BY RAND()';

        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $kof  LIMIT $limit");
        }

        $sel->execute();

        return $sel->fetchAll(PDO::FETCH_ASSOC);
    }
}
