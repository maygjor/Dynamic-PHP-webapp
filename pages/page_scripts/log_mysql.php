

<?php
//next for the user account:
$email=$_POST["email"];
$password=$_POST["password"];
//connect to database:
$link=mysqli_connect("localhost","root","","cloud");
if(!$link){die(mysql_error());}
else{
  echo "connected to database <br>";

  //query
  $query="select name from users where email='".$email."' and pass='".$password."'";
  $select=mysqli_query($link,$query);
  if($select->num_rows > 0){echo '<h1 form-control text-center text-success text-lg>Welcome again</h1>';}else{
  echo '<h1 form-control text-center text-success text-lg> wrong account information</h1>';}
}

mysqli_close($link);




?>
