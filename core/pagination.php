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

    public function pagecount($table, $perpage, $ct)
    {
        try {
            // $total_pages = ceil($total_results / $perPage);
            $co = $this->conn->prepare("SELECT count(*) FROM $table");
            $co->execute();
            $cc = $co->fetchColumn();
            $total_pages = ceil($cc / $perpage);
            $result = '<nav aria-label="Page navigation example">
            <ul class="pagination">
              <li class="page-item '.($ct == 1 ? 'disabled' : '').'">
                <a class="page-link" href="'.($ct - 1).'" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                </a>
              </li>';
            for ($page = 1; $page <= $total_pages; ++$page) {
                $result .= '
                  <li class="page-item '.($ct == $page ? 'active' : '').'"><a class="page-link" href="'.$page.'">'.$page.'</a></li>
                  
                  
              ';
            }
            $result .= '<li class="page-item '.($ct == $total_pages ? 'disabled' : '').'">
            <a class="page-link" href="'.($ct + 1).'" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
                </a>
             </li>
                </ul>
             </nav>';
        } catch (PDOException $e) {
            $result = $e;
        }

        return $result;
    }
}
