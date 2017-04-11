 <html>
<head>
<title>Delete</title>
</head>
<body>
<?php
   $host = "localhost";
   $userName = "it58160024";
   $userPassword = "it58160024";
   $db = "it58160024";
   $connect = mysqli_connect($host,$userName,$userPassword,$db);
   $connect -> query("set names utf8");
   $strSQL = "DELETE FROM Notes ";
   $strSQL .="WHERE id = '".$_GET["id"]."' ";
   $objQuery = $conn->query($strSQL);
   if($objQuery){
      echo "<br><center>Delete Complete";
      echo "<meta http-equiv='refresh'content='1;URL=index.php'>";
}
else{
      echo "Error Delete [".$strSQL."]";
}
?>
</body>
</html>
            