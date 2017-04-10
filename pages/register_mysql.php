

<?php
//next for the user account:
$email=$_POST["email"];
$name=$_POST["name"];
$password=$_POST["password"];
$hash = md5( rand(0,1000) );
  // /connect to database:
$link=mysqli_connect("localhost","root","","cloud");
if(!$link){die(mysql_error());}
else{
  echo "connected to database <br>";
//advance validation
$query="select email from users where email='".$email."'";
$select=mysqli_query($link,$query);
if($select->num_rows > 0){echo '<h1 form-control text-center text-success text-lg>already registered by this email account.</h1>';}
if($email==""||$name==""||$password==""){
echo '<h1 form-control text-center text-success text-lg> please fill up the form</h1>';}
else{


//  //query
  $query="insert into users(email,name,pass,hash)values('".$email."','".$name."','".$password."','".$hash."')";
  $insert=mysqli_query($link,$query);
//connection error checking


//query error chicking
if(!$insert){
  $query="select * from users where email='".$email."'";
  $Q=mysqli_query($link,$query);
  if(isset($Q)){echo $email.' is already in use';}else{
  echo ' but cannot register';}
}else{
//email verfication stuff:
include_once("page_scripts/reg_email.php");
  echo ' Your account has been made, <br /> please verify it by clicking the activation link that has been send to your email.';
  echo "<h1 form-control text-center text-success text-lg>Welcome to your account ".$name." feel free to edit your profile and enjoy our services</h1>";
  echo "<h1>".$email."</h1>";
  echo "<h1>".$password."</h1>";
 }


mysqli_close($link);

}}


?>
