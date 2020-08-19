<nav class="navbar navbar-expand-md navbar-dark bg-d">
	<a class="navbar-brand" href="#">Puri</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav w-100">
			<li class="nav-item active">
				<a class="nav-link" href="#">Member</a>
			</li>
			<?php if($_SESSION['role']=='admin'): ?>
			<li class="nav-item">
				<a class="nav-link" href="#">Activity</a>
			</li>
			<?php endif; ?>
			<li class="nav-item dropdown ml-auto">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo "{$_SESSION['name']} ({$_SESSION['role']})";?>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="/learnphp/13_php/auth/logout.php">Logout</a>
				</div>
			</li>
		</ul>
	</div>
</nav>