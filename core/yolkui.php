<?php 

class YolkUI {
    public static function run($contents = []) {
        echo "<!DOCTYPE html>";
        if(!is_array($contents)) {
            $contents = [$contents];
        }

        foreach ($contents as $content) {
            // try {
                $content->render();
            // } catch (\Throwable $e) {
            //     echo "<error>No Tag Exist</error>";
            // }
        }
    } 
}
