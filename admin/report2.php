<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Space Admin</title>
	<?php include 'head.php'; ?>
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

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<h2>Total Number of Courses:
					<?php
					$q1 = mysqli_query($con, "select count(*) as 'pcount' from tblcourse");
					$r1 = mysqli_fetch_array($q1);
					echo $r1['pcount'];
					?></h2>
			</div>
			<div class="col-md-6 text-right">
				<button class="btn btn-primary" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print List</button>
			</div>
		</div>
		<hr>

		<div id="printableArea">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>Course ID</th>
						<th>Course Name</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$q = mysqli_query($con, "select * from tblcourse");
					while ($r = mysqli_fetch_array($q)) {
					?>
						<tr>
							<td><?php echo $r["courseid"]; ?></td>
							<td><?php echo $r["coursename"]; ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>