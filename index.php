
	


<html>

<?php 
   
	session_start();
	require_once"function.php";
    $link = connect();

?>
<head>
</head>
<body>
      <?php
	 //檢查是否登入狀態
	 if(!isset($_SESSION["membername"]) || ($_SESSION["membername"]=="")){   //判斷帳號是否登入，未登入將提供登入介面
		
	 ?>
<form method="post" action="loging.php" name="form1" onsubmit="return check();">
<table border=0>
	<tr >
	    <td>帳號:</td>
		<td><input type="text" name="username" id="username" ></td><td><font color=red><div id="username_error"></div></div></td>
	</tr>
	<tr>
	    <td>密碼</td>
		<td><input type="password" name="userpass" id="userpass"></td><td><font color=red><div id='userpass_error'></div></font></td>
	</tr  >
	<tr>
	    <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="登入"><input type="reset" name="reset" id="reset" value="重設"></td>

	</tr>

<?php 

	 }else{
		 
		if(isset($_SESSION["membername"])){  // 取消登入
	         echo "<table align='right'>
					<tr>
					<td>".$_SESSION['membername']."您好</td>
					<td><a href='index.php?logout=true'>登出</td>
					</tr>
					</table>";
        }
	 }
    	
		
		
		if(isset($_GET["logout"]) && ($_GET["logout"]=="true")){  //session登出
						unset($_SESSION["membername"]);
						echo "<h2>正在登出中....</h2>";
						header("refresh :2,url=index.php");
		}
?>	
</table>
</form>
<body>
</html>