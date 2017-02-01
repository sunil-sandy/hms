<!DOCTYPE html>
<html>
<head>
	<title>Hospital manangement system</title>
	<!--Favicon-->
	<link rel="stylesheet" type="text/css" href="css/index.css">

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

</head>
<body id="body">
	


<div id='cssmenu'>
<ul>
   <li class='active'><a href='index.php'>Home</a></li>

   <li><a href='about.php'>About</a></li>
   <li><a href='doctors.php'>Doctors</a></li>
   <li><a href='patients.php'>Patients</a></li>

<label class="heading">Hospital management system</label>
</ul>
</div>

<form role="form" method="post" action="addpatient.php" class="regform">
  
<center><h3 class="formheading">Patients registration form</h3></center>	
  <div class="form-group">
    <label for="name">Patient name:</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>
   <div class="form-group">
  <label for="sel1">Select the gender:</label>
  <select class="form-control" id="gender" name="gender" required>
    <option>Male</option>
    <option>Female</option>
    <option>other</option>
  </select>
</div>
  <div class="form-group">
    <label for="age">Patient age:</label>
    <input type="number" class="form-control" id="age" name="age" required>
  </div>
 
<div class="form-group">
    <label for="name">Mobile number:</label>
    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" required>
  </div><div class="form-group">
    <label for="name">Email id:</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
  <label for="comment">Address:</label>
  <textarea class="form-control" rows="2" id="address" name="address" required></textarea>
</div>
  <center><button type="submit" class="btn btn-primary">Submit</button></center>
</form>
	






</form>
</body>
</html>