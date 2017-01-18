<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <link rel="icon" href="nrc.png" type="image/gif" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Nepal Report::report your crime</title>

 <!-- FONTS -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- CSS  -->
  <link href="<?php echo base_url("assets/home/css/materialize.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url("assets/home/css/style.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- <link href="<?php echo base_url("assets/home/css/button.css")?>" type="text/css" rel="stylesheet" media="screen,projection"/> -->
 <!-- FONTS -->
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <script type="application/json" src="<?php echo base_url("configs.js") ?>"></script>
</head>
<body style="background-color:white;">
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Nepal Reports</a>
      <span class='right hide-on-med-and-down' style="margin-right: 0px;">
       <a  href="./login/">
        <button type="button" class="btn btn-primary btn-block" style=" display:inline-block;margin:auto;font-size:13px;width:150px;height:50px;"><i class="fa fa-sign-in" aria-hidden="true">Login</i></button></a>
      </span>
      <div class="row center">
        </div>

      <ul id="nav-mobile" class="side-nav">
      </ul>
      <a href="./../signup/" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text">Nepal Reports</h1>
        <div class="row center">
          <h5 class="header col s12">An easy way to report Crime</h5>

        </div>
        <div class="row center">
          <a href="<?php echo base_url("signup")?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Sign Up</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url("assets/home/33.jpg");?>" ></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Collobrate</h5>

            <p class="light">Platform from the goverment authorities to and from citizens to monitor and exchange timely reports</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Mission</h5>

            <p class="light">Hub for the users to update about the certain activities/crime they have withnessed in real time to take action in real time.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Implementation</h5>

            <p class="light">Real time updates and monitering from both concerned bodies and hassle free procedure</p>
          </div>
        </div>
      </div>

    </div>
  </div>


<!-- <a href="#" class="float" id="menu-share">
<i class="fa fa-share my-float"></i>
</a>
<ul>
<li><a href="tel:+9779862006834">
<i class="fa fa-phone my-float"></i>
</a></li>
<li><a href="mailto:admin@nreports.com">
<i class="fa fa-envelope my-float"></i>
</a></li>
<li><a href="https://twitter.com/search?q=%23tonepalreports" target="_blank">
<i class="fa fa-twitter my-float"></i>
</a></li>
</ul> -->

  <footer><!-- End top_footer -->
		  <div class="bottom_footer container-fluid">
				<div class="container">
					<p class="float_left">Copyright &copy; Softx 2017. All rights reserved. </p>
					<p class="float_right">Hosted by: SoftX</p>
				</div>
			</div> <!-- End top_footer -->
	    <div class="bottom_footer container-fluid">
				<div class="container"></div>
		  </div> <!-- End bottom_footer -->
	</footer>


  <!--  Scripts-->

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url("assets/home/js/materialize.js")?>"></script>
<script src="<?php echo base_url("assets/home/js/init.js")?>"></script>
  </body>
</html>
