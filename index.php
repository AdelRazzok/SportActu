<?php require './controllers/index-controller.php' ?>
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
	<link href="./assets/style/style.css" rel="stylesheet">
	<title>Sport Actu</title>
</head>

<body>


	<?php 
if (isset($_COOKIE) && !empty($_COOKIE)) {

	require './views/header.php'; ?>

	<div id="carouselExampleCaptions" class="carousel slide mt-3 shadow" data-bs-ride="carousel" data-aos="fade-up">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?= $image1 ?? "#" ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption text-start carouselTitle">
					<a href="<?= $Link1 ?>" class="text-white"><h5 class="fs-6"><?= $Title1 ?? "" ?></h5></a>
					<p class="d-none d-md-block"><?= $Desc1 ?? "" ?></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= $image2 ?? "#" ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption text-start carouselTitle">
					<a href="<?= $Link2 ?>" class="text-white"><h5 class="fs-6"><?= $Title2 ?? "" ?></h5></a>
					<p class="d-none d-md-block"><?= $Desc2 ?? "" ?></p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="<?= $image3 ?? "#" ?>" class="d-block w-100" alt="...">
				<div class="carousel-caption text-start carouselTitle">
					<a href="<?= $Link3 ?>" class="text-white"><h5 class="fs-6"><?= $Title3 ?? "" ?></h5></a>
					<p class="d-none d-md-block"><?= $Desc3 ?? "" ?></p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
			data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="container g-3">
		<div class="row">
			<?php
			$delay = 500;
			for ($i=4; $i < 4+$maxArticle; $i++) {
				$sportCard = $articlesSorted[$i]['sport'];
				$linkCard = $articlesSorted[$i]['link'];
				$titleCard = $articlesSorted[$i]['title'];
				$descCard = $articlesSorted[$i]['desc'];
				$descCard = ResizeDesc($descCard);
				$imgCard = $articlesSorted[$i]['img'];
				$timeCard = date('d/m/Y H:i',strtotime($articlesSorted[$i]['time'])); ?>

				<div class="col-md-4 my-3">
					<div data-aos="fade-right" data-aos-delay="<?= ($i <= 7) ? $delay : '' ?>" class="card cardBG p-0" style="max-width: 540px;">
						<div class="row g-0">
							<div class="col-4 position-relative">
								<div class="<?= $sportCard ?>Square"></div>
								<img src="<?= $imgCard ?>" class="cardImg" alt="...">
							</div>
							<div class="col-8">
								<div class="card-body p-1">
									<h5 class="card-title cardTitle mx-0 mb-1"><?= $titleCard ?></h5>
									<p class="card-text cardDesc m-0"><?= $descCard . ' <span class="more-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Plus d\'infos</span>' ?></p>
									<p class="card-text cardDate text-end"><small class="text-muted"><i class="bi bi-clock me-1 mt-2"></i><?= $timeCard ?></small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $delay += 100; ?>
			<?php } ?>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>

	<div id="scroll_to_top" class="d-none d-md-block">
		<a href="#top"><img src="/assets/img/up-arrow.svg" alt="ReturnTop" /></a>
	</div>

	<?php require './views/footer.php' ?>

	<?php } else {?>
	<h1 class="text-center">Veuillez choisir vos 3 sports de préférence</h1>

	<form action="accueil.html" method="post" class="d-flex flex-column align-items-center">
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
			<input type="submit" value="Valider" class="btn btn-primary">
		</div>
	</form>

	<p class="text-center text-danger"><?= $err_msg ?? '' ?></p>

	<?php } ?>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script src="./assets/script/script.js"></script>
</body>

</html>