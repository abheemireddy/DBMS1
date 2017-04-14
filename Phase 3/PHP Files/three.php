
<form action="three.php" method="post">
<label for="ID">Medal_type</label>
<input type="char" name="Medal_type" id="Medal_type">
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
$Medal_type = "";
$Medal_type = isset($_POST['Medal_type']) ? $_POST['Medal_type'] : '';
echo "Athlete_id  "."Name  "."Gender  "."Country  "."Medal_type  "."Prize_money<br/>";
$query="Select * from athlete   JOIN  medal  on athlete.Athlete_id = medal.Athlete_id where medal.Medal_type ='$Medal_type'";
$fetch = mysqli_query($con,$query) or die (mysql_error());
while($rows=mysqli_fetch_assoc($fetch)or die (mysql_error())) {
	
        echo     $rows['Athlete_id']. "\xA". "\xA". "\xA";
		echo     $rows['Name']. "\xA". "\xA";
		 echo    $rows['Gender']. "\xA". "\xA". "\xA";
		 echo     $rows ['Country']. "\xA". "\xA";
	    echo    $rows['Age']. "\xA". "\xA";
	    echo      $rows['Medal_type']. "\xA". "\xA". "\xA";
	    echo      $rows['Prize_money']. "\xA". "\xA". "\xA<br/>";
}

?>
</body>
</html> 

