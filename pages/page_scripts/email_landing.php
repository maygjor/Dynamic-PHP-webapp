<?
$emailed=$GET['emailed'];
$hashed=$GET['hashed'];
if ((isset($emailed))&&(isset($hashed)){

  $search = mysql_query("SELECT email, hash, active FROM users WHERE email='".$emailed."' AND hash='".$hashed."' AND active='0'") or die(mysql_error());
$match  = mysql_num_rows($search);
echo $match; // Display how many matches have been found -> remove this when done with testing ;)
if($match > 0){
    // We have a match, activate the account
    // We have a match, activate the account
mysql_query("UPDATE users SET active='1' WHERE email='".$emailed."' AND hash='".$hashed."' AND active='0'") or die(mysql_error());
echo '<div class="statusmsg">Your account has been activated, you can now login</div>';
}else{
    // No match -> invalid url or account has already been activated.
  echo '<div class="statusmsg">The url is either invalid or you already have activated your account.</div>';
}
  echo '<div class="statusmsg">Invalid approach, please use the link that has been send to your email.</div>';
}

?>
