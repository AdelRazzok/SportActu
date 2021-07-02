<?php require '../controllers/pages-controller.php' ?>
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
	<title>Sport Actu - <?= $preferences[$_GET['sujet'] - 1] ?></title>
</head>

<body>
	<?php require 'header.php' ?>

	<h1 class="display-5 text-center my-3"><?= $preferences[$_GET['sujet'] - 1] ?? '' ?></h1>

	<hr>

	<?php foreach ($xml->channel->item as $itm) {
        $sport = $xmlSport;
        $link = $itm->link;
        $title = $itm->title;
        $descstring = $itm->description;
        $descArray = explode('<br /><br />', $descstring);
        $desc = $descArray[0];
        $img = $itm->enclosure['url'];
        $time = date('d/m/Y H:i',strtotime($itm->pubDate.'+2')); ?>

		<div data-aos="fade-right" class="card mb-3" style="max-width: 540px;">
			<div class="row g-0">
				<div class="col-4">
					<img src="<?= $img ?>"class="img-fluid rounded-start" alt="...">
				</div>
				<div class="col-8">
					<div class="card-body">
					<h5 class="card-title"><?= $title ?></h5>
					<p class="card-text"><?= $desc . ' <span class="more-info" data-bs-toggle="modal" data-bs-target="#exampleModal">Plus d\'infos</span>' ?></p>
					<p class="card-text"><small class="text-muted"><i class="bi bi-clock"></i> <?= $time ?></small></p>
					</div>
				</div>
			</div>
		</div>

    <?php } ?>

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