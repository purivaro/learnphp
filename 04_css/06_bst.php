<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bootstrap Basic</title>
	<link rel="stylesheet" href="/learnphp/lib/bootstrap-4.4.1-dist/css/bootstrap.min.css">
</head>
<body>
	<section class="min-vh-100 bg-dark pt-3">
		<h1 class="border border-primary text-success bg-danger d-block p-3 text-right">Hello Bootstrap</h1>
	</section>

	<section class="min-vh-100 bg-light">
		<div class="container pt-5">
			<div class="row">
				<div class="col-4 bg-dark text-white"><h2>Col-4</h2></div>
				<div class="col-4"><h2>Col-4</h2></div>
				<div class="col-4 bg-dark text-white"><h2>Col-4</h2></div>
			</div>
			<div class="row mt-5">
				<div class="col-6 bg-success"><h2>Col-6</h2></div>
				<div class="col-4 bg-primary"><h2>Col-4</h2></div>
				<div class="col bg-warning"><h2>Col</h2></div>
			</div>
			<div class="row mt-5">
				<div class="col-8 bg-info">
					<h2>Col-8</h2>
					<div class="row">
						<div class="col bg-warning"><h2>Col-6</h2></div>
						<div class="col bg-danger"><h2>Col-6</h2></div>
					</div>
				</div>
				<div class="col-4 bg-success"><h2>Col-4</h2></div>
			</div>
			<div class="row mt-5">
				<div class="col-sm-6 col-md-3 col-lg-8 col-xl-2 bg-success"><h2>col-sm-6 col-md-3 col-lg-8 col-xl-2</h2></div>
				<div class="col-sm-6 col-md-9 col-lg-4 col-xl-10 bg-primary"><h2>col-sm-6 col-md-9 col-lg-4 col-xl-10</h2></div>
			</div>
		</div>
	</section>



	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>