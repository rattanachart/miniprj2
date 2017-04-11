<html>
<head>
<title>Edit Notes</title>
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
     if(isset($_GET["id"])) {
        $id = $_GET["id"];
   }
   $sql = "SELECT * FROM Notes WHERE id = '".$id."' ";
   $result = $connect->query($sql);
?>
<html>
<head>
<meta charset="utf-8">
<title>Edit Notes</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>
<script>
    $(document).ready(function(){ 
            $("#page_view").on("swipeleft",function(event){  
              $.mobile.changePage( "index.php", { transition: "slide"} ); });
        });
    </script>
</head>
<body>
<?php while($row = $result->fetch_object()) { ?> 
    <div id="page_editNote" data-role="page">
        <div data-role="header">
            <h2>Edit Notes</h2>
            <a id="btn_deleteNote" href="Delete.php?id=<?php echo $row->id ?>" class="ui-btn-right" data-role="button" data-icon="delete" onclick="return confirm(' Are you sure if you want to delete')" >Delete</a>
        </div>
        <form action="Update.php" method="post" name="form1" onSubmit="JavaScript:return fncSubmit();" >
        <div class="ui-content">
        
    <input type="hidden" name="id" value="<?php echo $row->id ?>">    
    <input type="text" name="topic"  value="<?php echo $row->topic ?>">
    <textarea type="text" name="information" ><?php echo $row->information ?></textarea> 
    <?php } ?>
            <input type="submit" id="btn_editNote" name="edit" data-role="button" value="Edit" >
            <a href="index.php" style="text-decoration: none;"><input class="btn btn-warning" type=button value="Cancel"></a>
    </td></tr>
        </div>
             <script>
function fncSubmit() {
  if(document.form1.topic.value == "" || document.form1.information.value == "") {
    alert('กรุณาป้อนข้อมูลให้เรียบร้อย');
    document.form1.topic.focus(),document.form1.information.focus();
    return false;
  } 
  document.form1.edit();
}
</script>
    
    </form>
    </div>
</body>
</html>