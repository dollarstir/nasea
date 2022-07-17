<?php

function fetchall($table, $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->getall($table, $order, $limit);

    return $response;
}

function customfetch($table, $target, $conjunction = '', $order = [], $limit = '')
{
    $init = new Sel();
    $response = $init->select($table, $target, $conjunction, $order, $limit);

    return $response;
}

function randomfetch($table, $target, $conjunction = '', $limit = '')
{
    $init = new Sel();
    $response = $init->randomfetch($table, $target, $conjunction, $limit);

    return $response;
}

function allrandom($table, $limit = '')
{
    $init = new Sel();
    $response = $init->allrandom($table, $limit);

    return $response;
}

function sms($senderid, $recipient, $message)
{
    $send = new Yolksms();
    $response = $send->sms($senderid, $recipient, $message);

    return $response;
}

function search($table, $searchword, $record, $order = [], $limit = '')
{
    $init = new search();
    $response = $init->basic($table, $searchword, $record, $order, $limit);

    return $response;
}
function sendmail($domain, $subject, $message, $from_name = 'Yolk Mailer', $to, $reply_to = 'info@phpyork.com', $reply_to_name = 'Yolk Mailer')
{
    $n = new Mail();
    $response = $n->sendmail($domain, $subject, $message, $from_name, $to, $reply_to, $reply_to_name);

    return $response;
}

function update($table, $records, $target = [], $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Upd();
    $response = $init->update($table, $records, $target, $files, $uploadto);

    return $response;
}
function insert($table, $records, $files = null, $uploadto = 'yolkassets/upload')
{
    $init = new Add();
    $response = $init->insert($table, $records, $files, $uploadto);

    return $response;
}

function delete($table, $target, $conjunction = '')
{
    $init = new Del();
    $response = $init->delete($table, $target, $conjunction);

    return $response;
}

function countall($table)
{
    $init = new Counter();
    $response = $init->countall($table);

    return $response;
}

function customcount($table, $target, $conjunction = '')
{
    $init = new Counter();
    $response = $init->customcount($table, $target, $conjunction);

    return $response;
}

function convertmoney($amount, $from_currency, $to_currency)
{
    $init = new Converter();
    $response = $init->currency($amount, $from_currency, $to_currency);

    return $response;
}

function paginate($table, $order = [], $numperpage, $ct)
{
    $init = new Pagination();
    $response = $init->paginate($table, $order, $numperpage, $ct);

    return $response;
}

function customepaginate($table, $target, $conjunction = '', $order = [], $limit, $ct)
{
    $init = new Pagination();
    $response = $init->customepaginate($table, $target, $conjunction, $order, $limit, $ct);

    return $response;
}

function pagecount($table, $perpage, $ct)
{
    $init = new Pagination();
    $response = $init->pagecount($table, $perpage, $ct);

    return $response;
}

function custompagecount($table, $target, $conjunction = '', $perpage, $ct)
{
    $init = new Pagination();
    $response = $init->custompagecount($table, $target, $conjunction, $perpage, $ct);

    return $response;
}

function loginauth($table, $sessionvariable, $target, $conjunction = '')
{
    $init = new Auth();
    $response = $init->loginauthenticate($table, $sessionvariable, $target, $conjunction);

    return $response;
}

function authenticate($table, $target, $conjunction = '')
{
    $init = new Auth();
    $response = $init->authenticate($table, $target, $conjunction);

    return $response;
}

function loginpagechecker($sessionvariable, $isloggedinlocation = '')
{
    $init = new session();
    $response = $init->authpagechecker($sessionvariable, $isloggedinlocation);

    return $response;
}

function mainchecker($sessionvariable, $notloginlocation = '')
{
    $init = new session();
    $response = $init->mainpagechecker($sessionvariable, $notloginlocation);

    return $response;
}
 function logout($sessionvariable = '')
 {
     $init = new sessions();
     $response = $init->logout($sessionvariable);

     return $response;
 }

     function addsession($sessionvariable, $value)
     {
         $init = new sessions();
         $response = $init->addsession($sessionvariable, $value);
     }

     function updatesession($sessionvariable, $value)
     {
         $init = new sessions();
         $response = $init->updatesession($sessionvariable, $value);
     }

     function viewsession($sessionvariable)
     {
         $init = new sessions();
         $response = $init->viewsession($sessionvariable);

         return $response;
     }

     function deletesession($sessionvariable = '')
     {
         $init = new sessions();
         $response = $init->deletesession($sessionvariable);
     }

     function initsession()
     {
         $init = new sessions();
         $response = $init->initsession();
     }
