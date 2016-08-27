
	<!--<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--VALUES STATUS TYPE RANGE-->
<br>
<div class="container">
	<div class="panel panel-default">
			<div class="panel panel-heading">SEARCH RESULTS</div>
			<div class="panel-body">
				<?php
					include "localconn.php";
					
					$status = $_GET["status"];
					$type = $_GET["type"];
					$range = $_GET["range"];
					$table = "";
					if($type=="savings"){
						$table = "savings";
					}else if($type=="loan"){
						$table = "loan";
					}else if($type=="credit"){
						$table = "credit";
					}
					
					$query = "SELECT b.name AS 'bank', a.loanID, a.name, a.rqmntsbasic FROM ".$table." a INNER JOIN bank b ON a.bankID=b.bankID WHERE a.rqmntsbasic LIKE '%".$status."%'";
					$result = $conn->query($query);
					$num = mysqli_num_rows($result);
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) {
							$col = $table."ID";
							echo '<div class="container-fluid">';
							echo '<h3><a href="reviews.php?'.$table.'id='.$row[$col].'">'.$row["name"].'</a></h3>';
							echo '<p>'.$row["bank"].'</p>';
							echo '</div>';
						}
					}
				?>
			</div>
			</div>
	</div>
</div>