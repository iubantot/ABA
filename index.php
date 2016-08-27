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
	include "html/header.php";
	include "html/carousel.php";
?>
	<script>
		$('#home_bt').on('click', function() {
			$('#home_bt').document.body.style.backgroundColor = "#66ccff";
		});
	</script>
</body>

</html>