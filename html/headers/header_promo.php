<div id="container">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
		<!-- Logo -->
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
		  <a class="navbar-brand" href="../uhack/">
		  <!--Logo here -->
		  <img src="../ABA/img/logo.png" width="auto" height="100px">
		  </a>
		</div>
	<div class="collapse navbar-collapse" id="myNavbar">

		<!-- Navbar Right -->
		<ul class="nav navbar-nav navbar-right">
			<li><a href="/ABA"><i  aria-hidden="true"></i> Home</a></li>
			<li><a href="search.php"><i  aria-hidden="true"></i> Smart Search</a></li>
			<li><a href="news.php"><i  aria-hidden="true"></i> What's New</a></li>
			<li class="on"><a href="#"><i  aria-hidden="true"></i> Rewards</a></li>				
			
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users fa-fw" aria-hidden="true"></i> Sign in <span class="caret"></span></a>
				<ul id="login-dp" class="dropdown-menu">
					<li>
						 <div class="row">
								<div class="col-md-12">
									 <form class="form" role="form" method="post" action="modules/login.php" accept-charset="UTF-8" id="login-nav">
											
											<div class="form-group">
												<label for="name" class="cols-sm-2 control-label">Username</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>

														<input class="form-control" id="username" name="username" required="required" type="text" placeholder="Enter your Username"/>

													</div>
												</div>
											</div>
											
											<div class="form-group">
												<label for="password" class="cols-sm-2 control-label">Password</label>
												<div class="cols-sm-10">
													<div class="input-group">
														<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
													<input class="form-control" id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 

													</div>
												</div>
											</div>
											
											<div class="form-group">
												 <button type="submit" class="btn btn-primary btn-block" name="login" >Sign in</button>
							
											</div>
											<div class="checkbox">
												 <label>
												 <input type="checkbox"> Keep me logged-in
												 </label>
											</div>
									 </form>
								</div>
								<div class="bottom text-center">
									New here ? <a data-toggle="modal" href="#myModal">Register</a>
								</div>
						 </div>
					</li>
				</ul>
			</li>
		</ul>
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


