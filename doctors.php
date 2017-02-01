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
   <li class='active'><a href='doctors.php'>Doctors</a></li>
   <li><a href='patients.php'>patients</a></li>
   <label class="heading">Hospital management system</label>

</ul>
</div>

</body>
</html>
   
    <?php           

$db_host="localhost";
$db_username="root";
$db_pass="";
$db_name="hmsdb";

mysql_connect("$db_host","$db_username","$db_pass") or die("error occurred");

mysql_select_db("$db_name") or die("no database name");
echo "<table class='table'>
 <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>mobile</th>
        <th>Email-id</th>
        
      </tr>
    </thead>";
$sql1=mysql_query("SELECT * FROM doctorslist");
$count=mysql_num_rows($sql1);

for ($i=1; $i <=$count ; $i++) { 
$query="SELECT * FROM doctorslist WHERE id='$i'";
$sql=mysql_query($query);
$fetch=mysql_fetch_array($sql);

if($fetch){

   
echo "<tbody>";
    echo "<tr>";
     echo "<td>".$fetch['id']."</td>";
     echo "<td>".$fetch['firstname']."</td>";
     echo "<td>".$fetch['lastname']."</td>";
     echo "<td>".$fetch['age']."</td>";
     echo "<td>".$fetch['specialization']."</td>";
     echo "<td>".$fetch['timings']."</td> "  ;    
    echo "</tr> <br>";
echo "</tbody>";

}

}

echo "</table>";
?>

<center><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add a new doctor</button></center>
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add a doctor</h4>
      </div>
      <div class="modal-body">
         <form role="form" name="hii" method="post" action="adddoctor.php" class="addform">
         <div class="form-group">
            <input type="text" class="form-control" name="firstname" placeholder="Enter the  first name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lastname" placeholder="Enter the  last name" required>
          </div> 
           <div class="form-group">
            <input type="number" class="form-control" name="age" placeholder="Enter the  age " required>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" name="specialization" placeholder="Enter the  specialization" required>
          </div>
           <div class="form-group">
            <input type="text" class="form-control" name="timings" placeholder="Enter the  visiting hours" required>
          </div>
        
      
      
        <center><button type="submit" class="btn btn-primary">Submit</button></center>
          </form>
      </div>
    </div>

  </div>
</div>