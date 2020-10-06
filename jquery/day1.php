<!--

	1. download
	2. call by <script> tag

	3. $(document).ready(function(){
	
		all jquery inside of this function


	});

	this is to prevent any jquery code form running before the document is finished loading.



==================== jQuery Selectors 

	1. by id 					$("#")					$("#box")
	2. by class					$(".")					$(".btn")
	3. by tagname				$("tagname")			$("h1")
	4. by attribute				$("[attribute]")		$("[src]")
	5. by att and its value		$("[attr = '']")		$("[src='1.jpg']")
	6. by sequence/specific		$("#box h1")
	7. myself					$(this)
	8. by grouping				$("#box, h1, .myclass")



document.getElenentById()


 -->
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<script type="text/javascript" src="jquery.js"></script> 
 	<script type="text/javascript">
 		$(document).ready(function(){

 			$("button").click(function(){
 				alert();
 			});

 			$("p").mouseover(function(){
 				//alert();
 			});


 			$(".demo").click(function(){
 				alert("welcome");
 			})
 		});

 		// selectelement.event(function(){
 			// your code
 		// })

 	</script>
 

 </head>
 <body>
 <button>Click</button>
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

 <h1 class="demo">hello</h1>
 <b class="demo">indore</b>

 </body>
 </html>
