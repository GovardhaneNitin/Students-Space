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
		<form method="post">
			<div class="form-group row">
				<label for="cmbyear" class="col-sm-2 col-form-label">Choose Year</label>
				<div class="col-sm-2">
					<select name="cmbyear" id="cmbyear" class="form-control">
						<option value="2023">2023</option>
						<option value="2022">2022</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="offset-sm-2 col-sm-10 mt-2">
					<input type="submit" name="btnyear" value="Sort By Year" class="btn btn-success">
				</div>
			</div>
		</form>
		<button class="btn btn-primary" onclick="printDiv('printableArea')"><i class="fas fa-print"></i> Print List</button>
		<div id="printableArea">
			<table class="table table-bordered mt-2">
				<thead>
					<tr>
						<th>Course ID</th>
						<th>Course Name</th>
						<th>Course Price</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$z = 0;
					if (isset($_POST["btnyear"])) {
						extract($_POST);
						$q = mysqli_query($con, "select * from tblcourse,tblcart where tblcart.courseid=tblcourse.courseid and year='$cmbyear' and status=2");
					}
					while ($r = mysqli_fetch_array($q)) {
					?>
						<tr>
							<td><?php echo $r["courseid"]; ?></td>
							<td><?php echo $r["coursename"]; ?></td>
							<td><?php $z += $r["coursedprice"];
								echo $r["coursedprice"]; ?></td>
						</tr>
					<?php
					}
					?>
					<tr>
						<td colspan="2" class="text-right"><strong>Total Bill:</strong></td>
						<td><?php echo $z; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>