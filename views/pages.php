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
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="../index.php">Sport Actu</a>
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
					<h5 class="card-title fs-6"><?= $title ?></h5>
					<p class="card-text"><?= $desc ?></p>
					<p class="card-text"><small class="text-muted"><i class="bi bi-clock"></i> <?= $time ?></small></p>
					</div>
				</div>
			</div>
		</div>

    <?php } ?>

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
</body>

</html>