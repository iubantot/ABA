<html>
<head>
<?php
session_start();
	include "html/db_config.php";
	include "html/lib_config.php";
?>
</head>
<body>
<?php
	include "html/headers/header.php";
	include "html/carousel.php";
?>



</body>

	<script>
		$(window).resize(function(){
			var ele = $('#logo');
			if (window.innerWidth<768) {
				ele.hide();
			}
			else {
				ele.show();
			}
		});
	</script>
</html>