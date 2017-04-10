<!-- Indicators -->
 <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
   <li data-target="#myCarousel" data-slide-to="3"></li>
 </ol>

  <section class="jumbotron form-inline container-fluid float-right col-lg-12 row-inline align-center" id="jumbotron" data-ride="carousel" style="width:100vw;
    height:90vh;padding:0;margin:0;">

    <section class=" active form-fill form-inline float-bottom">
<article class="form-control"id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job1.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p  panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class=" form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job2.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p  panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class=" form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job3.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p  panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class="form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job4.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p  panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class=" form-control"id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job5.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p  panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class="form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job6.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class=" form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job7.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
<article class="form-control "id="jumbo-art" style="border:none;z-index:700;width:25%;height:25%;padding:0;margin:0;">
  <img class="panel-heading col-md-12 " src="../image/job8.jpg" alt="Smiley face" style="position:relative;overflow:hidden;height:100%;margin:0;padding:0;"/>
  <p class="jumbo-p panel-title col-sm-3 text-info" style="position:relative; background:none; font-weight:bold;">video</p>
</article>
</form >
</section>
</section><!--jumbotron-->
<form class="container container-fluid" onload="init();">

  <div id="container" dropzone="move" class="flex-container">
  <a>
  <div id="content" class="flex-container bg-inverse" data-spy="scroll" data-target=".movie" data-offset="50" >
  <?php
  $g=2;$t=49;
  for($i=$g;$i<$t;$i++){
  	include('page_scripts/player_plugin.php');
    include('player.php');

  	 if(is_null($name)){return;}


  }?>
</div><!--content-->
</a>
</div><!--container-->
</form>
