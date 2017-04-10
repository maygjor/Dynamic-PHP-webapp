<?session_start();?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>CodingPhase Web Developer Starter Kit</title>
      <link rel="stylesheet" href="../css/bootstrap.css"/>
      <link rel="stylesheet" href="../css/bootstrap.min.css"/>
      <link rel="stylesheet" href="../css/bootstrap-grid.css"/>
      <link rel="stylesheet" href="../css/bootstrap-reboot.css"/>
      <link rel="stylesheet" href="../css/bootstrap-reboot-min.css"/>
      <link rel="stylesheet" href="../css/main.css"/>



</head>

<body class="app" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="iconav-slider navbar-inverse bg-inverse " id="index-navbar" style=";position:fixed;width=100%;z-index:999;" data-spy="affix" data-offset-top="197" >

    <ul  class="nav nav-fill  bg-inverse"aria-haspopup="false" aria-expanded="false"  active style="opacity:1;">
      <li class=" dropdown nav  nav-fill nav-item col-md-1" style="opacity:1;">
        <button class="btn btn-inverse btn-sm dropdown-toggle active bg-inverse"aria-haspopup="true" aria-expanded="true" data-toggle="dropdown" style="opacity:.5;"><span class="caret"></span><img src="../image/menu.png" class="icon" />
        </button>
        <div class="navbar-header bg-inverse"><a class="navbar-brand" href="#">Cloud Services</a></div>
        <ul class="dropdown-menu bg-inverse" style="opacity:.5;">
            <li class="down-list bg-inverse text-default" style="z-index:999;"><a class="text-info" href="app.php?slide=register">new user</a></li>
            <li class="down-list bg-inverse text-default" style="z-index:999;"><a class="text-info" href="app.php?slide=login">login</a></li>
            <li class="down-list bg-inverse text-default" style="z-index:999;"><a class="text-info" href="app.php?slide=imageUpload">imageUpload</a></li>
            <li class="down-list bg-inverse text-default" style="z-index:999;"><a class="text-info" href="app.php?slide=grid">grid</a></li>
            <li class="down-list bg-inverse text-default" style="z-index:999;"><a class="text-info" href="app.php?slide=upload">Upload files</a></li>
          </ul>
      </li><!--dropdown menu-->
    </li>
      <li class="nav-item" ><a class="nav-link   text-right" style="color:white;font-weight:bold;text-decoration:none;"href="app.php?slide=home">home</a></li>
      <li class="nav-item" ><a class="nav-link   text-right" style="color:white;font-weight:bold;text-decoration:none;"href="app.php?slide=upload">Upload</a></li>
    </li>
  </ul></nav><!--navigation bars-->
<section class="container-fluid" id="app-container" style="padding:0;margin:0;">
<?php
$slide=$_GET["slide"];
if(!isset($slide)){$slide="login";}
switch($slide){
      case  "register":
             include("page_scripts/reg_face.php");
             break;
      case "login":
             include("page_scripts/log_face.php");
             break;
      case "imageUpload":
             include("page_scripts/up_image_face.php");
             break;
      case "reg_landing":
             include("page_scripts/reg_landing.php");
             break;
      case "grid":
             include("grid.php");
             break;
      case "upload"   :
             include("page_scripts/upload_face.php");
             break;
      case "uploader" :
             include("page_scripts/uploader.php");
             break;
      case "home":
             include("home.php");
            break;
      case "log_mysql":
            include("page_scripts/log_mysql.php");
            break;
 }

 ?>
</section>
<!--form-->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="../js/vue.js"></script>
      <script src="../js/all.js"></script>
      <script src="../js/dropdown.js"></script>
      <script src="../js/tab.js"></script>
      <script src="../js-work/dropdown-clicked.js"></script>
      <script src="../js/vpb_uploader.js"></script>


</body>
</html>
