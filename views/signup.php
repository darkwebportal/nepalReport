<!DOCTYPE HTML>
<html>
<head>
<title>Sign up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <link href="<?php echo base_url("assets/signup/css/bootstrap.min.css");?>" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link rel='stylesheet' href='<?php echo base_url("assets/signup/css/signup.css")?>' type='text/css' />
	  <script>
	  	<?php echo jsInitializer(); ?>
	  </script>
</head>
<body>
	<div class="container" id="wrap">
		  <div style="padding-bottom: 70px;" class="row" id='main'>
	        <div class="col-md-6 col-md-offset-3" style="margin-top: 15px;">
	            <form action="" method="post" accept-charset="utf-8" class="form" role="form" id="mainFrom">   
	            		<legend style="display: inline-block;">Sign Up <span style="font-size: 15px">or</span> 
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
	                <h4>Fill the following fields.</h4>
	                <div class="errorContainer">
	                </div>
					
	                <div class="row">
	                    <div class="col-xs-6 col-md-6">
	                        <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        
	                    </div>
	                    <div class="col-xs-6 col-md-6">
	                        <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        
	                    </div>
	                </div>
	                <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
	                <input type="text" name="contact" value="" class="form-control input-lg" placeholder="Your Contact No"  />
	                <input type="text" name="address" value="" class="form-control input-lg" placeholder="Your Address"  />
	                <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />                   
	                <label>Gender : </label> 
	                <label class="radio-inline">
	                    <input type="radio" name="gender" value="male" id=male /> Male
	                </label>
	                    <label class="radio-inline">
	                        <input type="radio" name="gender" value="female" id=female />                        Female
	                    </label>
	                    <br />
	              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
	                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" >
	                       <span class="create-account-text">Create my account</span>
							<span id="anim-container">
								<img class="loading-anim" src="<?php echo base_url("assets/signup/30.gif");?>" alt="" style="display: none;">
							</span>
	                        </button>
	            </form>          
	          </div>
	</div>            
	</div>
	</div>

	<script src="<?php echo base_url("assets/signup/js/jquery.min.js");?>"></script>
	<script src="<?php echo base_url("assets/fblogin.js");?>"></script>
	<script src="<?php echo base_url("assets/signup/js/bootstrap.min.js");?>"></script>
	<script src="<?php echo base_url("assets/signup/js/signup.js");?>"></script>
</body>
</html>
