<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>admin panel</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/dashboard/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
     <link href="<?php echo base_url("assets/dashboard/css/metisMenu.min.css"); ?>" rel="stylesheet">
	
    <!-- Custom CSS -->
     <link href="<?php echo base_url("assets/dashboard/css/sb-admin-2.css"); ?>" rel="stylesheet">
	 <link href="<?php echo base_url("assets/bubble.css");?>"" type="text/css" rel="stylesheet" media="screen,projection"/>
    <!-- Morris Charts CSS -->
     <link href="<?php echo base_url("assets/dashboard/css/morris.css"); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
     <link href="<?php echo base_url("assets/dashboard/css/font-awesome.min.css"); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo base_url("assets/dashboard/js/style.js"); ?>"></script>
   <style>
   	li:nth-child(n+2){
   		margin-top: -150px;
   	}
   </style>

</head>

<body style="min-width:900px;background-color:#fff;" >
	<?php $reports=$data["reports"];
			$rows=sizeof($reports);
			
			function catagorise($reports)
			{
				$catagorises=array();
				foreach ($reports as $report) {
					if(array_key_exists($report->catagory, $catagorises))
						$catagorises[$report->catagory]++;
					else
						$catagorises[$report->catagory]=1;
				}
				return $catagorises;
			}
			$catagories=catagorise($reports);
	?>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <div class="col-lg-12">
                    <h1 class="page-header"style="display:inline-block;line-height:9px;font-size:20px" >Dashboard</h1><i style="font-size: 13px;line-height: 9px;">admin@nepalreports.com</i>
        	 </div>
     
        </nav>
		<h2 style="font-weight: bold;margin-left: 20px;">A.Catagories of crimes</h2>
         <div id="piechart" style="width: 900px; height: 446px;margin: auto;"></div>
         <div style="text-align: center;margin-top: -47px;z-index: 100;position: relative">fig:Data visualization based on crimes reported:</div>
  		<h2 style="font-weight: bold;margin-left: 20px;">B.Details of crime reported:</h2>
                        <div class="panel-body">
                            <ul class="timeline">
							 <li class='timeline-inverted'>
						        <div class='timeline-panel'>
						            <div class='timeline-heading'>
						                <h4 class='timeline-title'>Overall View </h4>
						            </div>
						            <div class='timeline-body'>

						            	<?php  $i=1;
						            		foreach ($catagories as $key => $value) {
						            		echo"<p>$i) $key:$value</p>";
						            		$i++;
						            	}?>
						                
						            </div>
						        </div>
						    </li>
<?php 
 
 	if(!$rows)
	echo"
	    <li>
	        <div class='timeline-panel'>
	            <div class='timeline-heading'>
	                <h4 class='timeline-title'>There are no </h4>
	            </div>
	            <div class='timeline-body'>
	                <p>detail of the report</p>
	            </div>
	        </div>
	    </li>";
	  else
	  {
		  	$i=0;
		  	foreach ($reports as $report) 
		  	{
				$liClass=($i%2)? "timeline-inverted" : "";
				$i++;
					echo" <li class='".$liClass."'>
		                        
		                        <div class='timeline-panel'>
		                            <div class='timeline-heading'>
		                                <h4 class='timeline-title'>Report No $i </h4>
		                            </div>
		                            <div class='timeline-body'>
		                                <p>Name:".$report->name."</p>
		                                <p>Report Id:".$report->reportid."</p>
		                                <p>Crime Location:".$report->zone." ".$report->location."</p>
		                                <p>Priority:".$report->priority."</p>
		                                <p>reported on:".$report->time."</p>
		                                <p>Report for:".$report->reporton."</p>
		                                <p>Contact:".$report->phone."</p>
		                                <p>Message:".$report->message."</p>
		                                <p>Userid:".$report->userid."</p>
		                            </div>
		                        </div>
		                    </li>"; 
				}
			
	  }

?>

                                        </div>
                                    </div>
                                </li>
                    
                            </ul>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        
        </div>
        

    </div>
    <div class="loginContainer">
  <div class="main">
        <span class="as">
          You are loggedin as:
        </span>
        <span class="usernameContainer">
       <?php echo $data["adminUsername"];?>
      </span>
	  <a href="http://localhost/nepalreport/adminsignout" style="color:white;"> <button>
	  Logout
	</button>
	</a>
    </div>
    <div class="toggle">
    <?php echo $data["adminUsername"][0];?>
    </div>
</div>
	 <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Type of voilence', 'Counts']
	          <?php 
	          foreach ($catagories as $key => $value) {
	          	echo ",['$key' ,$value]\n";
	          }
	          ?>]);

        var options = {
          title: 'Different Crimes'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <!-- jQuery -->

    <script src=" <?php echo base_url("assets/dashboard/js/jquery.min.js"); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src=" <?php echo base_url("assets/dashboard/js/bootstrap.min.js"); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url("assets/dashboard/js/bootstrap.min.js"); ?>./js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url("assets/dashboard/js/raphael.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/dashboard/js/morris.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/dashboard/js/morris-data.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bubble.js");?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url("assets/dashboard/js/sb-admin-2.js"); ?>"></script>

</body>

</html>
