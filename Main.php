<html>
<head>
<title>View Notes</title>
</head>
 <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

<body>
<?php
$host = "localhost";
   $userName = "it58160024";
   $userPassword = "it58160024";
   $db = "it58160024";

   $connect = mysqli_connect($host,$userName,$userPassword,$db);
   $connect -> query("set names utf8");    
   if(isset($_GET["id"])){
     $id = $_GET["id"];
   }
   $sql = "SELECT * FROM Notes WHERE id = '".$id."'";
   $result = $conn->query($sql);
   $row = $result->fetch_object();
?>
<div data-role="page" id="page_view">
<div data-role="header" >
    <h1>View Notes</h1>
    <a data-rel="back" data-role="button"  data-icon="back">Back</a>
 </div>
 <div class="ui-content"> 
 <input type="hidden" name="id" value="<?php echo $row->id ?>">  
      <h2>Topic : <?php echo $row->topic?></h2> 
    <h3>Information : </h3> <p><?php echo $row->information?></p> 
  </div>
</form>
</body>
</html>



