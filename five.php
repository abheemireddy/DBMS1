
<form action="five.php" method="post">
<label for="ID">Athlete_id</label>
<input type="number" name="Athlete_id" id="Athlete_id">
<br/>
<label for="ID">Name</label>
<input type="varchar" name="Name" id="Name">
<br/>
<label for="ID">DOB</label>
<input type="date" name="DOB" id="DOB">
<br/>
<label for="ID">Gender</label>
<input type="varchar" name="Gender" id="Gender">
<br/>
<label for="ID">Country</label>
<input type="varchar" name="Country" id="Country">
<br/>
<label for="ID">Age</label>
<input type="number" name="Age" id="Age">
<br/>
<input type="submit" value = "Add Athlete">
<br/>



</form>

<?php

$server="localhost";
$db="olympics";
$user="root";
$pass="";

$con=mysqli_connect($server, $user, $pass, $db) or die ("Connection Failed");
if($con==true)
{
 echo "Connection Success<br/> <br/>" . "\xA" . "\xA". "\xA". "\xA";
}

$Athlete_id = isset($_POST['Athlete_id']) ? $_POST['Athlete_id'] : '';
$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$DOB = isset($_POST['DOB']) ? $_POST['DOB'] : '';
$Gender= isset($_POST['Gender']) ? $_POST['Gender'] : '';
$Country= isset($_POST['Country']) ? $_POST['Country'] : '';
$Age = isset($_POST['Age']) ? $_POST['Age'] : '';

echo isset($_POST['Athlete_id']);
echo isset($_POST['Name']);
echo isset($_POST['DOB']);
echo isset($_POST['Gender']);
echo isset($_POST['Country']);
echo isset($_POST['Age']);





$query="INSERT INTO athlete ('Athlete_id','Name','DOB','Gender','Country','Age') values ($Athlete_id, $Name,$DOB, $Gender,$Country,$Age)";
mysqli_query($con,$query) or die (mysql_error());

if(mysqli_affected_rows($con)>1) {
	echo "<p> Employee Added</p>";
}
else{
	echo "Employee NOT Added <br/>";
	echo mysqli_error ($con);
}

?>
</body>
</html> 

