<!DOCTYPE html>
<?php 
    session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: index.php');
    }
    else
    {
        ?>
<html>
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Header</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #title {
            margin: 17px 5px 10px 5px;
            font-size: 35px;
            color: black;
        }
        
       
        
        .atv,
        .str {
            color: #05AE0E;
        }
        
        .tag,
        .pln,
        .kwd {
            color: #3472F7;
        }
        
        .atn {
            color: #2C93FF;
        }
        
        .pln {
            color: #333;
        }
        
        .com {
            color: #999;
        }
        
        .space-top {
            margin-top: 50px;
        }
        
        .area-line {
            border: 1px solid #999;
            border-left: 0;
            border-right: 0;
            color: #666;
            display: block;
            margin-top: 20px;
            padding: 8px 0;
            text-align: center;
        }
        
        .area-line a {
            color: #666;
        }
        
        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
    <!--   Core JS Files   -->
<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>



<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>

                    
                           
                    
                            
                   
                            
                   
                            
</head>


 
    <body>
    
    <nav class="navbar navbar-absolute navbar-danger" style="background:black;">
						<div class="container">
							
                            <div class="navbar-header">
                        <div class="logo-container">
                            <div class="logo" style="float:left; margin-top:0px; margin-left:-130px ">
                                <img src="img/logo.jpg" width="120" height="110" ;>
                            </div>


                        </div>
                    </div>  
                            <div class="navbar-header">
								<div class="collapse navbar-collapse" id="navigation-index">
	    	
                                <a class="navbar-brand" style="float:left; margin-top:-2%;" href="#"><h2>Emirates Headquarters</h2>
                                    <p id="sub-title" style="margin-top:-4%;">Meeting Scheduler</p>
                                    </a>
                       
							</div>
                            
                            
                            </div>

							<div class="collapse navbar-collapse" id="example-navbar-danger" style="color:white;">
								<ul class="nav navbar-nav navbar-right" style="margin-top:-30px;">
									<li>
		                                <ul class="nav nav-pills nav-pills-danger" style="align:center; margin-top:10%; margin-right:-140px; color:white;">
                        <li class="<?php active('home.php');?>"><a href="home.php" style="color:white;"><i class="material-icons unselectable">home</i>Home</a>
                       </li>
                        <li class="<?php active('fullcalendar.php');?>"><a href="fullcalendar.php" style="color:white;"><i class="material-icons">perm_contact_calendar</i>Calendar</a></li>
                                            <li class="<?php active('http://192.168.1.248:3001');?>"><a  href="http://192.168.1.248:3001" style="color:white;"><i class="material-icons">screen_share</i>CMS</a></li>
                        <li class="<?php active('report.php');?>"><a href="report.php" style="color:white;"><i class="material-icons">content_paste</i>Reports</a>
                        </li>
                        
                                  <li class="<?php active('index.php');?>"><a href="<?php session_destroy(); echo 'index.php';?>" style="color:white;"><i class="material-icons">power_settings_new</i>Log Out</a>
                                  </li>
                                   </ul>
                                </ul>
                            </div>
						</div>
					</nav>
    
        </body>







</html>
<?php } ?>