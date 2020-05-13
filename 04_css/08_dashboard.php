<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="/learnphp/lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
	<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<section class="bg-light min-vh-100">
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<a class="navbar-brand" href="#">Puri</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Info</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Promotions
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Set A</a>
							<a class="dropdown-item" href="#">Set B</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Extra</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-3 col-md-2">
					<div class="list-group">
						<a href="#" class="list-group-item list-group-item-action active">
							Home
						</a>
						<a href="#" class="list-group-item list-group-item-action">Info</a>
						<a href="#" class="list-group-item list-group-item-action">About</a>
						<a href="#" class="list-group-item list-group-item-action">Contact</a>
					</div>
				</div>
				<div class="col">
					<div class="alert alert-primary" role="alert">
						A simple primary alert—check it out!
					</div>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Library</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-sm-8">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-4">
											<img src="img/myavatar.png" class="w-100 rounded-circle">
										</div>
										<div class="col-sm">
											<h3 class="my-4">Phra Anavach Purivaro</h3>
											<p>Buddhist monk</p>
											<p>International Buddhist Society (IBS)</p>
											<p>Meditate Against Covid-19 Project</p>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-sm bg-success text-white">
											<div class="text-center p-4">
												<h2>37</h2>
												<p>Age</p>
											</div>
										</div>
										<div class="col-sm bg-danger text-white">
											<div class="text-center p-4">
												<h2>4</h2>
												<p>Episodes</p>
											</div>
										</div>
										<div class="col-sm bg-warning text-white">
											<div class="text-center p-4">
												<h2>30</h2>
												<p>Countries</p>
											</div>
										</div>
										<div class="col-sm bg-info text-white">
											<div class="text-center p-4">
												<h2>30</h2>
												<p>Days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="card h-100">
								<div class="card-body">
									<h3 class="my-4">Your goals this month</h3>
									<h5 class="mt-3">Writing</h5>
									<div class="progress">
										<div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">Reading</h5>
									<div class="progress">
										<div class="progress-bar bg-success w-50" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">Listening</h5>
									<div class="progress">
										<div class="progress-bar bg-danger w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
									<h5 class="mt-3">Speaking</h5>
									<div class="progress">
										<div class="progress-bar bg-warning w-25" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm">
											<div class="row">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/237/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/257/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
										</div>
										<div class="col-sm">
											<div class="row">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/244/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
											<div class="row mt-3">
												<div class="col-sm-3">
													<img src="https://picsum.photos/id/260/400/300" class="w-100">
												</div>
												<div class="col-sm">
													<h3>Lorem, ipsum dolor.</h3>
													<p>Lorem ipsum dolor sit amet consectetur.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col">
							<div class="card">
								<div class="card-header d-flex justify-content-between align-items-center">
									<h4>Items Manager</h4>
									<div class="d-flex">
										<a href="#" class="btn btn-success mr-2">+ Add</a>
										<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModal">
											Modal
										</button>
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												More
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<a class="dropdown-item" href="#">Action</a>
												<a class="dropdown-item" href="#">Another action</a>
												<a class="dropdown-item" href="#">Something else here</a>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body">
									<p>DataTable</p>
									<table class="table">
										<thead>
											<tr>
												<th>#</th>
												<th>Items</th>
												<th>Price</th>
												<th>Quantity</th>
												<th>Total</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>ไก่ทอด <span class="badge badge-success">New</span></td>
												<td>200</td>
												<td>3</td>
												<td>600</td>
											</tr>
											<tr>
												<td>2</td>
												<td>เป็ดย่าง</td>
												<td>600</td>
												<td>2</td>
												<td>1,200</td>
											</tr>
										</tbody>
									</table>
									<nav aria-label="Page navigation example">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="#">Previous</a></li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">Next</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<img src="https://picsum.photos/id/267/400/300" class="w-100">
									<h3 class="my-3">Lorem ipsum dolor sit amet.</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti officia expedita, ea similique incidunt doloremque. Dolor ullam suscipit ipsum sint quas voluptatibus nisi. Nisi sequi laudantium molestias libero dignissimos mollitia hic, illum omnis ullam suscipit deleniti aperiam labore veritatis alias accusamus deserunt officiis in natus, architecto consectetur fuga incidunt?</p>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="https://picsum.photos/id/270/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/271/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/272/400/300" class="d-block w-100" alt="...">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/274/400/300" class="d-block w-100" alt="...">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>									
									<h3 class="my-3">Lorem ipsum dolor sit amet.</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti officia expedita, ea similique incidunt doloremque. Dolor ullam suscipit ipsum sint quas voluptatibus nisi. Nisi sequi laudantium molestias libero dignissimos mollitia hic, illum omnis ullam suscipit deleniti aperiam labore veritatis alias accusamus deserunt officiis in natus, architecto consectetur fuga incidunt?</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row mt-5 bg-primary text-white p-3">
				<div class="col-sm-6">
					<h3>Bootstrap Sample</h3>
					<p>Copyright 2020</p>
				</div>
				<div class="col-sm-6">
					<h3>Designed by Purivaro</h3>
					<h2><i class='bx bxl-facebook-circle'></i> <i class='bx bxl-google' ></i> <i class='bx bxl-twitter' ></i></h2>
				</div>
			</div>
		</div>	
	</section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal content</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>