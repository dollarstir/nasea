<?php

class Add extends database
{
    public function insert($table, $records, $files = null, $uploadto = 'yolkassets/upload')
    {
        $man = '';
        $vv = '';
        $flag = false;
        // var_dump($files);
        if (!is_null($files)) {
            if (count($files) > 0) {
                foreach ($files as $name => $file) {
                    if ($flag) {
                        break;
                    } elseif ($file['size'] <= 0) {
                        break;
                    }
                    $oldfilename = $file['name'];
                    $rd = rand(00, 99);
                    $r2 = time();
                    $r3 = uniqid('a');
                    $ff = $rd.''.$r2.''.$r3;
                    $filetype = array_reverse(explode('/', $file['type']))[0];
                    $newfilename = $name.''.$ff.'.'.$filetype;
                    if (move_uploaded_file($file['tmp_name'], $uploadto.'/'.$newfilename)) {
                        $records[$name] = $newfilename;
                    } else {
                        $flag = true;
                        $msg = 'failed  to upload file';
                    }
                }
            }
        }
        if (!$flag) {
            foreach ($records as $key => $value) {
                $man .= $key.',';
                $vv .= ':'.$key.',';

                // $fields[] = $key;
            // $values[] = "'".$value."'";
            }
            $man = rtrim($man, ',');
            $vv = rtrim($vv, ',');
            $ins = $this->conn->prepare("INSERT INTO $table ($man) VALUES ($vv)");

            foreach ($records as $key => $value) {
                $ins->bindValue(':'.$key, $value); // $fields[] = $key;
                // $values[] = "'".$value."'";
            }

            if ($ins->execute()) {
                $msg = 'success';
            } else {
                $msg = 'failed';
            }

            // var_dump($ins);
            // var_dump($man);
            // var_dump($vv);
        }

        return $msg;
    }
}
