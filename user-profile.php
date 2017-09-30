<!Doctype html>
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

    <title>Meeting Booking System</title>

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



</script>
</head>

<body>





    <div class="wrapper">
        <?php include('header2.php'); ?>
        <div class="sidebar" data-color="red" data-background="blue" style="position:fixed;">
            <!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->
            <div class="sidebar-wrapper" style="margin-top:50%;">
                <ul class="nav">
                   
                    <li id="p" class="active">
                        <a id="edit_profile" href="#" >
                            <i class="material-icons">person</i>
                            <p>Edit Profile</p>
                        </a>
                        <script>
                            $('#edit_profile').click(function(){
                              if($('#m').hasClass('active')){
                                $('#m').removeClass('active');
                                $('#p').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').removeClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#a').hasClass('active')){
                                $('#a').removeClass('active');
                                $('#p').addClass('active');
                                 $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').removeClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#g').hasClass('active')){
                                $('#g').removeClass('active');
                                $('#p').addClass('active');
                                 $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').removeClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                            });
                    </script>
                    </li>
                    <li id="m">
                        <a id="my_meeting" href="#">
                            <i class="material-icons">search</i>
                            <p>My Meetings</p>
                        </a>
                        <script>
                            $('#my_meeting').click(function(){
                              if($('#p').hasClass('active')){
                                $('#p').removeClass('active');
                                $('#m').addClass('active');
                                $('#meeting_row').removeClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#a').hasClass('active')){
                                $('#a').removeClass('active');
                                $('#m').addClass('active');
                                $('#meeting_row').removeClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#g').hasClass('active')){
                                $('#g').removeClass('active');
                                $('#m').addClass('active');
                                $('#meeting_row').removeClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                            });
                    </script>
                    </li>
                    <li id="a">
                        <a id="address_book" href="#">
                            <i class="material-icons">library_books</i>
                            <p>Address Book</p>
                        </a>
                        <script>
                            $('#address_book').click(function(){
                              if($('#p').hasClass('active')){
                                $('#p').removeClass('active');
                                $('#a').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').removeClass('hidden');
                              }
                              else if($('#m').hasClass('active')){
                                $('#m').removeClass('active');
                                $('#a').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').removeClass('hidden');
                              }
                              else if($('#g').hasClass('active')){
                                $('#g').removeClass('active');
                                $('#a').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').addClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').removeClass('hidden');
                              }
                            });
                    </script>
                    </li>
                    <li id="g">
                        <a id="group" href="#">
                            <i class="material-icons">group</i>
                            <p>Create a Group</p>
                        </a>
                        <script>
                        $('#group').click(function(){
                              if($('#p').hasClass('active')){
                                $('#p').removeClass('active');
                                $('#g').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').removeClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#m').hasClass('active')){
                                $('#m').removeClass('active');
                                $('#g').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').removeClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                              else if($('#a').hasClass('active')){
                                $('#a').removeClass('active');
                                $('#g').addClass('active');
                                $('#meeting_row').addClass('hidden');
                                $('#group_row').removeClass('hidden');
                                $('#profile_row').addClass('hidden');
                                $('#contact_row').addClass('hidden');
                              }
                            });
                    </script>
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
            <div class="content">
               <?php
                    
                    $con = mysqli_connect("localhost","root","root","EKBooking");
                    $sql = "SELECT name,staff_id,email,mobile,tel,desig FROM user_profile WHERE username='".$_SESSION['Login']."';";
        
                    if($result=mysqli_query($con,$sql))
                    {
                        while($row=mysqli_fetch_assoc($result))
                        {
                    
                ?>
                
                        <div class="container" style="margin-top:8%; margin-left:16%; width:1700px;">
                            <div id="profile_row" class="row">
                                <div class="col-md-6">
                                    <div class="card card-profile">
                                        <div class="card-avatar">
                                            <a href="#pablo">
                                        <img class="img" src="img/new_logo.png">
                                            </a>
                                        </div>

                                        <div class="content">
                                            <h3 class="category text-danger"><?php echo $row['desig']; ?></h3>
                                            <h2 class="card-title"><?php echo $row['name']; ?></h2>
                                            <span class="row card-content">
                                        <h4 class="col-xs-6"><label class="btn btn-simple btn-danger">Staff ID:</label> <?php echo $row['staff_id']; ?></h4>                                     
                                        <h4 class="col-xs-6" style="margin-top:-10px"><label class="btn btn-simple btn-danger">Email ID:</label><?php echo $row['email']; ?></h4>                                                                   </span>
                                            <span class="row card-content" >                                         
                                            <h4 class="col-xs-6" style="margin-top:-30px"><label class="btn btn-simple btn-danger">Mobile No.:</label><?php echo $row['mobile']; ?></h4>                             
                                            <h4 class="col-xs-6" style="margin-top:-30px; margin-left:-65px"><label class="btn btn-simple btn-danger">Telephone No.:</label><?php echo $row['tel']; ?></h4>                                                         </span><br>

                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div id="meeting_row" class="row hidden">
                                <div class="col-md-6">
                                    <div class="card">
                                <div class="card-header"  data-background-color="red">
                                    <h4 class="title">My Meetings</h4>
                                </div>
                                <div class="card-content table-responsive" style="overflow:scroll; max-height:350px;">
                                    <table class="table" >
                                        <thead class="text-primary text-danger">
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Room Name</th>
                                        </thead>
                                        <tbody>
                                           <?php 
                                                $con=mysqli_connect("localhost","root","root","EKBooking");
                                                $sql = "SELECT b.m_name,r.r_name,b.s_time,b.date FROM booking b,rooms r,user_profile u WHERE b.s_id = u.staff_id and b.r_id=r.r_id;";
                                                
                                                if($result=mysqli_query($con,$sql))
                                                {
                                                    while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        $stime=date_create($row['s_time']);
                                                        $s=date_format($stime,'H:i:s');
                                                        $etime=date_create($row['e_time']);
                                                        $e=date_format($etime,'H:i:s');
                                                
                                                
                                                      echo '<tr>
                                                        <td>'.$row['m_name'].'</td>                                                        <td>'.$row['date'].'</td>
                                                        <td>'.$s.'</td>
                                                        <td>'.$e.'</td>
                                                        <td>'.$row['r_name'].'</td>     
                                                        </tr>';
                                                    }
                                          } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                </div>
                                
                            </div>
                           <div id="contact_row" class="row hidden">
                                <div class="col-md-6">
                                    <div class="card">
                                <div class="card-header"  data-background-color="red">
                                    <h4 class="title">My Contacts</h4>
                                </div>
                                <div class="card-content table-responsive" style="overflow:scroll; max-height:350px;">
                                    <table class="table">
                                       <!-- <thead class="text-primary text-danger">
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Room Name</th>
                                        </thead>-->
                                        
                                           <?php 
                                                /*$char='C';
                                                $con=mysqli_connect("localhost","root","root","EKBooking");
                                                
                                                $sql = "SELECT name FROM user_profile ORDER BY name ASC;";
                            
                                                $result=mysqli_query($con,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                
                                                   // foreach($row as $key=>$value)
                                                  //  {
                                                        
                                                    
                                                      echo '<p class = "text-danger" style="margin-left:60px;margin-top:20px; font-size:28px">'.$key.'</p>
                                                        <tbody><tr>
                                                        <td></td>
                                                        <td>'.$value.'</td></tr></tbody>';
                                                        
                                                        
                                                   // }
                                                  */  
                                           ?>
                                        
                                    </table>
                                </div>
                            </div>
                                </div>
                                
                            </div>
                            <div id="group_row" class="row hidden">
                                <div class="col-md-6">
                                    <div class="card">
                                <div class="card-header"  data-background-color="red">
                                    <h4 class="title">My Groups</h4>
                                </div>
                                <div class="card-content table-responsive" style="overflow:scroll; max-height:350px;">
                                    <table class="table">
                                       <!-- <thead class="text-primary text-danger">
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                            <th>Room Name</th>
                                        </thead>-->
                                        
                                           <?php 
                                                /*$char='C';
                                                $con=mysqli_connect("localhost","root","root","EKBooking");
                                                
                                                $sql = "SELECT name FROM user_profile ORDER BY name ASC;";
                            
                                                $result=mysqli_query($con,$sql);
                                                $row=mysqli_fetch_assoc($result);
                                                
                                                   // foreach($row as $key=>$value)
                                                  //  {
                                                        
                                                    
                                                      echo '<p class = "text-danger" style="margin-left:60px;margin-top:20px; font-size:28px">'.$key.'</p>
                                                        <tbody><tr>
                                                        <td></td>
                                                        <td>'.$value.'</td></tr></tbody>';
                                                        
                                                        
                                                   // }
                                                  */  
                                           ?>
                                        
                                    </table>
                                </div>
                            </div>
                                
                            </div>
                        </div>
                        <?php
                        }
                    }
            mysqli_close($con);
                            ?>
                    </div>
                </div>


            </div>
        </body>






</html>
<?php } ?>
