<?php
include_once('../app/includes.php'); 

?>

<!DOCTYPE html>

<html>

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/res/css/main.css">
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
  
  <?php 
  // See if map.php is the current file, if true include the gmap file
  $scriptName = explode('/', $_SERVER['SCRIPT_NAME']);
  if(in_array('map.php', $scriptName)) {
    include_once('../app/model/gmap.php');
  }
  ?> 
  
  
</head>

<body>


<!-- container -->
<div class="container">

  <!-- header -->
  <div class="header">
    <!-- logo -->
    <div class="logo">
      <a href=""><img src="/res/images/logo.png"></a>
    </div><!-- /logo -->

    <!-- nav -->
    <div class="nav"><span>
      <ul>
        <li class="current"><a href="#">home</a></li>
        <li><a href="#data.php">data</a></li>
        <li><a href="#map.php">map</a></li>
      </ul></span>
    </div><!-- /nav -->
  </div><!-- /header -->

  <!-- intro -->
  <div class="intro">
    <div id="banner">
      <img src="/res/images/banner_01.png" />
    </div>
  </div><!-- /intro -->

  <!-- content -->
  <div class="holder_content">
    <section class="group1_about">
      <h3>Over ons..</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
      Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
      <a href="#">Meer..</a>
    </section>

    <section class="group2_service">
      <h3>Service</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
      Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
      <a href="#">Meer..</a>
    </section>

    <section class="group3_contact">
      <h3>Contact</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec molestie. Sed aliquam sem ut arcu. Phasellus sollicitudin. 
      Vestibulum condimentum  facilisis nulla. In hac habitasse platea dictumst. Nulla nonummy. Cras quis libero.</p>
      <a href="#">Meer..</a>
    </section>
  </div>

  <!-- footer -->
  <footer>
    <div class="footer">
      Copyright &copy; Sin Limites, 2014
    </div><!-- /footer -->
  </footer>
</div><!-- /container -->

</body>
<!-- key=AIzaSyDGwUpTVd6XKuYSpd2dJeEBfC4KDCYxNIs& -->

</html>