<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<style type="text/css">
		.image-frame {
			float: left;
			position: relative;
			margin: 5px;
			color: #333;
		}
		.image-frame .image-caption {
			display: none;
			opacity: 0.8;
			background:#cae5c1;
			width: 290px;
			position: absolute;
			bottom: 0px;
			padding: 5px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('.image-frame').hover(function(){
				$('.image-caption',this).slideToggle('slow');
			}, function(){
				$('.image-caption',this).slideToggle('slow');
		    });
		});

	</script>
</head>
<body>
<div class="image-frame">
	<img src="1.jpg" height="300" width="300" />
	<div class="image-caption">
	  <h2>Slide1</h2>
	  Mouse over Slide 1 to view the caption.
	</div>
</div>
<div class="image-frame">
	<img src="2.jpg" height="300" width="300"/>
	<div class="image-caption">
	  <h2>Slide2</h2>
	  Mouse over Slide 2 to view the caption.
	</div>
</div>
</body>
</html>