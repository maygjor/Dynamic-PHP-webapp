<?php
if (!function_exists('exceptions_error_handler')){
//to declare any function without overDeclaring it
function exceptions_error_handler($severity, $message, $filename, $lineno) {
  if (error_reporting() == 0) {
    return;
  }
  if (error_reporting() & $severity) {
    throw new ErrorException($message, 0, $severity, $filename, $lineno);
  }
}
}
if(!function_exists('gen_plus')){
function gen_plus(){$g=+49;$t=+49; }}
if(!function_exists('gen_lower')){
function gen_lower(){$g=-49;$t=-49;}}



set_error_handler('exceptions_error_handler');


$files = array_diff(scandir("../image"), array('..', '.'));

try {
$name= $files[$i];

} catch (Exception $e) { return;}



$strip= preg_replace('/\s+/', '',$name);
$strip=str_replace('(','',$strip);
$strip=str_replace(')','',$strip);
$strip=str_replace('.','',$strip);
$strip=str_replace('-','',$strip);
$strip=str_replace('_','',$strip);
$strip=str_replace(']','',$strip);
$strip=str_replace('[','',$strip);
$strip=str_replace('?','',$strip);
$strip=str_replace(',','',$strip);
$strip=str_replace("'",'',$strip);
$strip=str_replace('"','',$strip);
$strip=str_replace('!','',$strip);


?>
<script >
function loadChapter(i) {
    //$('#video').attr('poster', chapters[i][0]);

    if($.browser.safari || $.browser.msie) {
        $('<?=$name?>').attr('src', chapters[i][1]);
    } else {
        $('<?=$name?>').attr('src', chapters[i][2]);
    };

    video.load();
    video.play();
};


</script>

<script >




function <?=$strip?>_pause() {
var video = document.getElementById("<?=$name?>");
video.pause();
}
function <?=$strip?>_play() {
       var video = document.getElementById("<?=$name?>");

	   video.play();

	   }
	function <?=$strip?>_plai() {
       var video = document.getElementById("<?=$name?>");
		 if(video.paused){
		video.play();}else{ video.pause();
		}
    }

</script>
