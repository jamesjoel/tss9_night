<?php
$con = mysqli_connect("localhost", "root", "", "tss9");

$a = $_POST['stype'];
if($a == "true")
	$que = "SELECT * FROM cities LEFT JOIN states ON cities.state_id = states.id ORDER BY name ASC";
if($a=="false")
	$que = "SELECT * FROM cities LEFT JOIN states ON cities.state_id = states.id ORDER BY name DESC";
// $res = mysqli_query($con, $que);
$res = mysqli_query($con, $que);
$n=1;
while($data = mysqli_fetch_assoc($res))
{ ?>
	<tr>
		<td><?php echo $n; ?></td>
		<td><?php echo $data['city']; ?></td>
		<td><?php echo $data['name']; ?></td>
	</tr>
<?php
$n++;
}

?>