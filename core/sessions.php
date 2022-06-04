<?php

class sessions
{
    public function logout($sessionvariable = '')
    {
        if ($sessionvariable == '') {
            session_start();
            session_destroy();
            $msg = 'success';
        } else {
            session_start();
            unset($_SESSION[$sessionvariable]);
            $msg = 'success';
        }

        return $msg;
    }

    public function addsession($sessionvariable, $value)
    {
        $_SESSION[$sessionvariable] = $value;
    }

    public function updatesession($sessionvariable, $value)
    {
        $_SESSION[$sessionvariable] = $value;
    }

    public function viewsession($sessionvariable)
    {
        // session_start();
        $dd = $_SESSION[$sessionvariable];

        return $dd;
    }

    public function deletesession($sessionvariable = '')
    {
        if ($sessionvariable == '') {
            session_destroy();
        } else {
            unset($_SESSION[$sessionvariable]);
        }
    }

    public function initsession()
    {
        session_start();
    }
}
