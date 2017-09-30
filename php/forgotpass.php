<?php
	
	$con=mysqli_connect("localhost","root","root","EKBooking");
	
	$username= $_POST["username"];
    $old_pass= $_POST["oldpass"];
	$new_pass= $_POST["npass"];
	$con_pass= $_POST["cpass"];
	
	if (mysqli_connect_errno()){
  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$sql="UPDATE user_profile SET password = '".$new_pass."' WHERE username = '".$username."';";
    $sql2="SELECT username,password FROM user_profile WHERE password='".$old_pass."';";

if($result=mysqli_query($con,$sql2))
{
    if($new_pass == $con_pass)
		{
			if($result=mysqli_query($con,$sql))
				{
					header('Location: ../index.php');
				}
		}
    else
        {
            session_start();
            $_SESSION['FailP'] = "Passwords do not match!";
            header('Location: ../forgot.php');
        }
}
else
{
    session_start();
    $_SESSION['IUser'] = "Invalid Username!";
    header('Location: ../forgot.php');
}
	mysqli_close($con);
	
?>