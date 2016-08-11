<!DOCTYPE html>
<?php
    session_start();
?>
<html lang="en">
<head>
	<title>Registration | PlacementCell.com</title>
	<meta name="viewport" content="width=device-width, intial-scale=1"> 
        <link rel="stylesheet" href="../css/bootstrap-theme.css">
        <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
       	<link rel="stylesheet" type="text/css" href="../css/defined.css">
</head>
<body bgcolor="#ffbf80">
<?php
	include 'validate.php';
        $usn = $_SESSION["usn"];
	$fullName = $firstName = $middleName = $lastName = $parent = $emailId = $alternateEmailId = NULL;
	$contact = $alternateContact = $gender = $dob = $xPercentage = $xYearofPass = $xBoardofStudy = NULL;
	$xiiPercentage = $xiiBoardofStudy = $xiiYearofPass = $diplomaPercentage = $diplomaYearofPass = $diplomaBoardofStudy = NULL;
	$ugBranch = $ug1sem = $ug2sem = $ug3sem = $ug4sem = $ug5sem = $ug6sem = $ug7sem = $ug8sem = $ugAggregate = $ugYearofPass = NULL;
	$ugTotalBacklogs = $ugCurrentBacklogs = $nativePlace = $permanentAddress = $allotmentThrough = $rank = $religion = $caste = $subCaste = NULL;

	$fullNameErr = $firstNameErr = $middleNameErr = $parentErr = $emailIdErr = $alternateEmailIdErr = NULL;
	$contactErr = $alternateContactErr = $genderErr = $dobErr = $xPercentageErr = $xYearofPassErr = $xBoardofStudyErr = NULL;
	$ugBranchErr = $ug1semErr = $ug2semErr = $ug3semErr = $ug4semErr = $ug5semErr = $ug6semErr = $ug7semErr = $ug8semErr = $ugYearofPassErr = NULL;
	$ugTotalBacklogsErr = $ugCurrentBacklogsErr = $nativePlaceErr = $permanentAddressErr = $allotmentThroughErr = $religionErr = $casteErr = NULL;

	$emptyFieldErrorFlag = 0;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if (empty($_POST["fullName"])) {
			$fullNameErr = "Please enter your full name";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$fullName = test_input($_POST["fullName"]);
		}
		if (empty($_POST["firstName"])) {
			$firstNameErr = "Please enter your first name";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$firstName = test_input($_POST["firstName"]);
		}
		if (empty($_POST["middleName"])) {
			$middleNameErr = "Please enter your middle Name";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$middleName = test_input($_POST["middleName"]);
		}
		$lastName = test_input($_POST["lastName"]);
		if (empty($_POST["parent"])) {
			$parentErr = "Please enter your Parent/Gaurdian name";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$parent = test_input($_POST["parent"]);
		}
		if (empty($_POST["emailId"])) {
			$emailIdErr = "E-mail is Required";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$emailId = test_input($_POST["emailId"]);
		}
		if (empty($_POST["alternateEmailId"])) {
			$alternateEmailIdErr = "Alternate Email ID is Required";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$alternateEmailId = test_input($_POST["alternateEmailId"]);
		}
		if (empty($_POST["contact"])) {
			$contactErr = "Contact Number is Required";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$contact = test_input($_POST["contact"]);
		}
		if (empty($_POST["alternateContact"])) {
			$alternateContactErr = "Please provide an alternative Contact number";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$alternateContact = test_input($_POST["alternateContact"]);
		}
		if (empty($_POST["gender"])) {
			$genderErr = "Please specify your gender";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$gender = test_input($_POST["gender"]);
		}
		if (empty($_POST["dob"])) {
			$dobErr = "Please enter your Date of Birth";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$dob = test_input($_POST["dob"]);
		}
		if (empty($_POST["nativePlace"])) {
			$nativePlaceErr="Please Enter Your Native Place / Hometown.";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$nativePlace= test_input($_POST["nativePlace"]);
		}
		if (empty($_POST["permanentAddress"])) {
			$permanentAddressErr="Please enter your permanent Address.";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$permanentAddress= test_input($_POST["permanentAddress"]);
		}
		if (empty($_POST["gender"])) {
			$genderErr="Please select your gender";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$gender= test_input($_POST["gender"]);
		}
		if (empty($_POST["religion"])) {
			$religionErr="Please enter your Religion";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$religion= test_input($_POST["religion"]);
		}
		if (empty($_POST["caste"])) {
			$casteErr="Please enter your Caste";
			$emptyFieldErrorFlag = 1;
		}
		else{
			$caste= test_input($_POST["caste"]);
		}
		$subCaste= test_input($_POST["subCaste"]);
	}

?>
<div class="container-fluid header">
      <nav class="navbar navbar-inverse">
          <ul class="topnav nav nav-pills">
            <li><b style="font-size:30px;color:#ffffff;">Placementcell</b></li>
            <li class="right"><a class="active" href="../index.php">Home</a></li>
              <li class="right"><a href="#collegeBlog">College Blog</a></li>
              <li class="right"><a href="#contact">Contact Us</a></li>
              <li class="right"><a href="#about">About Us</a></li>
              <li class="right"><a href="#about">Partners</a></li>
          </ul>
      </nav>
    </div> 
  <!--Navigation bar ends-->
    <br><br><br>
<div class="container">
	<div align="center">
		<h2 class="line-border" style="text-align:center;width:80%;align:center;">Please fill up the following details.</h2>
	</div>
	<hr class="colorgraph">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" class="block">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Entered USN is : <Strong><?php echo $usn; ?></strong></h3></div>
            </div>
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Personal Information</h3></div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
                        	<input type="text" name="fullName" id="fullName" class="form-control input-lg" placeholder="Full Name" tabindex="1" required="required">
                        	<div class="error-text"><?php echo $fullNameErr; ?> </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<div class="form-group">
                        	<input type="text" name="firstName" id="firstName" class="form-control input-lg" placeholder="First Name" tabindex="2" required="required">
                        	<div class="error-text"><?php echo $firstNameErr; ?> </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
							<input type="text" name="middleName" id="middleName" class="form-control input-lg" placeholder="Middle Name" tabindex="3" required="required">
							<div class="error-text"><?php echo $middleNameErr; ?> </div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="form-group">
                        	<input type="text" name="lastName" id="lastName" class="form-control input-lg" placeholder="Last Name" tabindex="4">
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
                        <input type="text" name="parent" id="parent" class="form-control input-lg" placeholder="Father/ Guardian Name" tabindex="5" required="required">
                        <div class="error-text"><?php echo $parentErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
                        <input type="text" onfocus="(this.type='date')" onblur="(this.type='text')" name="dob" id="dob" class="form-control input-lg" placeholder="Date of Birth (mm/dd/yyyy)" tabindex="6" required="required">
                        <div class="error-text"><?php echo $dobErr;?></div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
                        <select name="gender" id="gender" class="form-control input-lg" placeholder="Select Your Gender" tabindex="7" required="required">
                        	<option class="input-lg" value="" disabled selected>Select Your Gender</option>
                        	<option class="form-control input-lg" value="Male">Male</option>
                        	<option class="form-control input-lg" value="Female">Female</option>
                        	<option class="form-control input-lg" value="Other">Other</option>
                        </select>	
	                    <div class="error-text"><?php echo $genderErr;?></div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
                        <input type="text" name="religion" id="religion" class="form-control input-lg" placeholder="Religion" tabindex="8" required="required">
                        <div class="error-text"><?php echo $religionErr;?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
                        	<input type="text" name="caste" id="caste" class="form-control input-lg" placeholder="Caste" tabindex="9" required="required">
                        	<div class="error-text"><?php echo $casteErr;?></div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
                        	<input type="text" name="subCaste" id="subCaste" class="form-control input-lg" placeholder="sub-Caste (If any or leave it blank)" tabindex="10">
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--End of Personal Information panel-->

		<!--Contact details panel-->
		<div class="panel panel-info">
			<div class="panel-heading"><h3>Contact Details</h3></div>
			<div class="panel-body">
				<div class="col-md-8">
					<div class="form-group">
                   		<input type="email" name="emailId" id="emailId" class="form-control input-lg" placeholder="Email-Id" tabindex="11" required="required">
                    	<div class="error-text"><?php echo $emailIdErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
            	        <input type="email" name="alternateEmailId" id="alternateEmailId" class="form-control input-lg" placeholder="Alternate E-Mail Id" tabindex="12" required="required">
                	    <div class="error-text"><?php echo $alternateEmailIdErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
            	        <input type="tel" name="contact" id="contact" class="form-control input-lg" placeholder="Contact Number (No need to include 0 or +91 )" tabindex="13" required="required">
            	        <div class="error-text"><?php echo $contactErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
            	        <input type="tel" maxlength="11" name="alternateContact" id="alternateContact" class="form-control input-lg" placeholder="Alternate Contact Number (No need to include 0 or +91 )" tabindex="14" required="required">
            	        <div class="error-text"><?php echo $alternateContactErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
            	    	<input type="text" name="nativePlace" id="nativePlace" class="form-control input-lg" placeholder="Hometown / Native Place" tabindex="15" required="required">
            	    	<div class="error-text"><?php echo $nativePlaceErr; ?> </div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="form-group">
						<label for="permanentAddress"><h4>Permanent Address : </h4></label>
            	        <textarea rows="05" style="resize:none;" name="permanentAddress" id="permanentAddress" class="form-control input-lg" tabindex="16" required="required"></textarea>
            	        <div class="error-text"><?php echo $permanentAddressErr; ?> </div>
					</div>
				</div>
			</div>
		</div> 
		<!--End of Contact details panel-->

		<!--Study Details panel-->
		<div class="panel panel-danger">
			<div class="panel-heading" style="color:#112233;"><h3 style="color:#b3003b;">Study Information</h3></div>
			<div class="panel-body">
				<div class="panel" style="border-color:#112233;">
					<div class="panel-heading"><h4 style="color:#008811;">S S L C</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input type="number" step="0.01" min="0" max="100" name="xPercentage" id="xPercentage" class="form-control input-lg" placeholder="10th Percentage" tabindex="17" required="required">
									
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="xBoardofStudy" id="xBoardofStudy" class="form-control input-lg" placeholder="10th Board of Study" tabindex="18" required="required">
									<div class="error-text"><?php echo $xBoardofStudyErr; ?></div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" onfocus="(this.type='month')" onblur="(this.type='text')" name="xYearofPass" id="xYearofPass" class="form-control input-lg" placeholder="10th Year of Passing" tabindex="19" required="required">
									<div class="error-text"><?php echo $xYearofPassErr; ?></div>
								</div>
							</div>
						</div>
					</div>										
				</div>
				<div class="panel" style="border-color:#112233;">
					<div class="panel-heading"><h4 style="color:#008811;">II<small>nd</small> P U C</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input type="number" step="0.01" min="0" max="100" name="xiiPercentage" id="xiiPercentage" class="form-control input-lg" placeholder="12th Percentage" tabindex="20">	
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="xiiBoardofStudy" id="xiiBoardofStudy" class="form-control input-lg" placeholder="12th Board of Study" tabindex="20">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" onfocus="(this.type='month')" onblur="(this.type='text')" name="xiiYearofPass" id="xiiYearofPass" class="form-control input-lg" placeholder="12th Year of Passing" tabindex="20">
								</div>
							</div>
						</div>
					</div>										
				</div>
				<div class="panel" style="border-color:#112233;">
					<div class="panel-heading"><h4 style="color:#008811;">Diploma</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<input type="number" step="0.01" min="0" max="100" name="diplomaPercentage" id="diplomaPercentage" class="form-control input-lg" placeholder="Diploma Aggregate" tabindex="20">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="diplomaBoardofStudy" id="diplomaBoardofStudy" class="form-control input-lg" placeholder="Diploma Board of Study" tabindex="20">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<input type="text" onfocus="(this.type='month')" onblur="(this.type='text')" name="diplomaYearofPass" id="diplomaYearofPass" class="form-control input-lg" placeholder="Diploma Year of Passing" tabindex="20">
								</div>
							</div>
						</div>
					</div>										
				</div>
				<div class="panel" style="border-color:#112233;">
					<div class="panel-heading"><h4 style="color:#008811;">Under Graduate</h4></div>
						<div class="panel-body">
							<div class="col-md-5">
								<div class="form-group">
									<select name="ugBranch" id="ugBranch" class="form-control input-lg" tabindex="20">
										<option value="" disabled selected>Select Your UG Branch</option>
										<option value="ae"></option>
										<option value="cs">Computer Science and Engg. (CS)</option>
										<option value=""></option>

									</select>
								</div>
							</div>
							<br><br><br>
							<hr>
							<label for="ug1sem"><strong>1st to 8th sem percentages (Enter 0 if you don't know)</strong></label>
								<div class="row">
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug1sem" id="ug1sem" class="form-control input-lg" placeholder="1st sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug2sem" id="ug2sem" class="form-control input-lg" placeholder="2nd sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug3sem" id="ug3sem" class="form-control input-lg" placeholder="3rd sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug4sem" id="ug4sem" class="form-control input-lg" placeholder="4th sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug5sem" id="ug5sem" class="form-control input-lg" placeholder="5th sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug6sem" id="ug6sem" class="form-control input-lg" placeholder="6th sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug7sem" id="ug7sem" class="form-control input-lg" placeholder="7th sem" tabindex="20">
										</div>
									</div>
									<div class="col-md-2">
										<div class="form-group">
											<input type="number" step="0.01" min="0" max="100" name="ug8sem" id="ug8sem" class="form-control input-lg" placeholder="8th sem" tabindex="20">
										</div>
									</div>
								</div>
								<hr size="10">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<input type="number" step="1" min="0" max="50" name="ugTotalBacklogs" id="ugTotalBacklogs" class="form-control input-lg" placeholder="Total Number of Backlogs in UG" tabindex="20">
											<div class="error-text"><?php echo $ugTotalBacklogsErr; ?></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="number" step="1" min="0" max="100" name="ugCurrentBacklogs" id="ugCurrentBacklogs" class="form-control input-lg" placeholder="Current Backlogs in UG" tabindex="20">
											<div class="error-text"><?php echo $ugCurrentBacklogsErr; ?></div>
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group">
											<input type="text" onfocus="(this.type='month')" onblur="(this.type='text')" name="ugYearofPass" id="ugYearofPass" class="form-control input-lg" placeholder="UG Year of Passing" tabindex="20" required="required">
											<div class="error-text"> <?php echo $ugYearofPassErr; ?></div>
										</div>
									</div>
								</div>
								<hr size="10">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<select name="allotmentThrough" id="allotmentThrough" class="form-control input-lg">
												<option value="" disabled selected>Allotment Through</option>
												<option value="management">Management</option>
												<option value="cet">CET</option>
												<option value="comed-k">COMED-K</option>
											</select>
											<div class="error-text"> <?php echo $allotmentThroughErr; ?> </div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input type="number" maxlength="6" min="1" max="100000" name="rank" id="rank" class="form-control input-lg" placeholder="Enter your Engg. CET / COMED-K / Any other Rank">
										</div>
									</div>
								</div>
							</div>										
						</div>
					</div>
				</div>
			
			<hr class="colorgraph" style="width:100%;"><br>
			<div class="form-group" align="right">
				<button class="btn btn-outline btn-lg btn-primary" type="submit" name="submit" value="submit">Register</button>
			</div>
			</div>			
		</form>
		<br><br><br><br>
		<?php
			include 'footer.php';
		?>
	</div>
</body>
</html>
