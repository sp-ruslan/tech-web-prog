<!DOCTYPE HTML>
<html lang = "ru">
	<head>
		<meta charset = "UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">		
		<link href="style/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">">
		<title>PHP</title>
	</head>
	<body>
		<?php require "blocks/header.php" ?>
		<div class="container">
			<h1>Статьи</h1>
			
			<div class="d-flex flex-wrap cntr">
			<?php
				for ($i=0; $i<5; $i++):
			?>				
					<div class="card rounded-3 shadow-sm m-3">
						<div class="card-header py-3">
							<h4 class="my-0 fw-normal">Заголовок</h4>
						</div>
						<div class="card-body">							
							<ul class="list-unstyled mt-3 mb-4">
							  <li>10 users included</li>
							  <li>2 GB of storage</li>
							  <li>Email support</li>
							  <li>Help center access</li>
							</ul>
							<button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
						</div>
					</div>
			
			<?php endfor; ?>
				
			</div>
		</div>
		
		<?php require "blocks/footer.php" ?>
	</body>

</html>

