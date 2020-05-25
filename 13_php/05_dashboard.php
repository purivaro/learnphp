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
					<?php 
						$navs = [
							["url"=>"/home", "title"=>"Home", "active"=>"active"],
							["url"=>"/info", "title"=>"Info", "active"=>""],
							["url"=>"/promotions", "title"=>"Promotions", "active"=>""],
							["url"=>"/teams", "title"=>"Teams", "active"=>""],
							["url"=>"/about", "title"=>"About", "active"=>""],
							["url"=>"/learnphp", "title"=>"PHP", "active"=>""],
						];
						foreach($navs as $nav) {
							echo "
								<li class='nav-item {$nav['active']}'>
									<a class='nav-link' href='{$nav['url']}'>{$nav['title']}</a>
								</li>
							";
						}
					?>
				</ul>
			</div>
		</nav>
		<div class="container-fluid">
			<div class="row mt-3">
				<div class="col-sm-3 col-md-2">
					<div class="list-group">
						<?php 
							$sidemenus = [
								["url"=>"/home", "title"=>"Home", "active"=>""],
								["url"=>"/info", "title"=>"Info", "active"=>"active"],
								["url"=>"/about", "title"=>"About", "active"=>""],
								["url"=>"/contact", "title"=>"Contact", "active"=>""],
							];
							foreach($sidemenus as $menu) {
								echo "
									<a href='{$menu['url']}' class='list-group-item list-group-item-action  {$menu['active']}'>{$menu['title']}</a>
								";
							}
						?>
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
										<?php
											$profile = [
												"name"=>"Phra Anavach Purivaro",
												"position"=>"Buddhist monk",
												"office"=>"International Buddhist Society (IBS)",
												"project"=>"Meditate Against Covid-19 Project 2020"
											];
										?>
										<div class="col-sm">
											<h3 class="my-4 fs-50 font-mali"><?php echo $profile['name']; ?></h3>
											<p><?php echo $profile['position']; ?></p>
											<p><?php echo $profile['office']; ?></p>
											<p><?php echo $profile['project']; ?></p>
										</div>
									</div>
									<div class="row mt-3">
										<?php
											$overviews = [
												["color"=>"danger", "amount"=>37, "title"=>"Age"],
												["color"=>"success", "amount"=>17, "title"=>"Episodes"],
												["color"=>"warning", "amount"=>39, "title"=>"Countries"],
												["color"=>"info", "amount"=>30, "title"=>"Days"],
											];
											foreach($overviews as $overview) {
												echo "
													<div class='col-md-6 col-lg bg-{$overview['color']} text-white'>
														<div class='text-center p-4'>
															<h2>{$overview['amount']}</h2>
															<p>{$overview['title']}</p>
														</div>
													</div>	
												";
											}
										?>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 mb-4">
							<div class="card h-100">
								<div class="card-body">
									<h3 class="my-4">Your goals this month</h3>
									<?php 
										$goals = [
											["title"=>"Writing", "color"=>"primary", "percent"=>75],
											["title"=>"Reading", "color"=>"success", "percent"=>50],
											["title"=>"Listening", "color"=>"danger", "percent"=>25],
											["title"=>"Speaking", "color"=>"warning", "percent"=>100],
										];
										foreach($goals as $goal) {
											echo "
												<h5 class='mt-3'>{$goal['title']}</h5>
												<div class='progress'>
													<div class='progress-bar bg-{$goal['color']} w-{$goal['percent']}'></div>
												</div>
											";
										}
									?>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div class="row">
										<?php
											$topics = [
												["img"=>"https://picsum.photos/id/257/400/300", "headline"=>"ท่องเที่ยวต่างประเทศ", "detail"=>"เมื่อไหร่จะหมดโควิด อยากไปเที่ยวแล้ว"],
												["img"=>"https://picsum.photos/id/237/400/300", "headline"=>"สัตว์โลกน่ารัก", "detail"=>"หมาน้อยตัวนี้ กำลังหิวโหย ช่วยเค้าด้วย"],
												["img"=>"https://picsum.photos/id/244/400/300", "headline"=>"ธรรมชาติแสนสงบ", "detail"=>"ภูเขา หรือ ทะเล ดีน้า?"],
												["img"=>"https://picsum.photos/id/260/400/300", "headline"=>"ป่าไม้ของเรา", "detail"=>"อยู่ป่าหมดทุกข์ พบสุขในใจ"],
												["img"=>"https://picsum.photos/id/270/400/300", "headline"=>"น่าอยู่มาก ๆ", "detail"=>"อยู่ป่าหมดทุกข์ พบสุขในใจ"],
												["img"=>"https://picsum.photos/id/271/400/300", "headline"=>"สงบใจ สงบจิต", "detail"=>"อยู่ป่าหมดทุกข์ พบสุขในใจ"],
											];
											foreach($topics as $topic) {
												echo "
													<div class='col-md-6 mb-4'>
														<div class='row'>
															<div class='col-md-3'>
																<img src='{$topic['img']}' class='w-100'>
															</div>
															<div class='col-md pt-sm-3 pt-md-0'>
																<h3>{$topic['headline']}</h3>
																<p>{$topic['detail']}</p>
															</div>
														</div>
													</div>												
												";
											}
										?>
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
												<?php 
													$foods = [
														["title"=>"ไก่ทอด", "price"=>200, "amount"=>3, "total"=>"600"],
														["title"=>"เป็ดย่าง", "price"=>700, "amount"=>2, "total"=>"1,400"],
														["title"=>"ส้มตำ", "price"=>300, "amount"=>5, "total"=>"1,500"],
													];
													$n = 0;
													foreach($foods as $food) {
														$n++;
														echo "
															<tr>
																<td>{$n}</td>
																<td>{$food['title']}</td>
																<td>{$food['price']}</td>
																<td>{$food['amount']}</td>
																<td>{$food['total']}</td>
															</tr>
														";
													}
												?>
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
								<?php
									$cards = [
										["img"=>"https://picsum.photos/id/267/400/300", "title"=>"Card A", "detail"=>"ปีนี้น้ำแห้งมาก ธรรมชาติกำลังน่าเป็นห่วง"],
										["img"=>"https://picsum.photos/id/269/400/300", "title"=>"Card B", "detail"=>"มนุษย์มีความเห็นแก่ตัว ทำลายสิ่งแวดล้อม"],
										["img"=>"https://picsum.photos/id/272/400/300", "title"=>"Card C", "detail"=>"ซึ่งเท่ากับเป็นการทำลายตนเอง"],
										["img"=>"https://picsum.photos/id/273/400/300", "title"=>"Card D", "detail"=>"หยุดเสียก่อนจะเกินแก้ไข"],
									];
									foreach($cards as $card) {
										echo "
											<div class='col-md-6 mb-4'>
												<div class='card'>
													<img src='{$card['img']}' class='card-img-top'>
													<div class='card-body'>
														<h5 class='card-title'>{$card['title']}</h5>
														<p class='card-text'>{$card['detail']}</p>
													</div>
												</div>
											</div>										
										";
									}
								?>
							</div>
						</div>
						<div class="col-sm">
							<div class="card">
								<div class="card-body">
									<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
										<div class="carousel-inner">
											<?php
												$carousels = [
													["active"=>"active", "img"=>"https://picsum.photos/id/279/400/300"],
													["active"=>"", "img"=>"https://picsum.photos/id/281/400/300"],
													["active"=>"", "img"=>"https://picsum.photos/id/282/400/300"],
													["active"=>"", "img"=>"https://picsum.photos/id/284/400/300"],
												];
												foreach($carousels as $carousel) {
													echo "
														<div class='carousel-item {$carousel['active']}'>
															<img src='{$carousel['img']}' class='d-block w-100'>
														</div>
													";
												}
											?>
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
								<?php
									$forms = [
										["label"=>"เมนู", "name"=>"item"],
										["label"=>"ราคา", "name"=>"price"],
										["label"=>"จำนวน", "name"=>"amount"],
										["label"=>"สี", "name"=>"color"],
									];
									foreach($forms as $form) {
										echo "
											<div class='form-group'>
												<label for=''>{$form['label']}</label>
												<input type='text' class='form-control' name='{$form['name']}'>
											</div>
										";
									}
								?>
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