
<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = NewBD", "vol1", "Simpsons1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
	$name = $_POST['Login'];
	$pass = $_POST['Password'];

	
	$a = mysql_query($conn,"Select * From registration_tbl where name='$name'And email ='$pass");
	$resouce = mysqli_fetch_assoc($a)
		if(mysqli_num_rows($resouce))
		{
			echo "1"
		}
		else {echo "0";}
	
	
		
	
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
