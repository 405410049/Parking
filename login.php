<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>parking</title>
	<style type="text/css">
	.head{
		background-color:#003344;color:white;font-weight:bold;font-size:30px;
		text-align:center;padding:10px;
	}
	.content{
		width:250px;margin-left:auto;margin-right:auto;font-weight:bold;font-size:25px;
	}
	.box{
		width:280px;padding:20px;margin:10px;background-color:#eeeeee;
		display:inline-block;vertical-align:top;border-radius:8px;
	}
	</style>
</head>
<body style="margin:0px;background-color:white;">
	<div class="head">
	<h1>停車場管理系統</h1></div>
	<div style="margin-top:100px;margin-bottom:100px"></div>
	<div class="content">
		<div class="box">
		 <form action="manage/index.php" method="post">
			  <label for="Username">帳號</label>
			  <input type="text" name="Username" id="Username" required="required" style="height:20px;"/><br />
				<div style="margin-top:25px;margin-bottom;25px"></div>
       		  <label for="Password">密碼</label>
			  <input type="password" name="Password" id="Password" required="required" style="height:20px;"/><br />
				<div style="margin-top:25px;margin-bottom;25px;font-size:20px;">
      		  <input type="submit" name="Submit" value="登入"style="width:250px;height:40px;font-size:20px;font-weight:bold;border-radius:8px;margin-left:8px;background-color:#009FCC;"></div>
		</div>
			  <div style="margin-left:100px;"><a href="register.php">sign up now</a></div>
	   	</form>
	</div>
</body>
</html>
