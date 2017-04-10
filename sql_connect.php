<html>
<head>
</head>
<body>
<form action="" method="post">
<label for="ID">ID</label>
<input type="number" name="student_id" id="student_id">
<br/>

<label for="search">search</label>
<input type="submit" name="search" id="search">
<br/>

</form>
</body>
</html> 
<?php
$student_id="";
if($_SERVER["REQUEST_METHOD"]== "POST") {
$conn = new mysqli('localhost', 'user', 'passwd', 'testing');
if ($conn->connect_error) {
echo "connection failed";
die("Connection failed: " . $conn->connect_error);
}

$student_id=$_POST['student_id'];
$resultSet = $conn->query("select * from student where ID='$student_id'");
if ($resultSet->num_rows != 0) {
while ($rows = $resultSet->fetch_assoc()) {


$student_id = $rows['ID'];A
$tot_credit= $rows['tot_cred'];
$name = $rows['name'];
$dept_name = $rows['dept_name'];
echo "<p>id: $student_id <br/>name: $name<br/>total credit: $tot_credit<br/>dept_name: $dept_name</p>";
}
}
}
else{

echo "search didnt get hit";
}

?>