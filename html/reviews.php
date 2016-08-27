<!DOCTYPE html>
<?php
	include "connextion.php";
?>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="icon" href="resources/icon.png">
	<!--
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	-->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script src="bootstrap/jquery/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
	
<body>
	<br><br>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel panel-heading">REVIEWS</div>
			<div class="panel-body">
				<div class="col-md-8 container-fluid">
					<!--DYNAMIC PANELS-->
						<?php
						$queryID = "SELECT * FROM loan WHERE loanid LIKE ".$_GET["loanid"];
						$result = $conn->query($queryID);
						$num = mysqli_num_rows($result);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '<h3>'.$row["name"].'</h3>';
							}
						}
						echo '<div class="well">';
						echo	'GRAPH';
						echo '</div>';
						
						$query = "SELECT * FROM reviews r
						INNER JOIN users u ON r.userID=u.userID
						WHERE loanid LIKE ".$_GET["loanid"];
						$result = $conn->query($query);
						$num = mysqli_num_rows($result);
						echo "<h4>".$num." Reviews</h4>";
						if ($result->num_rows > 0) {
							
							while($row = $result->fetch_assoc()) {
								$userID = $row["userID"];
								$review = $row["review"];
								$rating = $row["rating"];
								
								echo '<div class="panel panel-primary">';
								echo '<div class="panel panel-heading"><img src="showimage.php?id='.$userID.'" width="32" height="32"/> '.$row["username"].' &emsp;';
								for($x = 0;$x<$rating;$x++){
								echo '<span class="glyphicon glyphicon-star" aria-hidden="true"></span>';
								}
								echo '</div>';
								echo '<div class="panel-body">'.$review.'</div>';
								echo '</div>';
								
							}
						}
						
						
						?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>