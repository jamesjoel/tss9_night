<!DOCTYPE html>
<html>
<head>
	<title></title>
 	<script type="text/javascript" src="jquery.js"></script> 
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("div").animate({"width":"200px", "height":"200px", "margin-left":"600px"}, 1000);
				$("div").animate({"margin-top":"350px"}, 1000);
				$("div").animate({"margin-left":"0px"}, 1000);
				$("div").animate({"margin-top":"0px", "width":"100px", "height":"100px"}, 1000);
			});
		});
	</script>
	<style type="text/css">
		div{
			height: 100px;
			width: 100px;
			background-color: #710451;
		}
	</style>
</head>
<body>
<button>OK</button>
<div></div>
</body>
</html>