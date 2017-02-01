<?php           

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="hmsdb";

mysql_connect("$db_host","$db_username","$db_pass") or die("error occurred");

mysql_select_db("$db_name") or die("no database name");                 

if(isset($_POST))  //Determine if a variable is set and is not NULL
{


$name=$_POST['name'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$address=$_POST['address'];

$query="INSERT INTO addpatient(name,gender,age,mobile,email,address) VALUES ('$name','$gender','$age','$mobile','$email','$address')";
$data = mysql_query($query)or die(mysql_error()); 

    }
    ?>
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
   <li ><a href='index.php'>Home</a></li>

   <li><a href='about.php'>About</a></li>
   <li><a href='doctors.php'>Doctors</a></li>
   <li><a href='patients.php'>patients</a></li>
</ul>
</div>
patient is added.
</body>
</html>