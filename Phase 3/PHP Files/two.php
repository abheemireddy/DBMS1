
<form action="two.php" method="post">
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

$query="Select * from phone_no JOIN athlete on phone_no.Athlete_id = athlete.Athlete_id where athlete.Athlete_id ='$Athlete_id'";
$fetch = mysqli_query($con,$query) or die (mysql_error());
while($rows=mysqli_fetch_assoc($fetch)or die (mysql_error())) {
	
        echo  "Athlete_id:    " .$rows['Athlete_id']. "\xA". "\xA". "\xA";
		echo "Name:  ". $rows['Name']."  ";
		echo "Phone:    " . $rows['Phone']. "\xA". "\xA<br/>";
		
}

?>
</body>
</html> 

