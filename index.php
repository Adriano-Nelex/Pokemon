<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>PokeMaps</title>
    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />

    <script type="text/javascript" src="assets/js/main.js"></script>

  </head>

  <body>
		
        <form id="" name="tipo-email" value="contato" class="form-contato container"  method="post">
			<div class="formulario">
				<h2>E se os pokémons fossem reais,<br> em que lugares do mundo poderíamos encontrar cada tipo?</h2>
				<p>Entre com o nome da cidade e descubra qual pokémon poderia estar perto de você.</p>

	  			<div id="weather" class="row mb-5">
	  				<div class="col-4">
					  	<div class="form-group">
					    	<label for="city" class="cidade">Cidade:</label>
					    	<input type="text" class="form-control" id="city" placeholder="Digite uma Cidade">

					    	<div class="campo-invalido">Digite uma cidade válida.</div>
					  	</div>
					</div>
					<div class="col-8">
				  		<button type="submit" class="btn btn-primary">Pesquisar</button>
				  	</div>
			  	</div>

			  	<div class="card d-none">
			  		<div class="openweather">
						<div class="text-center"></div>
					  		<img class="image-weather" alt="" src="" width="50" height="50">
				  		<div class="card-body">
					    	<h3 class="card-title"></h3>
					    	<div class="card-text">
					    		<p class="description-weather"></p>
					    		<p>
					    			<strong>Temperatura:</strong> <span class="temp-weather"></span><br>
					    			<!-- <strong>Max:</strong> <span class="temp-max-weather"></span><br>
					    			<strong>Min:</strong> <span class="temp-min-weather"></span> -->
					    		</p>
					    	</div>
					  	</div>
					</div>

					<div class="pokeapi">
				    	<a href="pokeapi.html"><img src="https://upload.wikimedia.org/wikipedia/commons/9/98/International_Pok%C3%A9mon_logo.svg" alt="Pokemon Logo"></a>

					    <!-- <form action="" class="search">
					      	<input type="search" class="search-input">
					      	<button class="search-button">Search</button>
					    </form>

					    <section class="pokemon">
					    </section> -->
				  	</div>
				</div>

	        </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="assets/js/main.js"></script>

  </body>
</html>