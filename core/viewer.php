<?php

class Viewer
{
    public static function assets($path = '', $headers = [])
    {
        $root = trim(Path::rebase(), '/');

        $from = getallheaders()['Referer'] ?? '';
        $from = preg_replace("/^https?:\/\/[a-zA-Z0-9_:]+\//", '', $from);
        if ($root != '') {
            $from = array_reverse(explode("$root", $from))[0];
        }
        $from = ltrim($from, '/');
        if (!preg_match("/.+\/$/", $from) && !preg_match("/\/[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/", $from)) {
            $from = preg_replace('/.{1}$/', '', $from);
        }
        $path = str_replace("$from", '', $path);

        $path = explode('/', $path);
        $from = explode('/', $from);

        $tmp = [];
        foreach ($from as $key => $value) {
            if ($value != $path[$key]) {
                break;
            }

            $tmp[] = $value;
        }
        $path = implode('/', $path);
        $extra = array_pop($tmp);
        $tmp = implode('/', $tmp);

        foreach ($headers as $key => $value) {
            header("$key: $value");
        }

        $path = trim(str_replace($tmp, '', $path), '/');
        if (is_readable($path)) {
            include_once $path;
        } else {
            self::error(404);
        }

        return;
    }

    public static function error($code = 404)
    {
        http_response_code($code);
        require Path::root("core/error/$code.php");

        return;
    }

    public static function view($path = '', $context)
    {
        $path = Path::root($path);

        if (is_readable($path)) {
            require_once $path;
        } else {
            self::error(404);
        }

        return;
    }

    public static function response($message = '')
    {
        if (is_array($message)) {
            echo json_encode($message);
        } else {
            echo $message;
        }

        return;
    }
}
