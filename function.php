
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">		
function check(){
	var  username=$('#username').val();
	var  usernamereg=/^[a-zA-Z0-9_]{2,15}$/;
	if(!usernamereg.test(username)){
		$('#username_error').text('帳號格式錯誤，且不予許有特殊文字');
		return false;
	}else{
		$('#username_error').text('');
	}			
	var  userpass=$('#userpass').val();
	var  userpassreg =/^[A-Z\w]{7,14}$/;
	if(!userpassreg.test(userpass)){
		$('#userpass_error').text('密碼格式錯誤');
		return false;
	}else{
		$('#userpass_error').text('');
	}			
	return true;
	
}		
			
</script>			
			
<?php
                
		function connect(){     //連結資料庫
			$link = mysql_connect("localhost", "root", "");
			if(!$link) die("建立資料連接失敗");
			mysql_query("SET NAMES UTF8");
			return $link;
		}
		function execute_sql($link,$database,$sql){   //尋找db和執行sql
			mysql_select_db($database,$link) or die("開啟資料庫失敗".mysql_error($link));			
			$result= mysql_query($sql,$link);			
			return $result;						
		}
			
		        
?>
