<html class="ui-mobile"><head><base href="http://angsila.cs.buu.ac.th/~58160024/887371/miniprj2/edit.php">
    <title>Edit</title>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body class="ui-mobile-viewport ui-overlay-a">
    <div data-role="page" id="pageone" data-url="pageone" tabindex="0" class="ui-page ui-page-theme-a">
      <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
        <h2 class="ui-title" role="heading" aria-level="1">My Note</h2>
        <a href="add.php" data-icon="plus" class="ui-btn-right ui-link ui-btn ui-icon-plus ui-btn-icon-left ui-shadow ui-corner-all" data-role="button" role="button">&nbsp;Add</a>
      </div>

      

<div class="ui-loader ui-corner-all ui-body-a ui-loader-default"><span class="ui-icon-loading"></span><h1>loading</h1></div><div data-role="page" data-url="/~58160024/887371/miniprj2/edit.php" data-external-page="true" tabindex="0" class="ui-page ui-page-theme-a ui-page-active" style="min-height: 575px;">
    <div data-role="header" role="banner" class="ui-header ui-bar-inherit">
        <a data-rel="back" data-role="button" data-icon="carat-l" class="ui-link ui-btn-left ui-btn ui-icon-carat-l ui-btn-icon-left ui-shadow ui-corner-all" role="button">Back</a>
        <h2 class="ui-title" role="heading" aria-level="1">Edit Note</h2>
        <a href="control.php?id=9&amp;delete=1" data-icon="delete" class="ui-btn-right ui-link ui-btn ui-icon-delete ui-btn-icon-left ui-shadow ui-corner-all" data-role="button" onclick="return confirm('Note will be deleted')" role="button">&nbsp;Delete</a>
    </div>

    <script>
        $('#submit').on('click', function(event){
            var valid = true,
            errorMessage = "";

            if($('#title').val() == ''){
                errorMessage = "Please enter title \n";
                valid = false;
            }
            if($('#content').val() == ''){
                errorMessage += "Please enter content \n";
                valid = false;
            }
            if(!valid && errorMessage.length > 0){
                alert(errorMessage);
                event.preventDefault();
            }
        })
    </script>
</div></body></html>