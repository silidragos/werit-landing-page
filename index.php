<!DOCTYPE html>
<html>

<head>
	<title>Werit - Dress Smart!</title>
	<link rel="shortcut icon" type="image/png" href="./img/favicon.png" />
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./css/aos.css" />
	<link rel="stylesheet" type="text/css" href="./css/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="./css/style2.css">

	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
</head>

<body>
	<header class="werit-header">
		<img class="werit-header__logo" src="./img/logo_negru.png"></img>
		<div class="werit-header__actions">
			<a class="header-action" href="https://www.facebook.com/weritro/"><i class="fa fa-facebook"></i></a>
			<a class="header-action scroll-to-contact "><span class="glyphicon glyphicon-send"></span> Contact us</a>
			<!--<a class="header-action" href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Demo</a>-->
		</div>
	</header>

	<div class="werit__wip">
		Coming soon!
	</div>

	<section id="main-title">
		<div class="left-text" data-aos="fade-right" data-aos-duration="1500">

			<form method="post" class="subscribe_form" id="subscribe_form">
				<p class="statement"> Your very own Fashion Adviser </p>
				<p class="substatement"> Great outfits with only one press of a button. <br/> If you want us to keep you posted, subscribe now.</p>
				<input type="email" name="email" id="email-input" class="subscribe-input" placeholder="smartly_dressed@werit.ro"> 
				<button type="submit" class="on-image-but">Subscribe to Newsletter! </a></button>
			</form>
			<!-- <a class="on-image-but scroll-to-contact">Contact Us! </a> -->
		</div>
	</section>

	<section class="werit-mission" data-aos="fade-up" id="mission">
		<div class="werit-mission__text">
			<h3 class="mission-header"> Our Mission </h3>
			<p style="text-align: justify; margin-left: 30px;">
				We believe that dressing well is hugely important in today's society. Fashion is everywhere around us but fashionable advice
				is hard to come by. We are going to change this by building a <b>smart online fashion advisor</b>. 
			</p>
		</div>
		<div class="werit-mission__image" data-aos="fade-left">
			<img src="./img/mock.png" />
		</div>
	</section>

	<section id="werit-quote">
	<p>By combining clothes from your favorite retailers with brainy algorithms, we make sure that your wishes for a great look turn into a <b>truly great outfit</b>.</p>
	</section>

	<hr>

	<section data-aos="fade-up" id="features">
		<h3>Beautifuly Simple </h3>
		<div class="werit-architecture-wrapper">
			<div class="werit-architecture" style="text-align: center;">
				<div class="werit-architecture__infograph">
					<img class="infograph__image" src="img/logo_negru.png" />
				</div>
				<div class="werit-architecture__path"></div>
				<div class="werit-architecture__content">
					<div class="werit-architecture__infograph infograph-left" data-aos="fade-left">
						<img class="infograph__image" src="img/info-1.png" />
						<div class="infograph__text">
							<p class="infograph__title"> Preferences </p>
							<p> Have total control over the outfits we recommend you.</p>
						</div>
						<div class="werit-architecture__path"></div>
					</div>
					<div class="werit-architecture__infograph infograph-right" data-aos="fade-right">
						<div class="werit-architecture__path"></div>
							<img class="infograph__image" src="img/info-3.png" />
							<div class="infograph__text">
								<p class="infograph__title"> Unlimited outfits! </p>
								<p> Generate new outfits with only one press of a button. </p>
							</div>
						</div>
					</div>
					<div data-aos="flip-right" data-aos-duration="1500"  class="werit-architecture__infograph">
						<img class="infograph__image infograph__image-main" src="img/info-2.png" />
						<br/>
						<p class="infograph__title"> Buy the product you love! </p>	
					</div>
				</div>
			</div>
		</div>
		<!--<img style="width:80%; margin: auto; display: block"  src="./img/example.png"/>-->
	</section>

	<hr>
	<section id="contact-section">
		<div class="contact-form-wrapper">
			<h1 class="contact-form-header" style="text-align: center">Contact us at <span style="color:#81d4ef; font-weight: bold">team@werit.ro</span>!</h1>
			<img class="my_icon" src="./img/firework.png" style="position:absolute; right:0; top:-100px"
			/>
			<form method="post" id="contact_form" class="contact-form">
				<div class="form-group">
					<label for="name">Name : </label>
					<input class="form-control" id="name" name="name" type="text" />
				</div>
				<div class="form-group">
					<label for="email2">Email : </label>
					<input class="form-control" type="email" id="email2" name="email2">
				</div>
				<div class="form-group">
					<label for="content" style="vertical-align: middle">Message : </label>
					<textarea class="form-control" type="text" id="content" name="content" rows="10"></textarea>
				</div>
				<button class="btn btn-default" type="submit">Send!</button>
			</form>
		</div>
	</section>

	<hr>
	<p class="made-in">Made with <i class="fa fa-heart icon-inima"></i> in Iași</p>

	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/aos.js"></script>
	<script src="./js/sweetalert.min.js"></script>


	<script type="text/javascript">
  	AOS.init();



	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-96096471-1', 'auto');
	  ga('send', 'pageview');
 
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


	$(document).ready(function() {
        console.log("Subscribe")
	    $('#subscribe_form').submit(function(event) {
        	console.log($('#email-input').val())
	        var formData = {
	            'email'        : $('#email-input').val(),
	            'subscribe'		: "Yey"
	        };

	        $.ajax({
	            type        : 'POST', 
	            url         : 'subscribe.php', 
	            data        : formData
	        })
	            .done(function(data) {
	                if (data != 'Great job!')
	                	swal("Oops...", "Something went wrong!", "error");
	                else
	                	swal('Thank you!', 'We\'re glad to meet you!', 'success');
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
	                	swal("Oops...", "Something went wrong!", "error");
	                else
	                	swal('Thank you!', 'Thank you for your message!', 'success');
	            });
	        event.preventDefault();
	    });

	});

	</script>
</body>

</html>