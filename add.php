<html>
<head>
<meta charset="utf-8">
  <title>Insert Information</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body background="bgadd.png">
<div class="alert alert-info">
    <strong><center><h3>Insert Information</h3>
</center>
</strong> 
  </div>
<?php
session_start();

$host = "localhost";
$username ="it58160024";
$password = "it58160024";
$db = "it58160024";
$connect = new mysqli($host, $username, $password, $db);
$connect->query("set names utf8");
if($_POST['topic']){
  $topic = addslashes($_POST['topic']);
  $information  = addslashes($_POST['information']);
  $date = date("Y-m-d");
  if($_POST['topic']==null||$_POST['information']==null){
    echo"<center><img src=U2.png></div>";
    echo "<meta http-equiv='refresh'content='1;URL=index.php'>";
  }else{
     $sql = "INSERT INTO Notes(topic,information ,date)
        VALUES('$topic','$information','$date')";
if ($conn->query($sql)) {
    echo"<center><div class = 'alert alert-success'>INSERT A SUCCESS</div>";

    echo "<meta http-equiv='refresh'content='1;URL=index.php'>";
    }
}
} else {
echo'
<center>
<form name="form1" method="post" action="add.php"> 
<table border=0>
<tr><td><br></td><tr>
<tr>
<td>Title :</td>
<td>&nbsp</td>
<td><input name="topic" type="text" id="topic" class="form-control"></td>
</tr>
<tr>
<td>Story :</td>
<td>&nbsp</td>
<td><textarea ROWS="7" name="information"
 type="text" id="information" class="form-control"></textarea> </td>
</tr>
<tr><td colspan=3 align=center><br>
<input class="btn btn-info" type="submit" name="Submit" value="Add">
&nbsp&nbsp&nbsp
<a href="index.php" style="text-decoration: none;"><input class="btn btn-warning" type=button value="Cancel"></a>
</td></tr>
</table>
</form>';
}
?>
</body>
</html>