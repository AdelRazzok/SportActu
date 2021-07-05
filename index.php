<?php require './controllers/index-controller.php' ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link href="./assets/style/style-light.css" rel="stylesheet" id="theme-link">
	<?php require './views/header.php'; ?>
	<script src="./assets/script/scriptTheme.js"></script>
	<title>SO SPORT - Accueil</title>
</head>

<body>


	<?php 
if (isset($_COOKIE) && !empty($_COOKIE)) { ?>


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
			for ($i=4; $i < 5+$maxArticle; $i++) {
				$sportCard = $articlesSorted[$i]['sport'];
				$linkCard = $articlesSorted[$i]['link'];
				$titleCard = $articlesSorted[$i]['title'];
				$descCard = $articlesSorted[$i]['desc'];
				$descCardResized = ResizeDesc($descCard);
				$imgCard = $articlesSorted[$i]['img'];
				$timeCard = date('d/m/Y H:i',strtotime($articlesSorted[$i]['time']));?>

				<div class="col-md-4 my-3">
					<div data-aos="fade-right" data-aos-delay="<?= ($i <= 6) ? $delay : '' ?>" class="card cardBG p-0 shadowCards mincardHeight" style="max-width: 540px;">
						<div class="row g-0">
							<div class="col-4 position-relative">
								<div class="<?= $sportCard ?>Square"></div>
								<img src="<?= $imgCard ?>" class="cardImg" alt="...">
							</div>
							<div class="col-8">
								<div class="card-body p-1">
									<h5 class="card-title cardTitle mx-0 mb-1"><a href="<?= $linkCard ?>" class="text-reset text-decoration-none"><?= $titleCard ?></a></h5>
									<p class="card-text cardDesc m-0" data-bs-toggle="modal" data-bs-target="#Modal<?= $i ?>"><?= $descCardResized ?> <span class="more-info" data-bs-toggle="modal" data-bs-target="#Modal<?= $i ?>"> Plus d'infos</span></p>
									<p class="card-text cardDate text-end"><small class="text-muted"><i class="bi bi-clock me-1 mt-2"></i><?= $timeCard ?></small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php $delay += 100; ?>
				<!-- Modal -->
				<div class="modal fade" id="Modal<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content modalBG modalColor">
							<img src="<?= $imgCard ?>" class="img-fluid rounded-top" alt="...">
							<div class="modal-header">
								<h5 class="modal-title modalTitle" id="exampleModalLabel"><?= $titleCard ?></h5>
							</div>
							<div class="modal-body modalDesc">
								<preview>Description de l'article :</preview><br><?= $descCard ?>
								<p class="modalDate align-self-bottom text-end mt-4 mb-0"><small class="text-muted"><i class="bi bi-clock me-1 mt-2"></i><?= $timeCard ?></small></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-color-pink borderRadiusBtn" data-bs-dismiss="modal">Fermer</button>
								<button type="button" class="btn btn-color-green borderRadiusBtn"><a href="<?= $linkCard ?>" class="text-reset text-decoration-none">Aller à l'article</a></button>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>

	<div id="scroll_to_top" class="d-none d-md-block">
		<a href="#top"><img src="/assets/img/up-arrow.svg" alt="ReturnTop"></a>
	</div>

	<?php require './views/footer.php' ?>

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