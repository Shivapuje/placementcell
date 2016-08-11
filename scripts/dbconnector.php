<?php

	function initConnection($dbname){
		$serverName = "127.0.0.1";
		$userName = "Autarky";
		$passkey = "webcurl314$";

		$conn = new mysqli($serverName,$userName,$passkey);

		if(mysqli_connect_error()){
			die("Error while accessing the database".mysqli_connect_error());
		}
		elseif (mysqli_select_db($conn,$dbname)) {
		 	return $conn;
		}
		else {
			echo "something went wrong";
		}
	}

	function closeConnection(){
		$conn->close();
	} 
	
?>