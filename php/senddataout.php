<?php
	session_start();
	if(!isset($_SESSION['Login']))
    {
        header('Location: ../index.php');
    } 
    else
    {
		$con=mysqli_connect("localhost","root","root","EKBooking");
		$name= $_GET['m_name'];
		
		$sql = "SELECT date,s_time,e_time FROM booking WHERE m_name='".$name."';";
		
		
		if($result=mysqli_query($con,$sql))
		{
			while($row=mysqli_fetch_assoc($result)){
				
				$m_date=$row['date'];
				$s_time=$row['s_time'];
				$e_time=$row['e_time'];
			}
		}
		
		$loc = 'Location: ../php/ical.php?date='.$m_date.'&startTime='.$s_time.'&endTime='.$e_time.'&subject='.$name.'&desc=None';
		header($loc);
	}
	
?>