<html class="ui-mobile"><head><base href="http://angsila.cs.buu.ac.th/~58160433/887371/miniprj2/Note.php?id=9">
    <title>New Note</title>
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
        <a href="NewNote.php" data-icon="plus" class="ui-btn-right ui-link ui-btn ui-icon-plus ui-btn-icon-left ui-shadow ui-corner-all" data-role="button" role="button">&nbsp;Add</a>
      </div>      
    <script>
        $(document).ready(function(){ 
            $("#swiper").on("swiperight",function(event){ $.mobile.changePage("index.php",{transition: "slide",reverse: "true" }); })
        });
    </script>
</div></body></html>