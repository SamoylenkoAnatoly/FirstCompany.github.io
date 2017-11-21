

<?php
try {
    $conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = NewBD", "vol1", "Simpsons1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
	
	$error = array(); //массив для ошибок 	
if ($_POST['Login'] != "" && $_POST['Password'] != "") //если поля заполнены 	

{ 		
	print ("hello");
} else {print ("123")}
	
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
</form>
