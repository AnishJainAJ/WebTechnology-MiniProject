  <?php  include('header.php');  ?> 
 <script type="text/javascript" src="jquery-1.10.2.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#load_tweets1').load('feed_lab.php') ;
}, 30000); //refresh div every 10000 milliseconds or 10 seconds
 
var auto_refresh = setInterval(
function ()
{
$('#load_tweets2').load('sidebar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds


var auto_refresh = setInterval(
function ()
{
$('#load_tweets3').load('navbar.php') ;
}, 10000); //refresh div every 10000 milliseconds or 10 seconds

</script>
 <div id="load_tweets3"> 
 <?php
 // Turn off error reporting

  include('navbar.php'); 
 
  ?>
 </div>
  <body id="home">
  

 
  <center>
  <table>
  <tr>
  <td>
 
	<div class="container-fluid">
			<div class="col-md-12">
					<div class="jumbotron alert-success">
										<ul class="nav nav-tabs">
										<li ><a href="home.php">Web Technology</a></li>
									 	<li ><a href="ml.php">Machine Learning</a></li>
                    <li ><a href="cc.php">Cloud computing</a></li>
									 	<li ><a href="sadp.php">SADP</a></li>
									  <li ><a href="san.php">SAN</a></li>
									 	<li class="active"><a href="lab.php">Laboratory</a></li>
										</ul>
                                        	 
                                             
						<div id="load_tweets1"> 
							 <?php  include('feed_lab.php');  ?>
                             </div>
                         
						</div>
              
			</div>
		</div>
	</div>
     </td>
  </tr>
  </table>
  </center>
 
 
 </body>