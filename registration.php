
<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = NewBD", "vol1", "Simpsons1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
	$name = $_POST['Login'];
	$pass = $_POST['Password'];

	
	$a = mysql_query($conn,"Select name From registration_tbl where id =1");
	$b = mysql_query($conn,"Select email From registration_tbl where id =1");
		if($name == "abc" && $pass =="abc" )
		{
			print (123);
		}
		
	}
	
		
	
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
