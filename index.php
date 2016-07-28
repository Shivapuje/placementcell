<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Welcome to the Placementcell</title>
        <meta name="viewport" content="width=device-width, intial-scale=1"> 
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/defined.css">
        <link href='https://fonts.googleapis.com/css?family=Vollkorn:400,700' rel='stylesheet' type='text/css'> 
        <link href='https://fonts.googleapis.com/css?family=Exo:400,800' rel='stylesheet' type='text/css'>
		<script src="js/jquery.min.js"> </script>
		<script src="js/jquery-ui.min.js"> </script>
		<script src="js/jquery-ui.js"> </script>
		<script src="js/bootstrap.min.js"> </script>
</head>

<body>
    <div class="homeparallax">
        <div class="homeparallaxcolor">
        
        <div class="heading">Placementcell</div>
        <div class="btn-signin">
            <button class="btn btn-lg btn-outline btn-custom1" style="width:130px;height:55px;">Sign In</button>
        </div>
        <div class="btn-about">
            <button class="btn btn-lg btn-outline btn-custom1" style="width:130px;height:55px;">About</button>
        </div>
        <div for="usn" class="usn-block" align="center">
            <form method="post" action="scripts/verify.php">
                <div class="form-group">
                    <input type="text" name="usn" id="usn" class="input-lg form-control" placeholder="Enter Your USN here" autofocus required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline btn-custom1 btn-lg">Lets Roll</button>
                </div>
            </form>
        </div>
    </div>
        </div>
<!--division for companany slideshow-->
<?php include 'scripts/footer.php';?>
</body>
</html>
