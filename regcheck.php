<?php
	header("Content-type:text/html;charset=utf-8");
	if(isset($_POST['Submit']) && $_POST['Submit'] == "注册")
	{
		$user = $_POST['username'];
		$psw = $_POST['password'];
		$psw_confirm = $_POST['confirm'];
		if($user == "" || $psw == "" || $psw_confirm == "")
		{
			echo "<script>alert('请确认信息的完整性'); history.go(-1);</script>";
		}
		else
		{
			
			if($psw == $psw_confirm)
			{
				



				mysql_connect("localhost","root","");
				mysql_select_db("database");
			
				
				$sql = "SELECT username from user where username = '$_POST[username]'";
				$result = mysql_query($sql);
				$num = mysql_num_rows($result);
				if($num)
				{
					echo"<script>alert('用户名已存在');history.go(-1);</script>";
				}
				else{
					$sql_insert = "INSERT INTO user (username,password) VALUES('$_POST[username]','$_POST[password]')";
					$res_insert = mysql_query($sql_insert);
					if($res_insert)
					{
						echo "<script>alert('注册成功！');history.go(-2);</script>";		
				}
				else{
					echo "<script>alert('系统繁忙，请稍候！');history.go(-1);</script>";
				}	
			}
		}
		else{
		echo "<script>alert('密码不一致！');history.go(-1);</script>";
			}
		}
	}
	else {
		echo "<script>alert('提交未成功！');history.go(-1);</script>";
	}
?> 





