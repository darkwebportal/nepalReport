<!DOCTYPE HTML>
<html>
<head>
<title><?php echo $page;?> Login page</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link rel='stylesheet' href='<?php echo base_url("assets/userlogin/css/bootstrap.min.css");?>' type='text/css' />
    <link rel='stylesheet' href='<?php echo base_url("assets/userlogin/css/signup.css");?>' type='text/css' />
     <script>
      <?php echo jsInitializer(); ?>
    </script>
</head>
<body>
  <script type="text/javascript">
   var loginpage= "<?php echo $page;?>";
  </script>
  <div class="container" id="wrap">
	  <div style="padding-bottom: 344px; padding-top: 70px;" class="row" id='main'>
        <div class="col-md-6 col-md-offset-3">
            <form action="" method="post" accept-charset="utf-8" class="form" role="form" id="mainFrom">   <legend style="display: inline-block;"> <?php echo $page;?> login  </legend> 
              <legend>
                
              
                <h4 style="display: inline;">Fill the following fields </h4>
                <span style="font-size: 15px;<?php if($page==="admin") echo "display: none;" ?>">or</span>
                <span
                  class="fb-login-button" 
                  data-max-rows="1"
                  data-size="large"
                  data-button-type="continue_with"
                  data-use-continue-as="true"
                  onlogin='facebookSignup()'
                  data-scope="public_profile,email"
                      style=" display:inline-block;margin:auto;width:170px;min-width:180px;font-weight: bold;"></span>
                    </legend>
                  <div class="errorContainer">
                  </div>
                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
              <span class="help-block"></span>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" >
                         <span class="create-account-text">Login</span>
                    <span id="anim-container">
                      <img class="loading-anim" src="<?php echo base_url("assets/signup/30.gif");?>" alt="" style="display: none;">
                    </span>
                </button>
            </form>          
          </div>
  </div>          
  </div>
    <script type='text/javascript' src='<?php echo base_url("assets/userlogin/js/jquery-3.1.0.min.js"); ?>'></script>
    <script src="<?php  if($page!=="admin")   echo base_url("assets/fblogin.js"); else echo base_url("assets/report/js/custom.js");?>"></script>
    <script type='text/javascript' src='<?php  echo base_url("assets/userlogin/js/bootstrap.min.js"); ?>'></script>
    <script type='text/javascript' src='<?php echo base_url("assets/userlogin/js/login.js");?>'></script>
</body>
</html>
