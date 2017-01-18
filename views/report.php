<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Report</title>


		<!-- Bootstrap CSS -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/css/bootstrap/bootstrap.css")?>" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/css/bootstrap.vertical-tabs.css")?>">


		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500italic,500,700,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,300,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,700italic,800,300,300italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <style>
    a{
      cursor: pointer;
    }
    div.errorContainer>div{
      color: #d81a1a;
      text-transform: capitalize;
      font-size: 14px;
      font-weight: bold;
      padding: 2px;
    }
  </style>
		<!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/fonts/font-awesome/css/font-awesome.min.css")?>">
		<!-- Stroke Gap Icon -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/fonts/stroke-gap/style.css")?>">

		<!-- Custom Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/css/custom/style.css")?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/report/css/responsive/responsive.css")?>">
   <script>
      <?php echo jsInitializer(); ?>
    </script>
  



	</head>
	<body class="service2">

		<section class="p0 container-fluid banner about_banner">
			<div class="about_banner_opacity">
				<div class="container">
					<div class="banner_info_about">
						<h1>Fill Up Your Form</h1>
						<ul>
							<li><a href="Home.php">Enter Your Messages</a></li>
							<li><i class="fa fa-angle-right"></i></li>
							<li><strong>Your Messages Will be sent in encrypted form</strong></li>
						</ul>
						<div class="container">
	
        <center>
            <a href ="<?php echo base_url("userhome"); ?>"><button class="btn btn-lg btn-primary">Revert Back</button></a>
            <a href ="mailto:admin@nreports.com"><button class="btn btn-lg btn-primary">Mail Us</button></a>
            <a href ="tel:009779862006834"><button class="btn btn-lg btn-primary">Call Us</button></a>
        </center>
	</div>
</div>
					</div> <!-- End Banner Info -->
				</div> <!-- End Container -->
			</div> <!-- End Banner_opacity -->
		</section> <!-- End Banner -->
<!-- ======= /Banner ======= -->
		<section class="side_tab" >
			<div class="container">
				<div class="row">
					<div class="white_bg right_side col-lg-8 col-md-8 col-sm-12 col-xs-12 pull-right">
            <div class="msg" style="    text-align: center;font-size: 15px; font-weight: bold;">Any field can't be empty</div>
						<div class="tab_details">
						    <!-- Tab panes -->
						    <div class="tab-content right_info">
                            <div class="tab-pane fade in row active" id="USA">
                            <h3 id="catContainer">Cyber Crime</h3>
                                <div class="container">
<div class="row">
  <div class="col-md-8">
    
    <!-- BEGIN DOWNLOAD PANEL -->
    <div class="panel panel-default well">
      <div class="panel-body">
 <form action="<?php echo base_url("userhome"); ?>" id="mainform" class="form-horizontal track-event-form bv-form" data-goaltype="”General”" data-formname="”ContactUs”" method="post" id="contact-us-all" novalidate="novalidate">
          
          <div class="form-group">               
            <div class="col-sm-6">
              <div class="errorContainer">
                
              </div>
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-globe"></i>
                  </div>
<select data-placeholder="Choose country" class="C_Country_Modal form-control" id="C_Country" name="zone" data-bv-field="zone">
                  <option value="">Enter Zone </option>
                  <option value="Bagmati">Bagmati</option>
                  <option value="Bheri">Bheri</option>
                  <option value="Dhaulagiri">Dhaulagiri</option>
                  
                  
                 	<option value="Gandaki">Gandaki</option>
                  <option value="Janakpur">Janakpur</option>
                  <option value="Karnali">Karnali</option>
                   <option value="Koshi">Koshi</option>
                  <option value="Lumbini">Lumbini</option>
                  <option value="Mahakali">Mahakali</option>
                  <option value="Mechi">Mechi</option>
                  <option value="Narayani">Narayani</option>
                  
                  
                  <option value="Rapti">Rapti</option>
                  <option value="Sagarmatha">Sagarmatha</option>
                  
                  <option value="Seti">Seti</option>
                </select>
                  
                </div> 
                
                <br>
                <div class="form-group">               
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-globe"></i>
                  </div>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Location" name="location" data-bv-field="C_EmailAddress">
                </div>
              <small data-bv-validator="notEmpty" data-bv-validator-for="C_EmailAddress" class="help-block" style="display: none;">Required</small></div>                
            <div class="col-sm-6">
              <div class="input-group">
                
                </div>
              </div>
            </div>
                
                <h3>Details Of Complain</h3>
                <br>
                <div class="container">
	<div class="row">
		
<span class="css3-metro-dropdown css3-metro-dropdown-color-ff1d77">
    <select name="priority">
        <option value="">Priority</option>
                <option value="High">High</option>        
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
    </select>
</span>
<span class="css3-metro-dropdown css3-metro-dropdown-color-2673ec">
    <select name="time">
        <option value="">Time</option>
        <option value="Past day">Past day</option>        
        <option value="Past week">Past week</option>
        <option value="Past month">Past month</option>
    </select>
</span>
<span class="css3-metro-dropdown css3-metro-dropdown-color-2673ec">
    <select name="reporton">
        <option value="">Report On</option>
        <option value="ME">Me</option>        
        <option value="Others">Others</option>
    </select>
	</div>
</div>
                
                            
                <br>
              <small data-bv-validator="notEmpty" data-bv-validator-for="C_FirstName" class="help-block" style="display: none;">Required</small></div>                
            
            </div>
            
            
          
          <div class="form-group">               
            <div class="col-sm-6">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-envelope"></i>
                  </div>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name" name="name" data-bv-field="C_EmailAddress">
                </div>
              <small data-bv-validator="notEmpty" data-bv-validator-for="C_EmailAddress" class="help-block" style="display: none;">Required</small></div>                
            <div class="col-sm-6">
              <div class="input-group">
                
                </div>
              </div>
            </div>
          
          
          
          <div class="form-group">
            <div class="col-sm-12">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-phone"></i>                      
                  </div>
                <input type="text" class="form-control" id="C_BusPhone" placeholder="Phone" name="phone">
                </div>                                    
              </div>
            </div>
             <p>(More priority will be given)</p>
             <input type="hidden" name='cat' value="Cyber Crime"/>
          <br>
          <div class="form-group">
            <div class="col-sm-12">
              <div class="input-group">
                <div class="input-group-addon">
                  <i class="fa fa-comment fa-2"></i>                
                  </div>                  
                <textarea class="form-control" name="message" id="Comments" rows="5" style="width:99.9%" placeholder="Enter your message here"></textarea>
                </div>                                    
              </div>
            </div>
              <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit" >
                  <span class="create-account-text">Submit</span>
                  <span id="anim-container">
                  <img class="loading-anim" src="<?php echo base_url("assets/signup/30.gif");?>" alt="" style="display: none;">
              </span>
                          </button>
          <div class="form-group"></div>
        </div><!-- end panel-body -->
      </div><!-- end panel -->
    <!-- END DOWNLOAD PANEL -->
  </div><!-- end col-md-8 -->
      <div class="col-md-2"> </div>
        </div>
</div>						      </div>
                            </div>
                            
                           
                          </div> <!-- End tab_details -->
						<div class="market_strategy"></div>
						<div class="clear_fix"></div>
						

					</div> <!-- End white_bg -->
					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-left left_side_bar"> <!-- required for floating -->
					  <!-- Nav tabs -->
					  <ul id="btnContainer" class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
					   <li ><a  data-toggle="tab"  > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Women Protection Cell</a></li>
					    <li class="active" ><a  data-toggle="tab" aria-expanded="true" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Cyber Crime</a></li>
					    <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Economic Offence</a></li>
					    <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Child Rights</a></li>
              <li ><a data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;General Offence</a></li>
					    <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Corruption</a></li>
					    <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Medical Abuse</a></li>
               <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Vehicle Monitering Cell</a></li>
               <li ><a  data-toggle="tab" > <i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;CID Branch</a></li>
                        					  </ul>
					   <!-- End Advisor profilr & Download option-->
					</div>
				</div> <!-- End row -->
			</div> <!-- End container -->
		</section>
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
<!-- End top_footer -->


<!-- ============ free consultation ================ -->
		 <!-- End consultation -->
<!-- ============ /free consultation ================ -->

<!-- ============= Footer ================ -->
<!-- ============= /Footer =============== -->


		<!-- Js File -->

		<!-- j Query -->
				<script type="text/javascript" src="<?php echo base_url("assets/report/");?>js/jquery.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="<?php echo base_url("assets/report/");?>js/bootstrap.min.js"></script>
		<!-- Custom & Vendor js -->
		<script type="text/javascript" src="<?php echo base_url("assets/report/");?>js/custom.js"></script>
		    <script type="text/javascript" src="<?php echo base_url("assets/report/");?>js/report.js"></script>

	</body>
</html>
