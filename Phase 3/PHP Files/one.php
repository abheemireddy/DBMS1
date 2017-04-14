
<form action="one.php" method="post">
<label for="ID">Athlete_id</label>
<input type="number" name="Athlete_id" id="Athlete_id">
<br/>


<input type="submit" name="search" id="search">
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
$Athlete_id = "";
$Athlete_id = isset($_POST['Athlete_id']) ? $_POST['Athlete_id'] : '';

$query="Select * from athlete where Athlete_id ='$Athlete_id'";
$fetch = mysqli_query($con,$query) or die (mysql_error());
while($rows=mysqli_fetch_assoc($fetch)or die (mysql_error())) {
        echo  "Athlete_id:    " .$rows['Athlete_id']. "\xA". "\xA". "\xA";
		echo "Name:    " . $rows['Name']. "\xA". "\xA";
		echo  "DOB:   " .$rows ['DOB']. "\xA". "\xA". "\xA";
		echo  "Gender:   " .$rows['Gender']. "\xA". "\xA". "\xA";
		echo  "Country:   " .$rows ['Country']. "\xA". "\xA";
	   echo   "Age:   " . $rows['Age']. "\xA". "\xA";
}

?>
</body>
</html> 

