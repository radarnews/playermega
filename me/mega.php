<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-BR">
<head>
<title>MEGA</title>
<link rel="shortcut icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA9CAYAAAAd1W/BAAAACXBIWXMAAA7DAAAOwwHHb6hkAAAAIGNIUk0AAHolAACAgwAA+f8AAIDoAABSCAABFVgAADqXAAAXb9daH5AAAAKGSURBVHja7NpLaxNRFAfwfIGqSZPMTOZ902SaNE3GryO4E9y5UsSFuNRNRcGN+KBUEUVFVKQqWLWCRBeaInRh8d1KoVE/wt/VyECdYW6Ted2exX89c37knjvn3hQAFHZzCgRAAARAAARAAARAAARAAAQwch41avjlsn9Z79q4bFUhPMBFs4o/++uBGboMVy0JQgLcYHJo8f5s9GyckIsQCiBq8f68aekQAuDzrIWdAHh5MFVDrgFGKd7fH87pFexaAC9fZi0IB/Cja3ND9BPuD7EAbLkMzx0NR6r7cJPJWOvw94rrtozcAqx2zG0v/7SpYidNM5cAK20j8MUXGzX87PEtjU8x9od4AGaM0Bc+Jhex5KjcEI8bKoQA8HJUKuLVtJbqskgVwMtpdRLLDh/ElssgDICXOb2MQdtI9LM6UwBeLhgVboj7UwqEAfByyaziG8fH1Ps2/3MzDQCgcKA0gXlLwnpEiNt1vl9C5gH8uVtXxr5L5ArAy5KjYuiyQICzehlCAwAofJgxx3LOkFuAfksPBHjSVMUGOFUr4XtIU1ywJTEBDpX34F5dwe+Q9S9kEzw4OYE7dSXS8LTWscQCuGJJ+Nq1YhuUMguwYEtY7ZixT4mZAzivV7DCOQc8HOF4PTMAc3oZb0O2tnGs90wCnFRKeD2tp3YokhrAcbmIfkvHZo9xFX7NlrJ/IjQIGUsPV/Zi2dGwwXke+MLRkJtD0XcBAM+aKtd8P86jr8QAhi7DGW37NPaRc0vjneoycz1+i/3/Roen8MVGcrfGid3BRSl80DYSKzxTAJs9lnjhiQMEbXfzKf93KNGH+W+JX8a0rdH/BAmAAAiAAAiAAAiAAAggWv4OAI9sgX7ix1myAAAAAElFTkSuQmCC"/>
<meta charset="UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="video-js/video-js.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="video-js/src/videojs.logobrand.css">

<script type="text/javascript" src="video-js/video.js"></script>
<style type="text/css">*{margin:0;padding:0}#video{position:absolute;width:100%!important;height:100%!important}.btn{background:#CCC;color:#FFF;display:inline-block;border-radius:4px;box-shadow:inset 0 1px 0 rgba(255,255,255,0.2);font-family:Arial,sans-serif;line-height:2.5em;padding:0 3em;text-decoration:none;}.btn:hover{box-shadow:inset 0 1px 1px rgba(255,255,255,0.2),inset 0 1.5em 1em rgba(255,255,255,0.3);}.btn:active{box-shadow:inset 0 1px 1px rgba(255,255,255,0.2),inset 0 1.5em 1em rgba(0,0,0,0.3);}.green.btn{background:linear-gradient(#07c607,#00ff00);text-shadow:1px 1px 1px #00ff00;}.red.btn{background:linear-gradient(#D60A0A,#B20808);text-shadow:1px 1px 1px #B20808;}.roxo.btn{background:linear-gradient(#6304cc,#7205e9);text-shadow:1px 1px 1px #7205e9;}.blue.btn{background:linear-gradient(#11A1D6,#0E86B2);text-shadow:1px 1px 1px #0E86B2;}.small.btn{line-height:1.75em;padding:0 1.5em;}</style>
</head>
<body>
<center>
<video id='video' class='video-js vjs-default-skin vjs-big-play-centered vjs-controls-enabled' controls data-setup='{ "techOrder": ["html5"], "controls": true, "autoplay": false, "customControlsOnMobile": true }'>
<?php  
echo '<source src="http://nerdecuador.com/19/me/mega/m.php?id='.$_GET['id'].'" type="video/mp4" />'
?>
</video>
</center>
<script  type="text/javascript" src="video-js/src/videojs.logobrand.js"></script>
<script type='text/javascript'>
// save a reference to the video element
video = document.querySelector('video'),
// save a reference to the video.js player for that element
player = videojs(video);
// initialize the plugin with some custom options:
player.logobrand({
//height: "32px",
//width: "32px",
image: "",
destination: ""
});
</script>
</body>
</html>