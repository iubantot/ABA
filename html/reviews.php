<!DOCTYPE html>
<?php
	include "localconn.php";
	include "lib_config.php";
?>
<html>

	
<body>
	<br><br>
	<div class="container">
		<div class="panel panel-default">
			<div class="panel panel-heading">REVIEWS</div>
			<div class="panel-body">
				<div class="col-md-8 container-fluid">
					<!--DYNAMIC PANELS-->
						<?php
						$re="";
							if (isset($_GET["loanid"])){
								$queryID = "SELECT * FROM loan WHERE loanID LIKE ".$_GET["loanid"];
								$re="loan";
							}else if(isset($_GET["creditid"])){
								$queryID = "SELECT * FROM credit WHERE creditID LIKE ".$_GET["creditid"];
								$re="credit";
							}else if(isset($_GET["savingsid"])){
								$queryID = "SELECT * FROM savings WHERE savingsID LIKE ".$_GET["savingsid"];
								$re="savings";
							}
						$result = $conn->query($queryID);
						$num = mysqli_num_rows($result);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '<h3>'.$row["name"].'</h3>';
							}
						}else{
							echo '<h3>No reviews provided.</h3>';
						}
						echo '<div class="well">';
						echo	'GRAPH';
						echo '</div>';
						
						$query = "SELECT * FROM reviews r
						INNER JOIN users u ON r.userID=u.userID
						WHERE ".$re."id LIKE ".$_GET["".$re."id"];
						$result = $conn->query($query);
						$num = mysqli_num_rows($result);
						echo "<h4>".$num." Reviews</h4>";
						if ($result->num_rows > 0) {
							
							while($row = $result->fetch_assoc()) {
								$userID = $row["userID"];
								$review = $row["review"];
								$rating = $row["ratings"];
								
								echo '<div class="panel panel-primary">';
								echo '<div class="panel panel-heading"><img src="html/showimage.php?id='.$userID.'" width="32" height="32"/> '.$row["username"].' &emsp;';
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