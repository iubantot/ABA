
<?php
	include "connextion.php";
	include "lib_config.php";
?>



<body>
<center>
<div>
						<?php
						$queryID = "SELECT * FROM rewards";
						$result = $conn->query($queryID);
						$num = mysqli_num_rows($result);
						if ($result->num_rows > 0) {
							while($row = $result->fetch_assoc()) {
								echo '<img src="http://placehold.it/350x150">';
								echo '<h1>'.$row["name"].'</h1>';
								echo '<h3>'.$row["description"].'</h3>';
							}
						}
						
						
						?>
</div>			
</center>	
</body>