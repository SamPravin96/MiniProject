
<!DOCTYPE html>
<html>

<head>
	<title>Service Booking</title>
</head>

<body> 
	
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => carcareclinic
		$conn = mysqli_connect("localhost", "root", "", "carcareclinic");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 7 values from the form data(input)
		$customerName = $_REQUEST['customerName'];
		$customerNumber = $_REQUEST['customerNumber'];
		$carBrand = $_REQUEST['carBrand'];
		$carModel = $_REQUEST['carModel'];
		$serviceLocation = $_REQUEST['serviceLocation'];
        $regNumber = $_REQUEST['regNumber'];
		$callingTime = $_REQUEST['callingTime'];
		
		// Performing insert query execution
		// here our table name is servicebooking
		$sql = "INSERT INTO servicebooking VALUES ('$customerName',
			'$customerNumber','$carBrand','$carModel','$serviceLocation','$regNumber','$callingTime')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h2>Your Service Request Registered successfully."
				
				. " Our Executive Will Call You.</h2>";

		
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	
</body>

</html>
