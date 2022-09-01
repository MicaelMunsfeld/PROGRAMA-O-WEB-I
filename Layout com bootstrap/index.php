<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bootstrap Layout</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="text-center p-5">
				<h2>Aula 1 de Bootstrap</h2>
			</div>
			<div class="col-4 text-center p-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec auctor libero. Quisque molestie, libero ut ultricies fringilla, diam justo tincidunt urna, non rutrum dui ipsum id sem. Aliquam nulla libero, ornare et lorem sed, tincidunt lobortis libero. In lacinia egestas nisl eu vestibulum. </p>	
			</div>
			<div class="col-4 text-center p-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec auctor libero. Quisque molestie, libero ut ultricies fringilla, diam justo tincidunt urna, non rutrum dui ipsum id sem. Aliquam nulla libero, ornare et lorem sed, tincidunt lobortis libero. In lacinia egestas nisl eu vestibulum. </p>	
			</div>
			<div class="col-4 text-center p-5">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec auctor libero. Quisque molestie, libero ut ultricies fringilla, diam justo tincidunt urna, non rutrum dui ipsum id sem. Aliquam nulla libero, ornare et lorem sed, tincidunt lobortis libero. In lacinia egestas nisl eu vestibulum. </p>	
			</div>
			<!-- Botão do Modal -->
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Aula01">
				Ver mais
			</button>
			<div id="gtaSlider" class="carousel slide pb-5" data-bs-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img src="https://leiturinha.com.br/blog/wp-content/uploads/2019/09/jogo-gta.jpg" class="d-block w-100" alt="Carro de GTA 5">
					</div>
					<div class="carousel-item">
						<img src="https://leiturinha.com.br/blog/wp-content/uploads/2019/09/jogo-gta.jpg" class="d-block w-100" alt="Carro de GTA 5">
					</div>
					<div class="carousel-item">
						<img src="https://leiturinha.com.br/blog/wp-content/uploads/2019/09/jogo-gta.jpg" class="d-block w-100" alt="Carro de GTA 5">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#gtaSlider" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Voltar</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#gtaSlider" data-bs-slide="next">
					<span class="carousel-control-next-icon"></span>
					<span class="visually-hidden">Próximo</span>
				</button>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="Aula01" tabindex="-1" aria-labelledby="Aula01" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="Aula01">Aula 01 de Bootstrap</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
				</div>
				<div class="modal-body">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec auctor libero. Quisque molestie, libero ut ultricies fringilla, diam justo tincidunt urna, non rutrum dui ipsum id sem. Aliquam nulla libero, ornare et lorem sed, tincidunt lobortis libero. In lacinia egestas nisl eu vestibulum. 
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>