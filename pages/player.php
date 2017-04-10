
<div class="grid down-list" data-offset="90"data-spy="affix" data-offset-top="197">
<a class="flex-item"id="start"onclick="<?=$strip?>_plai();" draggable="true" dropzone="move"
 href="javascript:void(0);"
 onfocus="<?=$strip?>_play()"onmouseover=""onblur="<?=$strip?>_pause()"  onmouseout="" onload="unload">
<section id="skin" draggable="true" dropzone="move" >
<video id="<?=$name?>" draggable="true" dropzone="move" data-target="#<?=$name?>" onmouseover="" onmouseout="" title="<?=$name?>"
 ondurationchange="" class="movie" src="../video/<?=$name?>" controls textTracks width="200" height="100"></video>
<nav id="vidnav">
<div id="buttons"><p id='vid-p' class="text-muted bg-inverse"><?=$name?></p>
<button hidden='hidden' id="play" type="button"></button>
</div>
<div id="bar">
<div id="progress"></div>
</div>
<div style="clear:both"></div>
</nav>

</section>

</a>
</div>
