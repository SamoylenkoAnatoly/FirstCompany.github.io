

<form method="post" action="registration.php"
enctype="multipart/form-data" >
      Login  <input type="text" 
name="Login" id="Login"/></br>
      Password <input type="text" 
name="Password" id="Password"/></br>
      <input type="submit" 
name="Submit1" value="Submit1" />
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
