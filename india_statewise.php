<?php
$data = file_get_contents('https://api.covidindiatracker.com/state_data.json');
$coronadata = json_decode($data,true);
$n = sizeof($coronadata);
?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		hr.rounded {
  border-top: 8px solid;
  color: gray;
  border-radius: 5px;
}
	</style>
</head>
<body>
	<br>
	<hr class="rounded">
	<center><h1 style="color: black">India</h1></center>

	<hr class="rounded">
<table class="table table-condensed table-bordered">
	<thead>
			<tr>
				<th>State</th>
				<th>Total Confirmed</th>
				<th>Active</th>
				<th>Total Recovered</th>
				<th>Total Deaths</th>
			</tr>
	</thead>
	<?php
		$i = 0;
		for($i = 0;$i < $n;$i++)
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $coronadata[$i]["state"] ?></td>
					<td><?php echo $coronadata[$i]["confirmed"] ?></td>
					<td><?php echo $coronadata[$i]["active"] ?></td>
					<td><?php echo $coronadata[$i]["recovered"] ?></td>
					<td><?php echo $coronadata[$i]["deaths"] ?></td>
					
				</tr>
			</tbody>
		<?php
			$i++;
		}    ?>
</table>
</body>
</html>