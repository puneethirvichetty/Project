<?php 
if ($_POST['submit'] == 'Login')
{ 
//Collect POST values 
$login = $_POST['uname']; 
$password = $_POST['psw']; 
if($login && $password)
	{ 
		//Connect to mysql server 
		$link = mysqli_connect('localhost', 'root', ''); 
		//Check link to the mysql server 
		if(!$link) 
		{ 
			die('Failed to connect to server: ' . mysql_error()); 
		} 
		//Select database 
		$db = mysqli_select_db($link,'staff selection'); 
		if(!$db) 
		{ 
			die("Unable to select database"); 
		} 
		//Create query 
		$qry="SELECT * FROM login WHERE userName = '".$login."' AND password = '".$password."'";
		//Execute query 
		$result=mysqli_query($link,$qry); 
		//Check whether the query was successful or not 
		if($result)
		{ 
			$count = mysqli_num_rows($result); 
		} 
		
		else
		{ 
		//Login failed 
			include('login.php'); 
			echo '<center>Incorrect Username or Password !!!<center>'; 
			exit(); 
		} 
		//echo $count;
		//if query was successful it should fetch 1 matching record from the table. 
		if( $count == 1)
		{ 
		//Login successful set session variables and redirect to main page. 
			session_start(); 
			
			$row = mysqli_fetch_assoc($result);	

			$_SESSION['IS_AUTHENTICATED'] = 1; 
			$_SESSION['USER_NAME'] = $row['userName'];
			$_SESSION['USER_ID'] = $row['userId'];

			header('location:begin.php'); 			 
		} 
		else
		{ 
		//Login failed
			include('login.php'); 
			echo '<center>Incorrect Username or Password 2!!!<center>'; 
			exit(); 
		} 
	} 
	else
	{ 
		include('login.php'); 
		echo '<center>Username or Password missing3!!</center>'; 
		exit(); 
	} 
} 
else
{ 
	include("location: login.php");	
	echo 'illegal';
	exit(); 
} 
?>