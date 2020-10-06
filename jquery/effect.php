<!-- 

	.show()
	.hide()
	.slideUp()
	.slideDown()
	.fadeIn()
	.fadeOut()
	.animate()


 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<script type="text/javascript" src="jquery.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				// $(this).hide();
				// $(this).slideUp(3000);
				// 1000 = 1sec
				// $(this).fadeOut(2000);
				// $("p").show();
				// $("p").slideDown(2000);
				$("p").fadeIn(2000);
			});
		});
	</script>
	<style type="text/css">
		p{
			background-color: #781245;
			color: #FFF;
			width: 300px;
			padding: 10px;
			display: none;
		}
	</style>
</head>
<body>
	<button>OK</button>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>