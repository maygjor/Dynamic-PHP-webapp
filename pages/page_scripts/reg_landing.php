<?php
//if(!isset($_POST['name'])){('Location: app.php?slide=register');}else{header('Location: app.php?slide=login'); }
class user{
public $email="";
public $name="";
private $password="";
public $vip;
public $photo;
public function __construct($email,$name,$password){
  include_once('register_mysql.php');
}
public function SetPassword($newpass){$this->$password=$newpass;}
static function GetPassword(){return $this->$password;}



}
$email=$_POST["email"];
$name=$_POST["name"];
$password=$_POST["password"];
$user=new user($email,$name,$password);








?>
