<!DOCTYPE html>
<?php
session_start();
    if(!isset($_SESSION['Login']))
    {
        header('Location: ../index.php');
    }
    else
    {
        ?>
<html style="margin-top:100px;">

<head>
    <link type="text/css" rel="stylesheet" href="../css/material-kit.css">
    <link type="text/css" rel="stylesheet" href="../css/demo.css">
    <link type="text/css" rel="stylesheet" href="../css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="../css/material-kit.css.map">
    <link type="text/css" rel="stylesheet" href="../css/material-dashboard.css">
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>
   <div class="content">
    <div class="container-fluid">
        <div class="row">
           <div class="col-md-12">
            <div class="card" style="height:400px;">
                <div class="card-header" data-background-color="red">
                    <h4 class="title">
                       <script type="text/javascript">
                        var m_names = ["January", "February", "March",
                            "April", "May", "June", "July", "August", "September",
                            "October", "November", "December"
                        ];

                        var d_names = ["Sunday", "Monday", "Tuesday", "Wednesday",
                            "Thursday", "Friday", "Saturday"
                        ];

                        var myDate = new Date();
                        var temp = myDate;
                        temp.setDate(myDate.getDate() );
                        var curr_date = myDate.getDate();
                        var curr_month = myDate.getMonth();
                        var curr_day = myDate.getDay();
                        document.write(d_names[curr_day] + "," + m_names[curr_month] + " " + curr_date);

                        </script>
                    </h4>
                </div>
                <div class="card-content table-responsive">
                    <table class="table" style="margin-top:50px;">
                        <thead class="text-primary">
                            <th>Meeting Name</th>
                            <th>Room name</th>
                            <th>Start Time</th>

                        </thead>
                        <tbody>
                           <?php
                                $con = mysqli_connect('localhost','root','root','EKBooking');
                            
                                $sql = "SELECT b.m_name,r.r_name,b.s_time FROM booking b,rooms r WHERE r.r_id=b.r_id AND b.date='".date('Y-m-d')."';";
                                
                                
                            
                                if($result=mysqli_query($con,$sql))
                                {
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $stime=date_create($row['s_time']);
                                        $s=date_format($stime,'H:i:s');
                                        
                                        echo '<tr>
                                        <td>'.$row['m_name'].'</td>
                                        <td>'.$row['r_name'].'</td>
                                        <td>'.$s.'</td>
                                        </tr>';
                                    }
                                }
                                mysqli_close($con);
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </div>


        
    </div>
    </div>
</body>

<!--   Core JS Files   -->
<script src="../js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="../js/bootstrap.min.js" type="text/javascript"></script>
<script src="../js/material.min.js" type="text/javascript"></script>


<!--  Notifications Plugin    -->
<script src="../js/bootstrap-notify.js"></script>


<!-- Material Dashboard javascript methods -->
<script src="../js/material-dashboard.js"></script>
<script src="../js/material-kit.js"></script>

</html>
<?php } ?>