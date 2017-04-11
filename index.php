 <html>
<head>
    <title>My Notes</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
   </head>
 <style type="text/css">
div.
 </style>
<body>
<div data-role="page" id="page_home" >
<?php 
    $host = "localhost";
    $username ="it58160024";
    $password ="it58160024";
    $database = "it58160024";
    $conn = mysqli_connect($host,$username,$password,$database);
    $conn -> query("set names utf8"); 
    echo ' <div data-role="header" >
        <h1>My Notes</h1>
        <a href="NewNote.php"  class="ui-btn-right" >+</a>
     </div><!-- /header -->
    ';
       $sql = "SELECT * FROM Notes GROUP BY date ORDER BY date DESC  "; 
       $result = $conn->query($sql);

    while($row = $result->fetch_object()){ 
      ?>

 <div data-role="content">
        <ul data-role="listview" data-ajax="false" data-inset="true" data-theme="d">
            <li data-role="list-divider"><center><?php echo $row->date ?></center></li>

            <?php 
        $sql = "SELECT * FROM Notes WHERE date ='".$row->date. "' ORDER BY id DESC "; 
        $connect -> query("set names utf8"); 
        $result2 = $conn->query($sql);
        while($row = $result2->fetch_object()) {
        ?> 

       <li><a href ="Main.php?id=<?php echo $row->id ?>" >
       <h2><?php echo $row->topic ?></h2><p><?php echo"<br>"?>
       <?php echo $row->information?></p> </a>
       <a href="edit.php?id=<?php echo $row->id ?>"></a>
       </li>
       <?php } ?>
                
         </ul>
    </div><!-- /content -->
    <?php } ?>     
</body>
</html>