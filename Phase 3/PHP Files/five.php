
<form action="five.php" method="post">
<label for="ID">Country</label>
<input type="text" name="Country" id="Country">
<br/>
<p> Enter Only USA or China Because i have only two countries in my database</P>

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
$Country = "";
$Country = isset($_POST['Country']) ? $_POST['Country'] : '';

$query="Select * from athlete where Country ='$Country'";
$fetch = mysqli_query($con,$query) or die (mysql_error());
while($rows=mysqli_fetch_assoc($fetch)or die (mysql_error())) {
        //echo  "Athlete_id:    " .$rows['Athlete_id']. "\xA". "\xA". "\xA";
		echo "Name:    " . $rows['Name']. "\xA". "\xA";
		//echo  "DOB:   " .$rows ['DOB']. "\xA". "\xA". "\xA";
		echo  "Gender:   " .$rows['Gender']. "\xA". "\xA". "\xA";
		echo  "Country:   " .$rows ['Country']. "\xA". "\xA<br/>";
	   ///echo   "Age:   " . $rows['Age']. "\xA". "\xA<br/>";
}

?>
</body>
</html> 

