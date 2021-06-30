<?php require '../controllers/parameters-controller.php' ?>

<!DOCTYPE html>
<html lang="en">

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
						<a class="nav-link active" aria-current="page" href="sujet.html">Sport1</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="sujet.html">Sport2</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="sujet.html">Sport3</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="parametre.html">Paramètres</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<form action="parametre.html" method="post" class="d-flex flex-column align-items-center">
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
		<div class="mb-4">
			<input type="checkbox" class="form-check-input" id="rugby" name="5" value="Rugby">
			<label for="rugby">Rugby</label>
		</div>
		<div>
			<input type="submit" value="Valider" class="btn btn-primary">
		</div>
	</form>

	<p class="text-center text-danger"><?= $err_msg ?? '' ?></p>


    </H1>
<button onclick="document.documentElement.classList.toggle('dark-mode-activated')">cliquez sur ce bouton&nbsp;!</button>


<div id="scroll_to_top">
    <a href="#top"><img src="/assets/img/up-arrow.svg" alt="ReturnTop"/></a>
</div>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
</body>

</html>