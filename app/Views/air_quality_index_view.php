<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Afifhrz App - Air Quality Index</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1 text-center"><br>Afifhrz App - Air Quality Index</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 card border-white">
			<form>
				<div class="form-row">
					<div class="col">
					<label for="location" class="col-form-label">Location</label>
					</div>
					<div class="col-8">
					<input type="text" class="form-control" placeholder="Ex:Jakarta" id="location">
					</div>
					<div class="col">
					<a href="#" class="btn btn-primary btn-block" onclick=f_action()>Get Air Quality Index</a>
					</div>
				</div>
				</form>
			</div>
            <div class="col-md-12 my-2 card" id="show">
				<div class="card-body text-center">
					<h4 id="result_city"></h4>
					<h5 id="result_pm" class="ml-3 mr-3"></h5>
					<p id="result_advice" class="ml-3 mr-3" ></p>
				</div>
			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Afifhrz App</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('js/air_quality_index_script.js') ?>"></script>

</body>

</html>