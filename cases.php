<?php
$data = file_get_contents('https://api.covid19api.com/summary');
$coronadata = json_decode($data,true);
$n = sizeof($coronadata["Countries"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>table</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>


li a:hover{
  background-color: #a9a9a9;
}



hr.rounded {
  border-top: 8px solid;
  color: gray;
  border-radius: 5px;
}

* {
  box-sizing: border-box;
}


.row {
  content: "";
  clear: both;
  display: flex;
  justify-content: space-around;
}




footer {
  text-align: center;
  padding: 3px;
  background-color: gray;
  color: white;
}

.checked {
    color: orange;
    
}
</style>
</head>
<body>
	<br>
<hr class="rounded">
<div style="margin-left: 50px">
    <button style="float: left;"><a style="display: inline-block;
      color: black;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;" href="http://localhost/Covid-19/india_statewise.php">Cases in India</a></button>
  </div>

	<br><br>
	<br>
	<hr class="rounded">
	<center><u><h1 style="color: black;">Country-wise cases</h1><br></u></center>
<table class="tb table table-condensed table-bordered">
	<thead>
			<tr>
				
				<th><u><b>Country Name</b></u></th>
				<th><u><b>Total Confirmed</b></u></th>
				<th><u><b>New Confirmed</b></u></th>
				<th><u><b>Total Deaths</b></u></th>
				<th><u><b>New Deaths</b></u></th>
				<th><u><b>New Recovered</b></u></th>
				<th><u><b>Total Recovered</b></u></th>
				
			</tr>
	</thead>
	<?php
		$i = 0;
		while($i < $n)
		{
			?>
			<tbody>
				<tr>
					<td><?php echo $coronadata["Countries"][$i]["Country"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["TotalConfirmed"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["NewConfirmed"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["TotalDeaths"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["NewDeaths"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["NewRecovered"]?></td>
					<td><?php echo $coronadata["Countries"][$i]["TotalRecovered"]?></td>
					
				</tr>
			</tbody>
		<?php
			$i++;
		}    ?>
</table>
<hr class="rounded">
<footer>
    <p>CoronaVirus,Copyright &copy; 2020</p>
</footer>
</body>
</html>