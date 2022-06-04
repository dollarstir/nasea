<?php

class Yolksms
{
    public $senderid;
    public $recipient;
    // public $apikey;
    public $message;
    public $client;

    public function __construct()
    {
        $this->client = 'https://apps.mnotify.net/smsapi';
    }

    public function sms($senderid, $recipient, $message)
    {
        $url = $this->client.'?key='.Config::get('APIKEY').'&to='.$recipient.'&msg='.$message.'&sender_id='.$senderid;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $result = curl_exec($ch);
        $result = json_decode($result);
        // echo($result->code);
        curl_close($ch);

        return $this->responses($result->code);
        // return $status;
    }

    private function responses($response)
    {
        $status = '';
        switch ($response) {
            case '1000':
                $status = 'Messages has been sent successfully';

                return $status;
                break;
            case '1002':
                $status = 'SMS sending failed. Might be due to server error or other reason';

                return $status;
                break;
            case '1003':
                $status = 'Insufficient SMS credit balance';

                return $status;
                break;
            case '1004':
                $status = 'Invalid API Key';

                return $status;
                break;
            case '1005':
                $status = 'Invalid recipient\'s phone number';

                return $status;
                break;
            case '1006':
                $status = 'Invalid sender id. Sender id must not be more than 11 characters. Characters include white space';

                return $status;
                break;
            case '1007':
                $status = 'Message scheduled for later delivery';

                return $status;
                break;
            case '1008':
                $status = 'Empty Message';

                return $status;
                break;
            case '1012':
                    $status = 'Sender ID is not registered';

                    return $status;
                    break;
            case '1011':
                $status = 'Numeric Sender IDs are not allowed';

                return $status;
                break;
            default:
                return $status = 'failed';
                break;

        return $status;
        }
    }
}
