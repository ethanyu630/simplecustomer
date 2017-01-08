<?php 
require_once"function.php";
session_start();
$message="";
if(!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")){

	if(isset($_POST["username"])&& isset($_POST["userpass"]) ){
		$username=$_POST["username"];
		$userpass=$_POST["userpass"];

		$link = connect();
		$sql="select * from enter where username=$username";
		$result=execute_sql($link,"coffee",$sql);
		while (@$row=mysql_fetch_array($result)){
			$name= $row[2];			
			$pass= $row[3];
			
		}
		
			
		if(($_POST["username"]==@$name)&& ($_POST["userpass"]== @$pass) && @$name != ""){
			
			$_SESSION["membername"]=$username;
			$message= "嘗試登入會員系統中...";
		}else{
			$message= "<h2><font color='red'>尊敬的用戶<br>由於輸入的訊息錯誤<br>稍後請您再次進行登入...</font></h2>";
		}
		
		header('refresh: 5;url="index.php"');
		
	}
	
}

?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php echo $message; ?>
<body>
</html>