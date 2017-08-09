<!DOCTYPE html>
<html>
<head>
<title>Solodev's Infinite Carousel</title>
<meta charset="UTF-8">

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" > -->
<link rel="stylesheet" type="text/css" href="carousel.css" rel="stylesheet" type="text/css" >

<style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

	.row {
		background-color: #ececec;
		background-color: rgba(233,230,230,0.79);
		padding: 2% 0;
	}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript" ></script>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script> -->
<script src="slick.js" type="text/javascript" charset="utf-8"></script>

</head>
<body>

	<div class="row">
		<div class="container">
			<section class="customer-logos slider">
				<div class="slide"><img src="images/image1.png"></div>
				<div class="slide"><img src="images/image2.png"></div>
				<div class="slide"><img src="images/image3.png"></div>
				<div class="slide"><img src="images/image4.png"></div>
				<div class="slide"><img src="images/image5.png"></div>
				<div class="slide"><img src="images/image6.png"></div>
				<div class="slide"><img src="images/image7.png"></div>
				<div class="slide"><img src="images/image8.png"></div>
			</section>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$('.customer-logos').slick({
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 1000,
				arrows: false,
				dots: false,
					pauseOnHover: false,
					responsive: [{
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					}
				}, {
					breakpoint: 520,
					settings: {
						slidesToShow: 3
					}
				}]
			});
		});
	</script>

</body>
</html>
