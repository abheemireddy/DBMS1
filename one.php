<!DOCTYPE html>
<html>
<body>
<?php
$Athlete_id="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
	$conn = new mysqli('localhost', 'user', 'passwd', 'testing');
	if($conn->connect_error){
		echo "connection failed";
		die("connection failed:" . $conn->connect_error);
	}
$Athlete_id=$_POST['Athlete_id'];
$resultSet= mysql_query("select * from athlete ");
if($resultSet->num_rows != 0){
	while($rows = $resultSet->fetch_assoc()){
		$Athlete_id= $rows['Athlete_id'];
		$Name=$rows['Name'];
		$DOB=$rows ['DOB'];
		$Gender = $rows['Gender'];
		$Country= $rows ['Country'];
		$Age=$rows['Age'];
}
}

else{
	echo "search didn't get hit";
}





?>
</body>
</html>