<?php           

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="hmsdb";

mysql_connect("$db_host","$db_username","$db_pass") or die("error occurred");

mysql_select_db("$db_name") or die("no database name");

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
   <li class='active'><a href='patients.php'>patients</a></li>
   <label class="heading">Hospital management system</label>

</ul>
</div>
<table class='table'>
 <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>mobile</th>
        <th>Email-id</th>
        <th>Address</th>
      </tr>
    </thead>
    <?php
$sql1=mysql_query("SELECT * FROM addpatient");
$count=mysql_num_rows($sql1);
for ($i=1; $i <=$count ; $i++) { 
$query="SELECT * FROM addpatient WHERE id=$i";
$sql=mysql_query($query);
$fetch=mysql_fetch_array($sql);

if($fetch){
?>
   
<tbody>
      <tr>
    <td><?php echo $fetch['id'] ?> </td>
        <td><?php echo $fetch['name'] ?></td>
        <td><?php echo $fetch['gender'] ?></td>
        <td><?php echo $fetch['age'] ?></td>
        <td><?php echo $fetch['mobile'] ?></td>
        <td><?php echo $fetch['email'] ?></td>

        <td><?php echo $fetch['address'] ?></td>
      </tr>
    </tbody>

<?php
}
}?>
</table>
