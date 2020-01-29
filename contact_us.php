<!DOCTYPE html>
<html>
<head>
	<title>AutoNexia/contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	 <style>
        input[type=text], select, textarea {
        width: 100%; 
        padding: 12px; 
        border: 1px solid #ccc; 
        border-radius: 4px; 
        box-sizing: border-box; 
        margin-top: 6px; 
        margin-bottom: 16px; 
        resize: vertical 
		}

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    </style>

</head>
<body background="bgi1.jpg">
	<div class="container-fluid">
		<div class="panel panel-success">
			<div class="panel panel-body" style="background-color: rgb(102,60,98);">
				<div class="row">
					<div class="col-md-3">
						<img src="pic01.jpg" height="120px" width="120px" class="img img-rounded">
					</div>
					<div class="col-md-6 text-center" style="color:black;">
						<h3 style="font-family: algerian;color: red;">AutoNexia</h3>
						<h4>The Car Repaire Services </h4>
						<h5>In Front of WCE Sangli</h5>
						<h5>100 feet road,vishrambagh</h5>
						<h6>Mobile No:9011017387</h6>
						<h6>pin: 416415</h6>
					</div>
					<div class="col-md-3">
						<img src="pic04.png" height="120px" width="120px" class="img img-rounded" align="right">
					</div>
				</div>
			</div>
			<!-- <div class="panel panel-footer" style="background-color: cyan;">
				
			</div>
			 -->
		</div>
		<div class="navbar navbar-inverse">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Car_Services</a>
			</div>
			<ul class="nav navbar-nav navbar-right"> 
				<li><a href="practice1.html">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Car_Models<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Honda Fitta.</a></li>
						<li><a href="#">Nissan Moco.</a></li>
						<li><a href="#">Buick LaCrosse.</a></li>
						<li><a href="#">Toyota MR2.</a></li>
						<li><a href="#">Ford Pinto.</a></li>
						<li><a href="#">Hyundai Santa Fe</a></li>
						<li><a href="#">Lamborghini Reventon</a></li>
					</ul>
				</li>
				<li><a href="about_us.html">About</a></li>
				<li><a href="contact_us.html">Contact</a></li>
				<li><a href="FAQ's.html">FAQ's</a></li>
			</ul>
			
		</div>
		<br>
		<div class="container-fluid" style="margin-right: 40px; margin-left: 40px;">
			<h2><b>CONTACT US</b></h2>
			<div class="row">
				
				<?php
					$servername = "localhost";
					$username = "root";
					$password = "";
					$db="car";
					// Create connection
					$conn = new mysqli($servername, $username, $password,$db);

					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 
					echo "Connected successfully";

					
						
				?>				

				<div class="col-md-6">
					<div class="container-fluid" >
			          <div class="rows">
			          <div class="col-md-6" style="background-color: #ccc;width: 450px;">
			              <form class="form-horizontal" method="POST">
			                <br>
			                <br>
			                <label for="fname">First Name</label>
			                <input type="text" id="fname" name="firstname" placeholder="Your name..">

			                <label for="lname">Last Name</label>
			                <input type="text" id="lname" name="lastname" placeholder="Your last name..">

			                 <label for="Mobile no">Mobile No</label>
			                <input type="text" id="mo no" name="mobile_no" placeholder="Your mobile number..">


			                <label for="state">State</label>
			                <select id="state" name="state">
			                  <option value="maha">Maharashtra</option>
			                  <option value="hyd">Hydrabad</option>
			                  <option value="kntk">Karnataka</option>
			                  <option value="gj">Gujrat</option>
			                  <option value="mp">MP</option>
			                  <option value="up">UP</option>

			                </select>

			                <label for="subject">How Can We Help You</label>
			                <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px">
			                	
			                </textarea>

			                <input type="submit" value="Submit" name="Submit">

			              </form>
			              </div>
					</div>
				</div>
			</div>
			<?php
			 if(isset($_POST['Submit']))
			 {
			 	$nm=mysqli_real_escape_string($conn,strip_tags($_POST['firstname']));
			 	$eml=mysqli_real_escape_string($conn,strip_tags($_POST['lastname']));
			 	$mob_no=mysqli_real_escape_string($conn,strip_tags($_POST['mobile_no']));
			 	$state=mysqli_real_escape_string($conn,strip_tags($_POST['state']));
			 	$subject=mysqli_real_escape_string($conn,strip_tags($_POST['subject']));

			 	$ins_sql="INSERT INTO car_info(fname,lname,mobile_no,state,subject)
			 	VALUES('$nm','$eml','$mob_no','$state',
			 	'$subject)";

			 	if(mysqli_query($conn,$ins_sql))
			 	{
			 		echo "<script language='javascript'>alert('successfully submitted!!')</script>";
			 	}
			 
			 }
			?>

			<div class="col-md-6">
					<h3 style="color: gray;"><b>WHERE WE ARE</b></h3>
					<br>
					<h4><b>AUTONEXIA TECHNOLOGY PRIVATE LIMITED</b></h4>	
					
					<p>
						102 Chavan House besides SBI Bank<br>
						100 feed Road vishrambagh<br>
						sangli, Maharashtra - 416415
					</p>

					<h4><b>Pune Office</b></h4>	
					
					<p>
						Office no 7, 1st Floor,Primrose The Mall, Next to MI Service Station,<br>
						Baner Rd, Opposite,Chaitanya paratha, Baner<br>
						Pune, Maharashtra - 411045
					</p>

					<h4><b>NCR Office</b></h4>	
					
					<p>
						Cabin no. 18, 6th floor, plot no.4, minarch tower, sec 44,<br>
						Gurgaon, Haryana - 122003
					</p>
					<h4><span class="glyphicon glyphicon-earphone"></span> 9011017387</h4>
				</div>

		</div>
	</div>










		<br>
		<footer class="panel-body text-center" style="background-color:rgb(102,17,98) ;background-repeat:no-repeat; background-size: cover; background-position: center;">
			
			<b style="color: black;">CopyRight &copy; The content provided by the developer of the site are under CopyRight rule</b>
		</footer>
	</div>

</body>
</html>