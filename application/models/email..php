<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Model{

    public function __construct(){
        parent::__construct();
    }

    public function sendEmails($list){
        $to = "somebody@example.com";
        $subject = "My subject";
        $txt = "Hello world!";
        $headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";

        mail($to,$subject,$txt,$headers);
    }

}