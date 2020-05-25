<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard</title>
	<link rel="stylesheet" href="/learnphp/theme/css/bootstrap-theme.css">
	<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>
<body class="font-mali fs-20">
	<section class="bg-light min-vh-100">
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
			<a class="navbar-brand" href="#">Puri</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/info">Info</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="/promotions">Promotions</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="/teams">Teams</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link" href="/about">About</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-3 col-md-2">
					<div class="list-group">
						<a href="/home" class="list-group-item list-group-item-action active">
							Home
						</a>
						<a href="/info" class="list-group-item list-group-item-action">Info</a>
						<a href="/about" class="list-group-item list-group-item-action">About</a>
						<a href="/contact" class="list-group-item list-group-item-action">Contact</a>
						<a href="/sample" class="list-group-item list-group-item-action">Sample</a>
					</div>
				</div>
				<div class="col">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
						</ol>
					</nav>
					<div class="row">
						<div class="col-md-8 mb-4">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<div class="col-sm-4">
											<img src="/learnphp/04_css/img/myavatar.png" class="w-100 rounded-circle">
										</div>
										<div class="col-sm">
											<h3 class="my-4 fs-50 font-mali">Phra Anavach Purivaro</h3>
											<p>Buddhist monk</p>
											<p>International Buddhist Society (IBS)</p>
											<p>Meditate Against Covid-19 Project</p>
										</div>
									</div>
									<div class="row mt-3">
										<div class="col-md-6 col-lg bg-success text-white">
											<div class="text-center p-4">
												<h2>37</h2>
												<p>Age</p>
											</div>
										</div>
										<div class="col-md-6 col-lg bg-danger text-white">
											<div class="text-center p-4">
												<h2>17</h2>
												<p>Episodes</p>
											</div>
										</div>
										<div class="col-md-6 col-lg bg-warning text-white">
											<div class="text-center p-4">
												<h2>39</h2>
												<p>Countries</p>
											</div>
										</div>
										<div class="col-md-6 col-lg bg-info text-white">
											<div class="text-center p-4">
												<h2>30</h2>
												<p>Days</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4">
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
										<div class="col-md-6 mb-4">
											<div class="row">
												<div class="col-md-3">
													<img src="https://picsum.photos/id/237/400/300" class="w-100">
												</div>
												<div class="col-md pt-sm-3 pt-md-0">
													<h3>สัตว์โลกน่ารัก</h3>
													<p>หมาน้อยตัวนี้ กำลังหิวโหย ช่วยเค้าด้วย</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="row">
												<div class="col-md-3">
													<img src="https://picsum.photos/id/257/400/300" class="w-100">
												</div>
												<div class="col-md pt-sm-3 pt-md-0">
													<h3>ท่องเที่ยวต่างประเทศ</h3>
													<p>เมื่อไหร่จะหมดโควิด อยากไปเที่ยวแล้ว</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="row">
												<div class="col-md-3">
													<img src="https://picsum.photos/id/244/400/300" class="w-100">
												</div>
												<div class="col-md pt-sm-3 pt-md-0">
													<h3>ธรรมชาติแสนสงบ</h3>
													<p>ภูเขา หรือ ทะเล ดีน้า?</p>
												</div>
											</div>
										</div>
										<div class="col-md-6 mb-4">
											<div class="row">
												<div class="col-md-3">
													<img src="https://picsum.photos/id/260/400/300" class="w-100">
												</div>
												<div class="col-md pt-sm-3 pt-md-0">
													<h3>ป่าไม้ของเรา</h3>
													<p>อยู่ป่าหมดทุกข์ พบสุขในใจ</p>
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
									<h4>รายการสั่งอาหาร</h4>
									<div class="d-flex">
										<button type="button" class="btn btn-success mr-2" data-toggle="modal" data-target="#foodModal">
											+ เพิ่ม
										</button>
										<div class="dropdown">
											<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												อื่น ๆ
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
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>#</th>
													<th>เมนู</th>
													<th>ราคา</th>
													<th>จำนวน</th>
													<th>รวม</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>ไก่ทอด</td>
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
												<tr>
													<td>3</td>
													<td>ส้มตำ</td>
													<td>300</td>
													<td>5</td>
													<td>1,500</td>
												</tr>
											</tbody>
										</table>
									</div>
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
							<div class="row">
								<div class="col-md-6 mb-4">
									<div class="card">
										<img src="https://picsum.photos/id/267/400/300" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Card A</h5>
											<p class="card-text">ปีนี้น้ำแห้งมาก ธรรมชาติกำลังน่าเป็นห่วง</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="card">
										<img src="https://picsum.photos/id/269/400/300" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Card B</h5>
											<p class="card-text">มนุษย์มีความเห็นแก่ตัว ทำลายสิ่งแวดล้อม</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="card">
										<img src="https://picsum.photos/id/272/400/300" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Card C</h5>
											<p class="card-text">ซึ่งเท่ากับเป็นการทำลายตนเอง</p>
										</div>
									</div>
								</div>
								<div class="col-md-6 mb-4">
									<div class="card">
										<img src="https://picsum.photos/id/273/400/300" class="card-img-top">
										<div class="card-body">
											<h5 class="card-title">Card D</h5>
											<p class="card-text">หยุดเสียก่อนจะเกินแก้ไข</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<div class="carousel-item active">
												<img src="https://picsum.photos/id/270/400/300" class="d-block w-100">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/271/400/300" class="d-block w-100">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/272/400/300" class="d-block w-100">
											</div>
											<div class="carousel-item">
												<img src="https://picsum.photos/id/274/400/300" class="d-block w-100">
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
									<h3 class="my-3">Bootstrap Carousel (SlideShow)</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deleniti officia expedita, ea similique incidunt doloremque. Dolor ullam suscipit ipsum sint quas voluptatibus nisi. Nisi sequi laudantium molestias</p>
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
	<div class="modal fade" id="foodModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<form action="#" method="get">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">เพิ่มรายการอาหาร</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="">เมนู</label>
									<input type="text" class="form-control" name="item">
								</div>
								<div class="form-group">
									<label for="">ราคา</label>
									<input type="text" class="form-control" name="price">
								</div>
								<div class="form-group">
									<label for="">จำนวน</label>
									<input type="text" class="form-control" name="amount">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">บันทึก</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>