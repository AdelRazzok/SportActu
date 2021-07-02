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
	<?php require 'header.php' ?>

	<form action="parametre.html" method="post" class="d-flex flex-column align-items-center mb-3 text-white">
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

	<?php require 'footer.php' ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script src="../assets/script/script.js"></script>
</body>

</html>