
<?php

//if they DID upload a file...
if ($_FILES['file']['name'])
{
  //if no errors...
  if(!$_FILES['file']['error'])
  {
    $valid_file=true;
    $kind_file;
      //now is the time to modify the future file name and validate the file
      $new_file_name = $_FILES['file']['tmp_name']; //rename file

    //detect the type of file
        $type = exif_imagetype($new_file_name);//detect if image
        if(($type==IMAGETYPE_PNG)||($type==IMAGETYPE_JPEG)||($type==IMAGETYPE_GIF)){
          $kind_file="image";
        }
        $extension=strstr($new_file_name , "." );
        if(($extension==".mp4")||($extension==".mov")||($extension==".mkv")){  $kind_file="video";}//detect video
        if(($extension==".mp3")||($extension==".qt")||($extension==".mov")){  $kind_file="sound";}//detect if sound
      //end of detection
      if($_FILES['file']['size'] > (1024 * 1024 * 1024)) //can't be larger than 1 GB
      {
          $valid_file = false;
          $message = "Oops!  Your file\'s size is".$_FILES['file']['size']."> 1GB ,It\'s too large.";
      }

      //if the file has passed the test
      if($valid_file==true)
      {
        switch ($kind_file) {
          case 'image':
          echo'<h1>is image</h1>';
          move_uploaded_file($_FILES['file']['tmp_name'], '../image/'.$_FILES['file']['name']);
          $message = 'Congratulations!  Your image was accepted.';
            break;
          case 'video':
          echo'<h1>is video</h1>';
            move_uploaded_file($_FILES['file']['tmp_name'], '../video/'.$_FILES['file']['name']);
            $message = 'Congratulations!  Your video was accepted.';
            break;
          case 'sound':
          echo '<h1>is sound</h1>';
            move_uploaded_file($_FILES['file']['tmp_name'], '../sound/'.$_FILES['file']['name']);
            $message = 'Congratulations!  the sound track was accepted.';
            break;
          default:
            # code...
            break;
        }
      }
}
  //if there is an error...
  else
  {
      //set that to be the returned message
      $message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['file']['error'];
  }

}
//you get the following information for each file:
//$_FILES['field_name']['name']
//$_FILES['field_name']['size']
//$_FILES['field_name']['type']
//$_FILES['field_name']['tmp_name']

?>
