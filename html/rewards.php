
<?php
	include "connextion.php";
	include "lib_config.php";
?>



<body>
<center>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
						<?php
						$queryID = "SELECT * FROM rewards";
						$result = $conn->query($queryID);
						$num = mysqli_num_rows($result);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								
								echo '<div class="jumbotron"><div class="row">';
								echo '<div class="col-sm-5"> <img src="http://placehold.it/350x150"> </div>';
								echo '<h1>'.$row["name"].'</h1>';
								echo '<h3>'.$row["description"].'</h3>';
								echo '</div></div><br>';
							}
						}
						
						
						?>
</div>			
</center>	
</body>