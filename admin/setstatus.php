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
	<?php
	if (isset($_POST['btnsetstatus'])) {
		extract($_POST);
		mysqli_query($con, "update tblcart set status='$cmbstatus' where cartid=" . $_GET['id']);
	?>
		<script type="text/javascript">
			window.location.href = "orders.php";
		</script>
	<?php
	}
	?>

	<div class="container mt-4">
		<div class="row">
			<div class="col-md-3">
				<form method="post">
					<table class="table">
						<tr>
							<td>Status</td>
							<td>
								<select class="form-control" name="cmbstatus">
									<option value="2">Paid</option>
								</select>
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<button type="submit" name="btnsetstatus" class="btn btn-success">
									<i class="fas fa-check mr-2"></i> Set Status
								</button>
							</td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>