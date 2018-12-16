<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>停車場管理系統</title>
	<link rel=stylesheet type="text/css" href="register.css">
</head>
<body id="content">
	<h2>註冊帳戶</h1>
    <form action="register-check.php" method="post">
        <label for="Username">帳號</label>
        <input type="text" name="Username" id="Username" required="required" /><br />
        <label for="Password">密碼</label>
        <input type="password" name="Password1" id="Password1" required="required" /><br />
        <label for="Password">確認密碼</label>
        <input type="password" name="Password2" id="Password2" required="required" /><br />
        <input id="btn" type="submit" name="Submit" value="立即註冊">
    </form>
</body>
</html>
