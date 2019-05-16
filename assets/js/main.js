
//Api OpenWeatherMap - Previsão do Tempo
	$(function(){

		var apikey = '0462ea4be254a1933320f8d582bb47d5';
		var baseUrl = 'http://api.openweathermap.org/data/2.5/weather?APPID=' + apikey + '&units=metric&lang=pt';
		console.log(baseUrl);

		$('#weather button').click(function(e){
			e.preventDefault();
			
			var city = $('#city');
			var cityValue = city.val();			

			var params = {
				url: baseUrl + '&q=' + cityValue,
				method: 'Get'
			};

			$.ajax(params).done(function(response){
				console.log(response);

				//Show Card
				$('.card').removeClass('d-none');

				//Error
				city.removeClass('is-invalid');
				$('.campo-invalido').slideUp();
				$('.card').show();

				//Titulo
				$('.card-title').text(response.name);

				//Description
				$('.description-weather').text(response.weather[0].description);

				//Temperatura
				var temp = Math.round(response.main.temp) + 'º';
				// var tempMax = Math.round(response.main.temp_max) + 'º';
				// var tempMin = Math.round(response.main.temp_min) + 'º';

				$('.temp-weather').text(temp);
				// $('.temp-max-weather').text(tempMax);
				// $('.temp-min-weather').text(tempMin);

				//Imagem do tempo
				var image = response.weather[0].icon;
				$('.image-weather').attr('src','http://openweathermap.org/img/w/' + image + '.png');
				$('.image-weather').attr('alt', response.name);

			})
			.fail(function(){
				$('.campo-invalido').slideDown();
				city.addClass('is-invalid');
				$('.card').hide();
				console.error('Error');
			});

		});

	});

