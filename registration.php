

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
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}


function enter ()
 { 
$error = array(); //массив для ошибок 	
if ($_POST['Login'] != "" && $_POST['Password'] != "") //если поля заполнены 	

{ 		
	$login = $_POST['Login']; 
	$password = $_POST['Password'];

	$rez = mysql_query("SELECT * FROM registration_tbl WHERE name=$login"); //запрашиваем строку из БД с логином, введённым пользователем 		
	if (mysql_num_rows($rez) == 1) //если нашлась одна строка, значит такой юзер существует в БД 		

	{ 			
		$row = mysql_fetch_assoc($rez); 			
		if (md5(md5($password).$row['salt']) == $row['Password']) //сравниваем хэшированный пароль из БД с хэшированными паролем, введённым пользователем и солью (алгоритм хэширования описан в предыдущей статье) 						

		{ 
		//пишем логин и хэшированный пароль в cookie, также создаём переменную сессии
		setcookie ("name", $row['name'], time() + 50000); 						
		setcookie ("email", md5($row['name'].$row['email']), time() + 50000); 					
		$_SESSION['id'] = $row['id'];	//записываем в сессию id пользователя 				

		$id = $_SESSION['id']; 				
		lastAct($id); 				
		return $error; 			
	} 			
	else //если пароли не совпали 			

	{ 				
		$error[] = "Неверный пароль"; 										
		return $error; 			
	} 		
} 		
	else //если такого пользователя не найдено в БД 		

	{ 			
		$error[] = "Неверный логин и пароль"; 			
		return $error; 		
	} 	
} 	
 

	else 	
	{ 		
		$error[] = "Поля не должны быть пустыми!"; 				
		return $error; 	
	} 
?>
</form>
