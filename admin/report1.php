<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Space Admin</title>
	<?php include 'head.php'; ?>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		h1,
		h2,
		h3 {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 24px;
			text-align: center;
			margin-bottom: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-top: 20px;
		}

		th,
		td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
			font-weight: normal;
			color: #333;
		}

		th {
			background-color: #f2f2f2;
			font-weight: bold;
			color: #333;
		}

		input[type=button] {
			background-color: #5cb85c;
			color: #fff;
			border: none;
			border-radius: 1px;
			padding: 10px 20px;
			cursor: pointer;
			margin: 20px 0;
			display: block;
			margin: 0 auto;
			width: 200px;
		}

		input[type=button]:hover {
			background-color: #4cae4c;
		}

		@media only screen and (max-width: 768px) {

			/* add responsive styles here */
			table {
				font-size: 14px;
			}
		}
	</style>
</head>

<body>
	<?php include 'menu.php'; ?>

	<script type="text/javascript">
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
		}
	</script>


	<div class="container mt-4">
		<h2>Class List</h2>
		<div id="printableArea">
			<?php
			$q1 = mysqli_query($con, "select count(*) as 'ccount' from tblclass");
			$r1 = mysqli_fetch_array($q1);
			echo "<h3>Total No. Of Categories: " . $r1['ccount'] . "</h3>";
			?>
			<table>
				<thead>
					<tr>
						<th>Class ID</th>
						<th>Class Name</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$q = mysqli_query($con, "select * from tblclass");
					while ($r = mysqli_fetch_array($q)) {
					?>
						<tr>
							<td><?php echo $r["cid"]; ?></td>
							<td><?php echo $r["cname"]; ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<button class="btn btn-primary mt-4" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print Class List</button>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>