<!DOCTYPE html>
<html>
<head>
	<title>Werit - Dress Smart!</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.png"/>
  	<meta charset="UTF-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/aos.css" />
  <link rel="stylesheet" type="text/css" href="./css/style2.css">

  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#"><img class="main-logo" src="./img/logo_negru.png" ></a>
	    </div>
	    <ul class="nav navbar-nav navbar-right nav-buttons">
	      <li><a href="https://www.facebook.com/weritro/"><i class="fa fa-facebook"></i></a></li>
	      <li id="contact-button"><a class="scroll-to-contact "><span class="glyphicon glyphicon-send"></span> Contact us</a></li>
	      <li id="demo-button"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Demo</a></li>
	    </ul>
	  </div>
	</nav>

	<section id="main-title">
		<div class="left-text" data-aos="fade-right" data-aos-duration="1500">
			<p class="statement"> Your very own Fashion Adviser </p>
			<p class="substatement"> Great outfits with only one press of a button. <br/> Wanna know more?</p>
			<a class="on-image-but scroll-to-contact">Contact Us! </a>
			<form id="subscribe_form" class="subscribe-form" method="post">
						<input type="hidden" name="subscribe">
						<input name="email" type="email">
						<button type="submit">Abonează-te</button>
					</form>
					<br>
		</div>
	</section>

	<section data-aos="fade-up" id="mission">
		<div class="row">
			<div class="col-md-6" style="margin-top:150px">
				<h3> <strong> Our Mission </strong></h3>
				<p style="text-align: center;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariator. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-6" data-aos="fade-left">
				<img style="width:100%" src="./img/mock.png"/>
			</div>
		</div>
	</section>

			<hr>

	<section data-aos="fade-up" id="Features">
		<h3> <strong> Beautifuly Simple </strong></h3>
		<p> doar un screenshot de pe alt site--->TO BE Changed </p>
		<img style="width:80%; margin: auto; display: block"  src="./img/example.png"/>
	</section>

	<hr>
	<section>
			<div class="contact-form-wrapper">
				<h1 class="contact-form-header" style="text-align: center">Contact us at <span style="color:#81d4ef; font-weight: bold">team@werit.ro</span>!</h1>
				<img class="my_icon" data-aos="flip-right" data-aos-duration="1500" src="./img/firework.png" style="position:absolute; right:0; top:-100px"/>
				<form method="post" id = "contact_form" class="contact-form">
					<div class="form-group">
						<label for="name">Nume : </label>
						<input class="form-control" id="name" name="name" type="text"/>
					</div>
					<div class="form-group">
						<label for="email2" >Email : </label>
						<input class="form-control" type="email" id="email2" name="email2">
					</div>
					<div class="form-group">
						<label for="content" style="vertical-align: middle">Mesaj : </label>
						<textarea class="form-control" type="text" id="content" name="content" rows="10"></textarea>
					</div>
					<button class="btn btn-default" type="submit">Trimite</button>
				</form>
			</div>
	</section>

	<section>
		<hr>
		<div class="row">
			<div class="col-md-12"><div class="made-in">Made with <span class="glyphicon glyphicon-heart icon-inima"></span> in Iași</div></div>
		</div>	</section>

	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/aos.js"></script>

	<script>
	    AOS.init();

	$(document).ready(function(){
	    $(".scroll-to-contact").click(function() {
		    $('html,body').animate({
		        scrollTop: $(".contact-form-wrapper").offset().top},
		        'slow');
		});

		$(".my_icon").click(function(){
			console.log("<3")
			$(this).addClass("jiggle");
		});
	});
	 </script>
</body>


	<script type="text/javascript">

	$(document).ready(function() {
        console.log("Subscribe")
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
	                	alert("You have succesfully subscribed to Werit!");
	            });
	        event.preventDefault();
	    });

	});


	$(document).ready(function() {
        console.log("Contact")
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
</html>