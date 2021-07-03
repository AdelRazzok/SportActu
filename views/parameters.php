<?php require '../controllers/parameters-controller.php' ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="./assets/style/style-light.css" rel="stylesheet" id="theme-link">
	<?php require 'header.php' ?>
	<script src="./assets/script/scriptTheme.js"></script>
	<title>Préférences</title>
</head>

<body>

	<div class="container mt-4 px-5">
		<div class="formBG p-3 shadowParam">
			<form action="parametre.html" method="post" class="d-flex flex-column align-items-center mb-3 textCOLOR">
				<label class="mb-4">Veuillez choisir 3 catégories :</label>
				<div class="row ps-3">
					<div class="col-6 mb-2">
						<input type="checkbox" class="form-check-input" id="basket" name="1" value="Basket-ball">
						<label for="basket" class="form-check-label">Basket-ball</label>
					</div>
					<div class="col-6 mb-2">
						<input type="checkbox" class="form-check-input" id="foot" name="2" value="Football">
						<label for="foot">Football</label>
					</div>
					<div class="col-6 mb-2">
						<input type="checkbox" class="form-check-input" id="hand" name="3" value="Handball">
						<label for="hand">Handball</label>
					</div>
					<div class="col-6 mb-2">
						<input type="checkbox" class="form-check-input" id="tennis" name="4" value="Tennis">
						<label for="tennis">Tennis</label>
					</div>
					<div class="col-6 mb-4">
						<input type="checkbox" class="form-check-input" id="rugby" name="5" value="Rugby">
						<label for="rugby">Rugby</label>
					</div>
				</div>

				<div class="row d-flex justify-content-center my-3 p-0">
					<hr class="lineparam">
				</div>
		
				<p>Nombre d'articles dans l'accueil :</p>
		
				<div class="d-flex mb-4">
					<div>
						<input class="form-check-input" type="radio" name="maxArticle" id="max6" value="6">
						<label class="form-check-label" for="max6">
							6
						</label>
					</div>
					<div class="mx-5">
						<input class="form-check-input" type="radio" name="maxArticle" id="max9" value="9" checked>
						<label class="form-check-label" for="max9">
							9
						</label>
					</div>
					<div>
						<input class="form-check-input" type="radio" name="maxArticle" id="max12" value="12">
						<label class="form-check-label" for="max12">
							12
						</label>
					</div>
				</div>
		
				<div>
					<input type="submit" value="Appliquer" class="btn btn-color-green borderRadiusBtn">
				</div>
			</form>
		
			<div <?= (isset($err_msg) || isset($success_msg)) ? 'data-aos="fade-down"' : 'class="d-none"' ?> class="formMsgBG pt-3 pb-2 px-1 fontSize">
				<p class="text-center err_msg"><?= $err_msg ?? '' ?></p>
				<p class="text-center success_msg"><?= $success_msg ?? '' ?></p>
			</div>
		</div>
	</div>

	<?php require 'footer.php' ?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script src="../assets/script/script.js"></script>
</body>

</html>