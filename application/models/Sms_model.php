<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	function send_sms($message = '' , $reciever_phone = '') {
		$to = "[\"<$reciever_phone>\"]";
		$to = $reciever_phone;
		$text = $message;
		$authToken = "ZaD9vMp5S3imW39pM77PEg==";

    $msg = $ms;
    $aid = 1;
    $ar = explode('~',$msg);
    $msg='';
    for ($i = 0; $i < count($ar); ++$i) {
        $msg = $msg."\n".$ar[$i];
    }

        $number = $mobileno;

        if(strlen($number) != 10 && strlen($number) != 7 )
            die('NO NUMBER');

        if(strlen($msg)<= 0 )
            die('NO MESSAGE');

        if(strlen($number) == 7 )
            $number = "960".$number;

        $url = "http://bulkmessage.dhiraagu.com.mv/jsp/receiveSMS.jsp?userid=mediflex&password=08702526&to=".$number."&text=".urlencode($msg);

        try {

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

            $limit = 0;
            while((curl_errno($ch) == 28 or $limit == 0) and $limit < 3){
                $limit++;
                $output = curl_exec($ch);
            }

            curl_close($ch);


        } catch (HttpException $ex) {
            echo 'NO';
        }



		echo $output;
	}
}
