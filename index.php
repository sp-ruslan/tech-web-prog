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
		<div class="d-flex flex-column flex-md-row align-items-center mb-4 border-bottom p-3 shadow">
			<a href="/index.php" class="d-flex align-items-center text-dark text-decoration-none">				
				<span class="fs-4">Технологии Веб-программирования</span>
			</a>

			<nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
				<a class="me-3 py-2 text-dark text-decoration-none" href="/index.php">Главная</a>
				<a class="me-3 py-2 text-dark text-decoration-none" href="#">Контакты</a>				
			</nav>
				<a class="btn btn-outline-primary" href="#">Войти</a>	
		</div>	
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
		<footer class="container pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
			  <div class="col-12 col-md">
				<img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
				<small class="d-block mb-3 text-muted">© 2017–2022</small>
			  </div>
			  <div class="col-6 col-md">
				<h5>Features</h5>
				<ul class="list-unstyled text-small">
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
				</ul>
			  </div>
			  <div class="col-6 col-md">
				<h5>Resources</h5>
				<ul class="list-unstyled text-small">
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
				</ul>
			  </div>
			  <div class="col-6 col-md">
				<h5 href = "">О сайте</h5>
				<ul class="list-unstyled text-small">
				  <li class="mb-1"><a class="link-secondary text-decoration-none" href="/about.php">Информация</a></li>				 
				</ul>
		</div>
	</div>
</footer>
	</body>

</html>

