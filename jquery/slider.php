<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>
</head>
<style type="text/css">
	#slider{
		width: 600px;
		margin: 20px auto;
		background-color: #457845;
		height: 200px;
	}
</style>
 <script>
    $(document).ready(function(){
      $('#slider').bxSlider({
      	slideWidth : "600px",
      	speed : 5000

      });
    });
  </script>

<body>
<div id="slider">
	<div>
		<img src="1.jpg" height="200" width="600">
	</div>
	<div>
		<img src="2.jpg" height="200" width="600">
	</div>
	<div>
		<img src="3.jpg" height="200" width="600">
	</div>
	
</div>



</body>
</html>