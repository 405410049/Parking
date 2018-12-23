<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	
	<!-- Bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>停車場管理系統</title>
	<style type="text/css">
	.head{
		background-color:#003344;color:white;font-weight:bold;font-size:30px;
		text-align:center;padding:10px;
	}
	.box{
		width:95%;
		padding:20px;
		margin-left:10px;
		margin-right:10px;
		background-color:#eeeeee;
		display:inline-block;
		vertical-align:top;
		border-radius:8px;
	}
	</style>
</head>
<body>
	<div class="head">
			停車場管理系統
	</div>
    <?php
        // ini_set("display_errors", "On");
        // error_reporting(E_ALL & ~E_NOTICE);
        $username = $_POST['Username'];
        $password = $_POST['Password'];

        $db = new mysqli('mysql.cs.ccu.edu.tw', 'wtc105u', 'rqXexGSzNw', 'wtc105u_parking');
        $db->query("set names utf8");

        $query = "SELECT Username, Password FROM Users WHERE Username = ? AND Password = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
            echo "<p>密碼錯誤</p>";
            echo "<a href=\"../login.php\">返回</a>";
            exit;
        }

        $query = "SELECT Name FROM Private WHERE Username = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($name);

		echo "<div class=\"box\">";
        echo "<form action=\"info.php\" method=\"post\">";
        echo "<input type=\"hidden\" name=\"Username\" value=\"".$username."\" />";
        echo "<input type=\"hidden\" name=\"Password\" value=\"".$password."\" />";
		echo "<div class=\"row\">";
		$cnt=1;
		while ($stmt->fetch())
		{
				echo "<input style=\"margin-left:10px;\" class=\"btn btn-info\" type=\"submit\" name=\"Name\" value=\"".$name."\" />";
				if($cnt%4==0)
						echo "</div><div class=\"row\" style=\"margin-top:10px;\">";
				$cnt++;
		}
		echo "</div>";
        echo "</form>";
		echo "</div>";
    ?>
    <p><form action="add_input.php" method="post">
        <input type="hidden" name="Username" value="<?=$username?>" />
        <input type="hidden" name="Password" value="<?=$password?>" />
        <input class="btn btn-primary" type="submit" name="Submit" value="新增停車場" />
	</form></p>
		<!--Bootstap-->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
