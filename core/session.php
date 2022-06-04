<?php

class Session extends Yolk
{
    public function authpagechecker($sessionvariable, $isloggedinlocation = '')
    {
        session_start();
        if (isset($_SESSION[$sessionvariable])) {
            $this->goto($isloggedinlocation);
        } else {
            // $this->goto($notloginlocation);
        }
    }

    public function mainpagechecker($sessionvariable, $notloginlocation = '')
    {
        session_start();
        if (isset($_SESSION[$sessionvariable])) {
            // $this->goto($isloggedinlocation);
        } else {
            $this->goto($notloginlocation);
        }
    }
}
