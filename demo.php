<!DOCTYPE html>
<html>
<head>
	<title>Title</title>
	<!-- Core Funcs -->
	<script src="https://cdn.rawgit.com/radarnews/playermega/master/jwplayer.js"></script>	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<!-- END Core Funcs -->
	<style>
		* {
		    margin: 0px;
		}
		html {
		    overflow: hidden;
		}
	</style>
</head>
<body>
    <link href="https://cdn.rawgit.com/radarnews/playermega/master/flat.css" rel="stylesheet" type="text/css"/>
	<div id="encrpyt">
		
	</div>
	<!-- Core Streaming -->
	<script>
			jwplayer.key = "O0rbeJxNgb0uLCCzJVb4yCHD46CBXw0uno5uUQ=="; 			

			var player = jwplayer('encrpyt');

			player.setup({
			  image: "",
			  sources: [ {
					file: "https://thiscord.com/api/!Es5HgS4Y!kZaj3wiXAnaAObaGjsuzoA1EdKY2QavDuYYCQACMdro",
					type: "mp4"
					}
			  ],
			  autostart: false,
			  skin: {
					    name: "tube",
					    url: "https://cdn.rawgit.com/radarnews/playermega/master/flat.css"
					  },      
			  playbackRateControls: [0.25, 0.5, 0.75, 1, 1.25, 1.5, 2],   
			  abouttext: "BunnyOlok", 
			  	 	  aboutlink: "",         
 
			  width: $(window).width(),
		      height: $(window).height()	          
			});



			$(document).ready(function() {
				$(window).resize(function(){
					jwplayer().resize($(window).width(),$(window).height())
				})
			})

	</script>
</body>
</html>