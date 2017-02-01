<?php           

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="hmsdb";

mysql_connect("$db_host","$db_username","$db_pass") or die("error occurred");

mysql_select_db("$db_name") or die("no database name");
if(isset($_POST))  //Determine if a variable is set and is not NULL
{


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$specialization=$_POST['specialization'];
$timings=$_POST['timings'];

$query="INSERT INTO doctorslist(firstname,lastname,age,specialization,timings) VALUES ('$firstname','$lastname','$age','$specialization','$timings')";
$data = mysql_query($query)or die(mysql_error());

	
if($data) { 

	
	
	 header('Location: doctors.php');

	

          }
  else
   {
	echo "you have gone wrong";

    }
    }
    ?>