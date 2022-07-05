<?php

class pagination extends database
{
    public function paginate($table, $order = [], $limit, $ct)
    {
        // var_dump($ct);
        $ct;
        $page = ($ct != '') ? $ct : 1;
        $starting_limit = ($page - 1) * $limit;
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
            $sel = $this->conn->prepare("SELECT * FROM $table $kof  LIMIT $starting_limit,$limit");
        }

        $sel->execute();

        return $sel->fetchAll(PDO::FETCH_ASSOC);
    }

    // custome pagenate
    public function customepaginate($table, $target, $conjunction = '', $order = [], $limit, $ct)
    {
        // var_dump($ct);
        $ct;
        $page = ($ct != '') ? $ct : 1;
        $starting_limit = ($page - 1) * $limit;
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
        if ($limit == '') {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof");
        } else {
            $sel = $this->conn->prepare("SELECT * FROM $table $vs $kof  LIMIT $starting_limit,$limit");
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

    public function pagecount($table, $perpage, $ct)
    {
        try {
            // $total_pages = ceil($total_results / $perPage);
            $co = $this->conn->prepare("SELECT count(*) FROM $table");
            $co->execute();
            $cc = $co->fetchColumn();
            $total_pages = ceil($cc / $perpage);
            $canto = $ct - 1;
            $mimi = ($ct == 1) ? '' : '<li><a href="books?page='.$canto.'" class="angle"><i class="fa fa-angle-left"></i></a></li>';
            $result = $mimi;
            for ($page = 1; $page <= $total_pages; ++$page) {
                $conto = $ct + 1;
                $combo = ($ct == $page) ? 'active' : '';
                $combo2 = ($ct == $total_pages) ? '' : '<li><a href="books?page='.$conto.'" class="angle"><i class="fa fa-angle-right"></i></a></li>';
                $result .= '
                <li><a href="books?page='.$page.'" class="'.$combo.'">'.$page.'</a></li>
                  
                  
              ';
            }
            $result .= $combo2;
        } catch (PDOException $e) {
            $result = $e;
        }

        return $result;
    }
}
