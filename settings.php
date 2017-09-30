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

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" />
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Settings</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="css/material-dashboard.css" rel="stylesheet" />

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        #title {
            margin: 17px 5px 10px 5px;
            font-size: 35px;
            color: black;
        }
        
        #menu {
            margin-left: 470px;
            margin-top: 50px;
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


<!--  Notifications Plugin    -->
<script src="js/bootstrap-notify.js"></script>


<!-- Material Dashboard javascript methods -->
<script src="js/material-dashboard.js"></script>
</head>

<body>
    

  
        

    <div class="wrapper">
        
           <?php include('header2.php'); ?> 
          <div class="sidebar" data-color="red" data-background="blue" style="margin:100px 0px 0px 0px;">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
	    	<div class="sidebar-wrapper">
				<ul class="nav" >
                    <br>
                    <br>
	                <li class="active">
	                    <a href="#">
	                        <i class="material-icons">account_box</i>
	                        <p>Account</p>
	                    </a>
	                </li>
                    <li>
	                    <a href="#">
	                        <i class="material-icons">report</i>
	                        <p>Report/Request</p>
	                    </a>
	                </li>
                     <li>
	                    <a href="#">
	                        <i class="material-icons">library_books</i>
	                        <p>User Manual</p>
	                    </a>
                    </li>
                    <li>
	                    <a href="home.php">
	                        <i class="material-icons">arrow_back</i>
	                        <p>Back</p>
	                    </a>
                    </li>
	           </ul>
	    	</div>
		</div>
       <div class="main-panel">
        <div class="content" style="margin-top:130px">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header" data-background-color="red">
                                    <h4 class="title">Edit Profile</h4>
                                    <p class="category">Complete your profile</p>
                                </div>
                                <div class="card-content">
                                   <?php
                                        $con = mysqli_connect("localhost","root","root","EKBooking");
                                        $sql = "SELECT * FROM user_profile WHERE username='".$_SESSION['Login']."';";
        
                                        if($result=mysqli_query($con,$sql))
                                        {
                                            while($row=mysqli_fetch_assoc($result))
                                            {
                                                
                                                
                                    ?>
                                    <form>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Username</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['username']; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password</label>
                                                    <input type="password" class="form-control" value="<?php echo $row['password']; ?>" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email address</label>
                                                    <input type="email" class="form-control" value="<?php echo $row['email']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['name']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Staff ID</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['staff_id']; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Designation</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['desig']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Mobile No.</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['mobile']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Telephone No.</label>
                                                    <input type="text" class="form-control" value="<?php echo $row['tel']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-danger pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                    <?php }
                                        }
                                    mysqli_close();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                                                           
          </div>         
  </div>
</body>
    





</html>
<?php } ?>
