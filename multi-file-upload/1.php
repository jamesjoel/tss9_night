<?php
// echo time();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Multipal File Upload in PHP</h2>
<form action="2.php" enctype="multipart/form-data" method="post">
	Select Multipal File <input type="file" name="photo[]" accept="image/*" multiple />
	<Br />
	<Br />
	<Br />
	<input type="submit" value="Upload">
</form>

</body>
</html>