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
						echo '<div class="apply_div"><a data-toggle="modal" href="#myModal2"><button class="btn btn-primary btn-lg"> Apply now </button></a></div>';
						echo "<h4>".$num." Reviews</h4>";
						if ($result->num_rows > 0) {
							
							while($row = $result->fetch_assoc()) {
								$userID = $row["userID"];
								$review = $row["review"];
								$rating = $row["ratings"];
								
								echo '<div class="panel panel-primary">';
								echo '<div class="panel panel-heading"><img src="html/showimage.php?id='.$userID.'" class="img-circle" width="32" height="32"/> '.$row["username"].' &emsp;';
								for($x = 0;$x<$rating;$x++){
								echo '<a class="stars_icons"><span class="glyphicon glyphicon-star" aria-hidden="true"></span></a>';
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
	
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Appication Form</h4>
      </div>
		<div class="modal-body">
			<div class="modal-body">
				  <div class="row">
					<div class="col-md-6">
						<div class="form-group">
						  <label for="fname">First Name:</label>
						  <input type="text" class="form-control" id="fname">
						</div>
						<div class="form-group">
						  <label for="usr">Address:</label>
						  <input type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
						  <label for="usr">Contact #:</label>
						  <input type="number" class="form-control" id="usr">
						</div>
						 <div class="form-group ">
						  <label  for="date">
						   Birthdate:
						  </label>
						  
						   <div class="input-group">
							<div class="input-group-addon">
							 <i class="fa fa-calendar">
							 </i>
							</div>
							<input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text"/>
						   </div>
						  
						 </div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
						  <label for="lname">Last Name:</label>
						  <input type="text" class="form-control" id="lname">
						</div>
						<div class="form-group">
						  <label for="lname">E-mail:</label>
						  <input type="text" class="form-control" id="lname">
						</div>

						
						
					</div>
				  </div>
			</div>
		</div>
      <div class="modal-footer">
	    <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>';

</body>
</html>