<html>
<head>
<Title>Registration Form</Title>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and 
email address, then click <strong>Submit</strong> 
to register.</p>
<form method="post" action="index.php" 
enctype="multipart/form-data" >
      Name  <input type="text" 
name="name" id="name"/></br>
      Email <input type="text" 
name="email" id="email"/></br>
      <input type="submit" 
name="submit" value="Submit" />
       <input type="submit" 
name="submit2" value="Очистка" />
<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = NewBD", "vol1", "Simpsons1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
/*	$name = $_POST['Login'];
//	$pass = $_POST['Password'];
$sql_select = "SELECT * FROM registration_tbl where name='abc' And email ='abc'";
$stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll(); 
if(count($registrants) > 0) {
    echo "<h2>People who are registered:</h2>";
    echo "<table>";
    echo "<tr><th>Name</th>";
    echo "<th>Email</th>";
    echo "<th>Date</th></tr>";
    foreach($registrants as $registrant) {
        echo "<tr><td>".$registrant['name']."</td>";
        echo "<td>".$registrant['email']."</td>";
        echo "<td>".$registrant['date']."</td></tr>";
    }
    echo "</table>";
} else {
    echo "<h3>No one is currently registered.</h3>";
}
	
/*	$a = mysql_query($conn,"Select * From registration_tbl where name='$name'And email ='$pass");
	$resouce = mysqli_fetch_assoc($a)
		if(mysqli_num_rows($resouce))
		{
			echo "1"
		}
		else {echo "0";}*/
	
	
		
*/	
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
</form>

</body>
</html>
