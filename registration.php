<html>
<head>
<Title>Registration Form</Title>
</head>
<body>
<h1>Register here!</h1>
<p>Fill in your name and 
email address, then click <strong>Submit</strong> 
to register.</p>
<form method="post" action="registration.php" 
enctype="multipart/form-data" >
      Login  <input type="text" 
name="Login" id="name"/></br>
      pass <input type="text" 
name="pass" id="email"/></br>
      <input type="submit" 
name="submit" value="Submit" />
       <input type="submit" 
name="submit2" value="Очистка" />

      <?php
      $log = $_POST['Login'];
	$pass = $_POST['pass'];
try {
    $conn = new PDO("sqlsrv:server = tcp:vol1.database.windows.net,1433; Database = NewBD", "vol1", "Simpsons1");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      $sql_select = "SELECT id FROM registration_tbl where (name = '$log' And email = '$pass')";
      $stmt = $conn->query($sql_select);
$registrants = $stmt->fetchAll(); 
      if(count($registrants) > 0) {
    echo "<h2>People who are authorization:</h2>";
    echo "<table>";
    echo "<tr><th>id</th></tr>";
	      foreach($registrants as $registrant){
session_start();
$_SESSION['log'] = 123; 
$_SESSION['pass'] = $pass;
        echo "<tr><td>".$registrant['id']."</td></tr>";
		   header("Location: example.php");
exit;
	      }
    echo "</table>";
} else {
    echo "<h3>Incorrect input data.</h3>";
}


      
      
      
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>

</form>

</body>
</html>
