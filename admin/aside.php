<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div class="navbar-header">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand" href="addCategory.php">Ambicare Admin Panel</a>
			<a class="navbar-brand hidden" href="./">Ambicare Driver Panel</a>
		</div>

		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="#"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
				</li>
				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Ambulance</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-puzzle-piece"></i><a href="addAmbulance.php">Add Ambulance</a></li>
						<li><i class="fa fa-id-badge"></i><a href="showAllAmbulance.php">Show All Ambulance</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Drivers</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-puzzle-piece"></i><a href="addDriver.php">Add Driver</a></li>
						<li><i class="fa fa-id-badge"></i><a href="showAlldriver.php">Show All Drivers</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Clients</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-id-badge"></i><a href="showAllClient.php">Show All Clients</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Bookings</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-id-badge"></i><a href="showAllBookings.php">Show All Bookings</a></li>
					</ul>
				</li>
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside><!-- /#left-panel -->