<?php require '../controllers/pages-controller.php' ?>
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
	<?php require 'header.php' ?>
	<script src="./assets/script/scriptTheme.js"></script>
	<title>SO SPORT - <?= $preferences[$_GET['sujet'] - 1] ?></title>
</head>

<body>

	
	<h1 class="display-5 textCOLOR text-center my-3 fw-bold">Actu <?= $preferences[$_GET['sujet'] - 1] ?? '' ?></h1>

	<div class="row d-flex justify-content-center m-0 p-0">
		<hr class="line">
	</div>
	

	<div class="container g-3">
		<div class="row">
	<?php $i=0;$delay = 200; foreach ($xml->channel->item as $key => $itm) {
        $sport = $xmlSport;
        $link = $itm->link;
        $title = $itm->title;
        $descstring = $itm->description;
        $descArray = explode('<br /><br />', $descstring);
        $desc = $descArray[0];
        $descCardResized = ResizeDesc($desc);
        $img = $itm->enclosure['url'];
        $time = date('d/m/Y H:i',strtotime($itm->pubDate.'+2')); ?>
		
		<div class="col-md-4 my-3">
			<div data-aos="fade-right" data-aos-delay="<?= ($i <= 4) ? $delay : '' ?>" class="card cardBG p-0 shadowCards mincardHeight" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-4 position-relative">
						<div class="<?= $sport ?>Square"></div>
						<img src="<?= $img ?>"class="cardImg" alt="...">
					</div>
					<div class="col-8">
						<div class="card-body p-1">
						<h5 class="card-title cardTitle mx-0 mb-1"><a href="<?= $link ?>" class="text-reset text-decoration-none"><?= $title ?></a></h5>
						<p class="card-text cardDesc m-0" data-bs-toggle="modal" data-bs-target="#Modal<?= $i ?>"><?= $descCardResized ?> <span class="more-info" data-bs-toggle="modal" data-bs-target="#Modal<?= $i ?>"> Plus d'infos</span></p>
						<p class="card-text cardDate text-end"><small class="text-muted"><i class="bi bi-clock me-1 mt-2"></i> <?= $time ?></small></p>
						</div>
					</div>
				</div>
			</div>
		</div>
			<!-- Modal -->
			<div class="modal fade" id="Modal<?= $i ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content modalBG modalColor">
						<img src="<?= $img ?>" class="img-fluid rounded-top" alt="...">
						<div class="modal-header">
							<h5 class="modal-title modalTitle" id="exampleModalLabel"><?= $title ?></h5>
						</div>
						<div class="modal-body modalDesc">
							<preview>Description de l'article :</preview><br><?= $desc ?>
							<p class="modalDate align-self-bottom text-end mt-4 mb-0"><small class="text-muted"><i class="bi bi-clock me-1 mt-2"></i><?= $time ?></small></p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-color-pink borderRadiusBtn" data-bs-dismiss="modal">Fermer</button>
							<button type="button" class="btn btn-color-green borderRadiusBtn"><a href="<?= $link ?>" class="text-reset text-decoration-none">Aller à l'article</a></button>
						</div>
					</div>
				</div>
			</div>
    <?php $i++;$delay += 100;} ?>
		</div>
	</div>

	<?php require 'footer.php' ?>

	<div id="scroll_to_top" class="d-none d-md-block">
		<a href="#top"><img src="/assets/img/up-arrow.svg" alt="ReturnTop" /></a>
	</div>

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