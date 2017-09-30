<?php

	
	$con=mysqli_connect("localhost","root","root","EKBooking");
	
	$username= $_POST["username"];
	$email= $_POST["email"];
	$password= $_POST["password"];
	
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql="INSERT INTO user_profile VALUES('".$username."','".$password."','NULL','NULL','NULL','NULL','NULL','".$email."');";
	
	
	if($username!="" && $password!="" && $email!="")
    {
			$result=mysqli_query($con,$sql);
				
                    header('Location: ../index.php');
				
		
    }
    else
    {
        session_start();
        $_SESSION['RFail'] = "Please enter valid data!";
        header('Location: ../register.php');
    }
    
	mysqli_close($con);
	
?>