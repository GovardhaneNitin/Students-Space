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
	if (isset($_POST['btnaddclass'])) {
		extract($_POST);
		mysqli_query($con, "insert into tblclass(cname)values('$txtcname')");

	?>
		<script type="text/javascript">
			alert("Class Added");
			window.location.href = "addclass.php";
		</script>
	<?php
	}

	?>
	<div class="container mt-4">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form method="post" class="card shadow">
					<div class="card-header">
						<h3 class="card-title mb-0">Add Class</h3>
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="txtcname">Class Name</label>
							<input type="text" name="txtcname" id="txtcname" class="form-control" required>
						</div>
					</div>
					<div class="card-footer text-right">
						<input type="submit" class="btn btn-success" value="Add Category" name="btnaddclass">
					</div>
				</form>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>
</body>

</html>