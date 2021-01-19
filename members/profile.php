   <?php  include('navbar.php');  ?>
<head>
<script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
 

var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds
</script>
 
</head>
  <body id="home">

<center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">   
			<div class="col-md-12">
                     
						<div class="jumbotron alert-info">
										<ul class="nav nav-tabs">
										<li class="active"><a href="profile.php">Personal Information</a></li>
										</ul>
                                        	 <table border="0" width="845"><tr><td></td></tr></table>
                                             
						<?php include('personal_info_panel.php'); ?>
                             
                         
						</div>
                        
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
    
 
  </body>
</html>