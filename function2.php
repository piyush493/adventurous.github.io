<?php 
class Contact{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="contact";
    public $mysqli;
    
    public function __construct() {
        return $this->mysqli=new mysqli($this->host, $this->user, $this->pass, $this->db);
    }
    
    public function users($data){
        $username=$data['username'];
        $pasword=$data['password'];
       
        $q="insert into users set username='$username', password='$password'";
       $data= $this->mysqli->query($q);
       if($data==true){
           $body="One message received from hubbunch contact us. details are below..<br> username='$username', password='$password'";
           return $this->sent_mail("info@hubbunch.com", "Message received from Hubbunch", $body);
       }
    }
    
    public function sent_mail($to,$subject,$body){
$mailFromName="HubBunch";
$mailFrom="info@hubbunch.com";

$mailHeader = 'MIME-Version: 1.0'."\r\n";
$mailHeader .= "From: $mailFromName <$mailFrom>\r\n";
$mailHeader .= "Reply-To: $mailFrom\r\n";
$mailHeader .= "Return-Path: $mailFrom\r\n";

$mailHeader .= 'X-Mailer: PHP'.phpversion()."\r\n";
$mailHeader .= 'Content-Type: text/html; charset=utf-8'."\r\n";

if(mail($to, $subject, $body, $mailHeader)){
 return true;
 }else{
return false;
 }
    }
}


?>