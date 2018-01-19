
<!DOCTYPE html>
<html lang="en">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <title>Form submission</title>
  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php echo base_url("assets/userhome/css/materialize.css");?>" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url("assets/userhome/css/style.css");?>"" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php echo base_url("assets/bubble.css");?>"" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <style type="text/css">
  div.loginContainer{
  position: fixed;
  right: 50px;
  bottom: 50px;
  color: #fff;
  }
    div.loginContainer.active{
  background: #813495;
  padding: 10px;
  }
  div.loginContainer>div.main{
    display: none;
  }
  div.loginContainer>div.main.active{
   display: block;
  background: #813495;
  height: 50px;
  font-size: 14px;
  text-align: center;
  }

  div.loginContainer>div.main.active>span{
    display: block;
  }
    div.loginContainer>div.main>span.usernameContainer{
  
  }
   div.loginContainer>div.main>span.as{
  font-weight: bold;
  font-size: 17px;
  }

  div.loginContainer>div.main>button{
  display: block;
margin: auto;
    margin-top: auto;
margin-top: 10px;
  }
  div.loginContainer>div.toggle{
    background: #813495;
    padding: 11px 20px;
    border-radius: 50%;
    font-size: 23px;
    font-weight: bold;
    cursor: pointer;
  }
  div.loginContainer>div.toggle.active{
      padding: 0;
    border-radius: 0;
    display: inline;
    float: right;
}

  </style>
  <script>
      <?php echo jsInitializer(); ?>
    </script>
</head>
<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Nepal Reports</a>
      <ul class="right hide-on-med-and-down">
      <li><a href="<?php echo base_url("signout"); ?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Sign Out </a></li>

      </ul>
      <div class="row center">
        </div>

      <ul id="nav-mobile" class="side-nav">
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Nepal Reports</h1>
        <div class="row center">
          <h5 class="header col s12 light">You have been logged in</h5>
          <h5 class="header col s12 light">Forward Us A Report</h5>
          
        </div>
        <div class="row center">
          <a href="<?php echo base_url("report"); ?>" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Report Us</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="<?php echo base_url("assets/userhome/3.jpg") ?>" ></div>
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


<div style="display:inline-block">





                        <a class="twitter-timeline"  href="https://twitter.com/hashtag/tonepalreports" data-widget-id="822779053266464768">#tonepalreports Tweets</a>

              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>



</div>

<div style="width:500px;height:200px;display:inline-block;float:right;">

              <div id="fb-root"></div>

              <script>(function(d, s, id) {

                var js, fjs = d.getElementsByTagName(s)[0];

                if (d.getElementById(id)) return;

                js = d.createElement(s); js.id = id;

                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";

                fjs.parentNode.insertBefore(js, fjs);

              }(document, 'script', 'facebook-jssdk'));</script>



              <div class="fb-page" data-href="https://www.facebook.com/softtizo/" data-tabs="timeline" data-width="800" data-height="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/softtizo/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/softtizo/">Softtizo</a></blockquote></div>



              </div>
  

  


  

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

<div class="loginContainer">
  <div class="main">
        <span class="as">
          You are loggedin as:
        </span>
        <span class="usernameContainer">
       <?php echo $data["username"];?>
      </span>
      <button>
        Logout
      </button>
    </div>
    <div class="toggle">
    <?php echo $data["username"][0];?>
    </div>
</div>


  <!--  Scripts-->
  <script src="<?php echo base_url("assets/userhome/js/jquery.min.js");?>"></script>
  <script src="<?php echo base_url("assets/userhome/js/materialize.js");?>"></script>
   <script src="<?php echo base_url("assets/bubble.js");?>"></script>
  <script src="<?php echo base_url("assets/userhome/js/init.js");?>"></script>

  </body>
</html>
