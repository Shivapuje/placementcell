<?php
    session_start();
    include 'dbconnector.php';
    include 'validate.php';
    $temp = test_input($_POST['usn']);
    $usn = strtoupper($temp);
	
    if($_SERVER['REQUEST_METHOD'] === "POST")
    {
	$conn=initConnection("student");
	if(is_null($usn)) 
	{
            echo "something is fisshyyy..!!!";
	}
	else 
        {
            $usn = mysqli_real_escape_string($conn,$usn);
            $result = mysqli_query($conn,"SELECT * FROM login WHERE userId='$usn'");
            $count = mysqli_num_rows($result);
            $_SESSION["usn"] = $usn;
            if ($count == 1)
            {
                redirect("login.php");
            }
            else
            {
                redirect("be_student_registration.php");
            }
        }
    }
    else
    {
	echo "Something went wrong..!!";
    }
?>