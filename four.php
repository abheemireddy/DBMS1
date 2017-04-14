
<form action="four.php" method="post">
<label for="ID">Team_id</label>
<input type="number" name="Team_id" id="Team_id">
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

$Team_id = "";
$Team_id = isset($_POST['Team_id']) ? $_POST['Team_id'] : '';



$query="SELECT * FROM  team join coach on team.Team_id= coach.Team_id  WHERE  team.Team_id = '$Team_id' ";
$fetch = mysqli_query($con,$query) or die (mysql_error());
while($rows=mysqli_fetch_assoc($fetch)or die (mysql_error())) { 
		echo "Team_id::". "\xA". "\xA". $rows['Team_id']. "\xA". "\xA". "\xA". "\xA". "\xA". "\xA";
		echo "Team_name::"."\xA". "\xA". $rows ['Team_name']. "\xA". "\xA". "\xA". "\xA". "\xA". "\xA". "\xA";
		echo  "Num_of_people_team::"."\xA". "\xA".$rows['Num_of_people_team']. "\xA". "\xA". "\xA";
		echo "Coach_name::" . $rows['Coach_name'];
}

?>
</body>
</html> 