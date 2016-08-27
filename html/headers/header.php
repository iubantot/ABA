style{

.navbar-collapse.collapse {
  display: block!important;
}

.navbar-nav>li, .navbar-nav {
  float: left !important;
}

.navbar-nav.navbar-right:last-child {
  margin-right: -15px !important;
}

.navbar-right {
  float: right!important;
}
	
}

<div id="container">
	<nav class="navbar navbar-default navbar-fixed-top" style="margin-top:55px;">
	  <div class="container-fluid">
		<!-- Logo -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
		  </div>
	<div class="collapse navbar-collapse" id="Navbar">

		<!-- Navbar Right -->
		<ul class="nav navbar-nav navbar-right">
			<li>names</li>
		<!--End of Navbar Right-->
		</div>
		</div>
	  </nav>
</div>
  
  <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Registration Form</h4>
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
						  <label for="usr">Username:</label>
						  <input type="text" class="form-control" id="usr">
						</div>
						<div class="form-group">
						  <label for="usr">Password:</label>
						  <input type="password" class="form-control" id="usr">
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
						<div class="form-group">
						  <label for="lname">Confirm Password:</label>
						  <input type="password" class="form-control" id="lname">
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
  </div>
</div>


