<?php require '../controllers/parameters-controller.php' ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="./assets/style/style.css" rel="stylesheet">
	<title>Préférences</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="../accueil.html">Sport Actu</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="sport-1.html"><?= $preferences[0] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="sport-2.html"><?= $preferences[1] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="sport-3.html"><?= $preferences[2] ?></a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="parametre.html">Paramètres</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<form action="parametre.html" method="post" class="d-flex flex-column align-items-center mb-3">
		<label class="mt-5 mb-3">Vos catégories :</label>
		<div class="mb-2 form-check">
			<input type="checkbox" class="form-check-input" id="basket" name="1" value="Basket-ball">
			<label for="basket" class="form-check-label">Basket-ball</label>
		</div>
		<div class="mb-2">
			<input type="checkbox" class="form-check-input" id="foot" name="2" value="Football">
			<label for="foot">Football</label>
		</div>
		<div class="mb-2">
			<input type="checkbox" class="form-check-input" id="hand" name="3" value="Handball">
			<label for="hand">Handball</label>
		</div>
		<div class="mb-2">
			<input type="checkbox" class="form-check-input" id="tennis" name="4" value="Tennis">
			<label for="tennis">Tennis</label>
		</div>
		<div class="mb-5">
			<input type="checkbox" class="form-check-input" id="rugby" name="5" value="Rugby">
			<label for="rugby">Rugby</label>
		</div>

		<p>Nombre d'articles :</p>

		<div class="d-flex mb-4">
			<div>
				<input class="form-check-input" type="radio" name="maxArticle" id="maxArticle" value="6">
				<label class="form-check-label" for="maxArticle">
					6
				</label>
			</div>
			<div class="mx-3">
				<input class="form-check-input" type="radio" name="maxArticle" id="maxArticle" value="9" checked>
				<label class="form-check-label" for="maxArticle">
					9
				</label>
			</div>
			<div>
				<input class="form-check-input" type="radio" name="maxArticle" id="maxArticle" value="12">
				<label class="form-check-label" for="maxArticle">
					12
				</label>
			</div>
		</div>

		<div>
			<input type="submit" value="Appliquer" class="btn btn-primary">
		</div>
	</form>

	<p class="text-center text-danger"><?= $err_msg ?? '' ?></p>
	<p class="text-center text-success"><?= $success_msg ?? '' ?></p>

	<button onclick="document.documentElement.classList.toggle('dark-mode-activated')">cliquez sur ce bouton&nbsp;!</button>

	<footer class="footer fixed-bottom d-flex flex-column align-items-center">
		<div class="row">
			<div class="col-4">
				<a href="sport-1.html"><?= $preferences[0] ?></a>
			</div>
			<div class="col-4">
				<a href="sport-2.html"><?= $preferences[1] ?></a>
			</div>
			<div class="col-4">
				<a href="sport-3.html"><?= $preferences[2] ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-6">
				<a href="accueil.html">Accueil</a>
			</div>
			<div class="col-6">
				<a href="parametre.html">Paramètres</a>
			</div>
		</div>
	</footer>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
</body>

</html>