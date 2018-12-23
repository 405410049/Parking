<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<!-- Bootstrap-->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>停車場管理系統</title>
	<style>
	.content{
		width:250px;
		margin-right:auto;font-weight:bold;
		font-size:18px;
	}
	.box{
		width:360px;padding:20px;margin:10px;background-color:#eeeeee;
		display:inline-block;vertical-align:top;border-radius:8px;
	}
	</style>
</head>
<body>
	<div class="container-fluid" style="background-color:#003344;">
  	<div class="row">
    	<div class="col-auto">
    <?php
        $username = $_POST['Username'];
        $password = $_POST['Password'];
    ?>
    	<form action="index.php" method="post">
        	<input type="hidden" name="Username" value="<?=$username?>" />
        	<input type="hidden" name="Password" value="<?=$password?>" />
      		<!--  <input type="submit" name="Submit" value="Back" />-->
			<input class="btn btn-primary" type="submit" name="Submit" value="Back">
		</form>
    	</div>
    	<div class="col-auto" style="font-size:30px;color:white">
			停車場管理系統
    	</div>
	</div>
	</div>
   <!-- <form action="index.php" method="post">
        <input type="hidden" name="Username" value="<?=$username?>" />
        <input type="hidden" name="Password" value="<?=$password?>" />
        <input type="submit" name="Submit" value="Back" />
	</form>-->
	<div class="content">
  	<div class="box">
    <form action="add.php" method="post">
		<p>*為必須輸入</p>
    	<label for="Name">*名稱</label>
    	<input type="text" name="Name" id="Name" required="required" /><br />
    	<label for="Address" style="margin-top:10px;">*地址</label>
    	<input type="text" name="Address" id="Address" required="required" /><br />
    	<label for="Charge" style="margin-top:10px;">收費方式</label>
    	<input type="text" name="Charge" id="Charge" /><br />
    	<label for="Total" style="margin-top:10px;">總車位數</label>
    	<input type="text" name="Total" id="Total" /><br />
        <input type="hidden" name="Username" value="<?=$username?>" />
        <input type="hidden" name="Password" value="<?=$password?>" />
        <input class="btn btn-primary" type="submit" name="Submit" value="確認新增"/>
	</form>
	</div>
	</div>
		<!--Bootstap-->
		 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>
