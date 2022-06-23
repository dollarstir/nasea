<?php

class Upd extends Database
{
    public function update($table, $records, $target = [], $files = null, $uploadto = 'yolkassets/upload')
    {
        try {
            $vu = '';
            $flag = false;
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
                        $r3 = uniqid('axesdfd');
                        $ff = $rd.''.$r2.''.$r3;
                        $filetype = array_reverse(explode('/', $file['type']))[0];
                        $newfilename = $name.''.$ff.'.'.$filetype;
                        if (move_uploaded_file($file['tmp_name'], $uploadto.'/'.$newfilename)) {
                            $records[$name] = $newfilename;
                        } else {
                            $flag = true;
                        }
                    }
                }
            }

            if (!$flag) {
                foreach ($records as $key => $value) {
                    $vu .= $key.'= :'.$key.',';
                }
                $vu = rtrim($vu, ',');

                $coco = '';
                if ($target != []) {
                    foreach ($target as $key => $value) {
                        $coco .= "WHERE  $key = '".$value."'";
                    }
                } else {
                    $coco = '';
                }
                $up = $this->conn->prepare("UPDATE $table SET $vu $coco");
                // var_dump($up);
                foreach ($records as $key => $value) {
                    $up->bindValue(':'.$key, $value);
                }
                if ($up->execute()) {
                    $msg = 'success';
                } else {
                    $msg = 'failed';
                }
            }
        } catch (PDOException $e) {
            $msg = 'ERROR: '.$e->getMessage();
        }

        return $msg;
    }
}
