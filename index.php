<!DOCTYPE html>
<html>
<head>
	<title>Clover - Îmbracă-te inteligent</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
  	<meta charset="UTF-8">

  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
</head>
<body>
	<header>
		<div class="row" style="margin-top:100px">
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<div class="header-wrapper">
					<img class="main-logo" src="./img/logo_negru.png" >
					<p style="text-align: center"> Genereaza inteligent outfituri pentru bărbați și femei!</p>
					<p style="text-align: center"> Vei avea acces la mii de combinații de la magazinele tale preferate. </p>
					<form id="subscribe_form" class="subscribe-form" method="post">
						<input type="hidden" name="subscribe">
						<input name="email" type="email">
						<button type="submit">Abonează-te</button>
					</form>
				</div>
			</div>
			<div class="col-md-5">
				<img class="main-gif" src="./img/website.gif">
				<h3 class="gif-subtitle">Mii și mii de combinații generate cu creier!
				<img src="./img/bulb.png" style="width:40px">
				</h3>
				 
			</div>
			<div class="col-md-1"></div>
		</div>
	</header>
	<section class="steps">
		<hr>
		<div class="row" style="margin-top:50px;">
			<div class="col-md-4"> 
				<div class="informative-text">
					<div>
						<h2> Setează-ți preferințele!</h2>
						<p> Rochii verzi? Fuste roșii? Sau poate o culoare mai complicată, ce spui de turcoaz?
						 Fie că îți dorești blugi mărimea ta sau dacă te încadrezi într-un buget anume noi vom avea grijă ca
						 outfitul tău să conțină exact ceea ce îți dorești.
						 </p>
					 </div>
				 	<img src="./img/1.png">
				 </div>
			</div>
			<div class="col-md-4">
				<div class="informative-text">
					<div>
						<h2> Generează outfituri!</h2>
						<p> Dă un click și magia se va întâmpla. Algoritmii noștri se vor ocupa de ceea ce până mai ieri era bătaia ta de cap iar în doar
						câteva momente, propunerea noastră va fi la tine pe ecran. Nu este exact ceea ce ți-ai dorit? Nu-i nimic. Apasă din nou și din nou
						până ajungi la rezultatul căutat. </p>
				 	</div>
				 	<img src="./img/2.png">
				</div>
			</div>
			<div class="col-md-4"> 
				<div class="informative-text">
					<div>
						<h2> Cumpără! </h2>
						<p> Nu mai bate drumul până la magazin. Dai un click și te ducem direct la haina căutată. Cumpărăturile de haine nu au fost niciodată mai simple!</p>
				 	</div>
				 	<img src="./img/3.png">
				</div>
			</div>
		</div>
	</section>
	<section>
			<hr>
		<div class="row" style="margin-top:50px;">
			<div class="col-md-6 col-sm-12">
				<div class="contact-form-wrapper">
					<h1 class="contact-form-header" style="text-align: center">Contact Form</h1>
					<form id = "contact_form" class="contact-form">
						<label for="name">Nume : </label>
						<input id="name" name="name" type="text">
						<br><br>
						<label for="email2" >Email : </label>
						<input type="email" id="email2" name="email2">
						<br><br>
						<label for="content" style="vertical-align: middle">Mesaj : </label>
						<textarea type="text" id="content" name="content" rows="10"></textarea>
						<br><br>
						<button type="submit">Trimite</button>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="contact-info-wrapper">
					<h2 style="text-align: center">Contact info</h2>
					<div style="margin:auto; width:60%">
					<iframe src="https://www.google.com/maps/
					embed?pb=!1m14!1m12!1m3!1d86818.84040667994!2d27.51693045786506!3d47.15611595590017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sro!2sro!4v1483638812394" width="300" height="225" frameborder="0" style="margin-left:10%; width:80%;"></iframe>
					<br><br>
					<p style="text-align: center">Email : contact@clover.ro</p>
					<p style="text-align: center"><a href="#"><i class="fa fa-facebook-official" ></i> Facebook</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<hr>
		<div class="row">
			<div class="col-md-12"><div class="made-in">Made with <span class="glyphicon glyphicon-heart icon-inima"></span> in Iași</div></div>
		</div>
	</section>

	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>

	<script type="text/javascript">

	$(document).ready(function() {

	    $('#subscribe_form').submit(function(event) {
	        var formData = {
	            'email'        : $('input[name=email]').val(),
	            'subscribe'    : $('input[name=subscribe]').val()
	        };

	        $.ajax({
	            type        : 'POST', 
	            url         : 'subscribe.php', 
	            data        : formData
	        })
	            .done(function(data) {
	                console.log(data); 
	                if (data != 'Great job!')
	                	alert("There was a problem with your subscription!");
	                else
	                	alert("You have succesfully to Clover!");
	            });
	        event.preventDefault();
	    });

	});


	$(document).ready(function() {

	    $('#contact_form').submit(function(event) {
	        var formData = {
	            'email'		: $('input[name=email2]').val(),
	            'name'    	: $('input[name=name]').val(),
	            'content'   : $('textarea[name=content]').val()
	        };

	        $.ajax({
	            type        : 'POST', 
	            url         : 'subscribe.php', 
	            data        : formData
	        })
	            .done(function(data) {
	                console.log(data); 
	                if (data != 'Great job!')
	                	alert("There was a problem sending your message!");
	                else
	                	alert("Thank you for your message!");
	            });
	        event.preventDefault();
	    });

	});

	</script>
</body>
</html>