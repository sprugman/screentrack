<?php

$screens = glob("screens/*.png");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ScreenTrack</title>

	<!-- Bootstrap -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/st.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
  </head>
  <body>
	<div class="shots"></div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/underscore/underscore.js"></script>
	<script src="bower_components/momentjs/moment.js"></script>
	<script src="js/st.js"></script>
	<script>
		$(function(){
			ST.init(<?php echo json_encode($screens); ?>);
		})
	</script>
  </body>
</html>