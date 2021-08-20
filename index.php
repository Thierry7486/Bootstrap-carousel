<?php
$dir = './images';
$scan = scandir($dir);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mes poneys</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

</head>

<body>
	<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
		
				<?php
					foreach ($scan as $k => $v) {
						if ($v != "." && $v != "..") {					
					?> 
					<div class="carousel-item <?php if($k === 2){echo "active";} ?> data-bs-interval="4000">
					<img src="images/<?= $v ?>" class="d-block w-100" alt="poney">
			 		</div>			
    					<?php
							}
						}
					?>
			
		</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
		</div>

		<h2>autre manière de faire pour l'active! en ternaire!</h2>
		<div id="carouselExampleInterval2" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
		
				<?php
					foreach ($scan as $k => $v) {
						if ($v != "." && $v != "..") {
							
					?> 
					
					<div class="carousel-item <?php echo $k==2 ? "active" : ""; ?>" data-bs-interval="3000">
      					<img src="images/<?= $v ?>" class="d-block w-100" alt="poney">
    					</div>
    					<?php
							}
						}
					
					?>
			
		</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval2" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
		</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>

</html>