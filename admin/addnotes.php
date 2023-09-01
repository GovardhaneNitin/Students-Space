<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Space Admin</title>
	<?php include 'head.php'; ?>
	<style>
		form {
			margin-top: 20px;
		}

		table {
			margin-bottom: 20px;
		}

		td {
			padding: 10px;
		}

		select,
		input[type="file"] {
			width: 100%;
			padding: 5px;
			margin-top: 5px;
		}

		input[type="submit"] {
			margin-top: 10px;
		}
	</style>
</head>

<body>
	<?php include 'menu.php'; ?>
	<?php
	if (isset($_POST['btnaddnotes'])) {
		extract($_POST);
		include 'fileupload2.php';
		mysqli_query($con, "INSERT INTO `tblnotes`(`pdffile`,`courseid`) VALUES ('$target_file','$cmbcourse')");
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<form method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<td>Choose Course</td>
							<td>
								<select name="cmbcourse" class="form-control">
									<?php
									$q = mysqli_query($con, "select * from tblcourse");
									while ($r = mysqli_fetch_array($q)) {
									?>
										<option value="<?php echo $r['courseid']; ?>"><?php echo $r['coursename']; ?></option>
									<?php
									}
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>Notes PDF</td>
							<td><input type="file" required name="fileToUpload" class="form-control"></td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" class="btn btn-success" value="Add Notes" name="btnaddnotes"></td>
						</tr>
					</table>
				</form>
			</div>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>