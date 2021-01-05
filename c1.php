
<html>
<head>
   <script> 
function getParam ( sname )
{
 var params = location.search.substr(location.search.indexOf("?")+1);
 var sval =  params.replace("sv=", "");
 return sval;
}
var sv = getParam("sv");
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=11" />
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no" id="viewport" name="viewport">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cbplayer@latest/dist/CBPlayer.min.css" />
    <style type="text/css">
        body,html{width:100%;height:100%;background:#000;padding:0;margin:0;overflow-x:hidden;overflow-y:hidden}
        *{margin:0;border:0;padding:0;text-decoration:none}
        #video{position:inherit}
    </style>
</head>
<body style="background:#000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" oncontextmenu=window.event.returnValue=false>
<div id="video"></div>
<script src="https://cdn.jsdelivr.net/npm/cbplayer@latest"></script>
<script>
    var url = '<?php echo($_REQUEST['url']);?>';
    var dp = new CBPlayer({
        container: document.getElementById('video'),
        autoplay: true,
        hotkey: true,  // ????????????,???????
        video: {
            url: sv,
            // pic: 'loading_wap.gif',
        },
    });
    dp.on('fullscreen', function () {
        if (/Android|webOS|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            screen.orientation.lock('landscape');
        }
    });
</script>
</body>
</html>
