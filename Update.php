<html>
<head>
<title>Update</title>
</head>
  <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">  
<body>
<?php
	$host = "localhost";
	$userName = "it58160024";
	$userPassword = "it58160024";
	$db = "it58160024";
	$connect = mysqli_connect($host,$userName,$userPassword,$db);
	$connect->query("set names utf8");
	$sql = "UPDATE Notes SET 
			topic = '".addslashes($_POST["topic"])."' ,
			information = '".addslashes($_POST["information"])."' 
			WHERE id = '".$_POST["id"]."' ";

	$query = mysqli_query($connect,$sql);
	if($query) {
	 echo "<br><center>Update successfully";
	 echo "<meta http-equiv='refresh'content='1;URL=index.php'>";
	}
	mysqli_close($connect);
?>
</body>
</html>