<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Space Admin</title>
	<script src="https://cdn.ckeditor.com/ckeditor5/37.1.0/classic/ckeditor.js"></script>
	<?php include 'head.php'; ?>

	<style>
		body {
			background: #f2f2f2;
			font-family: Arial, sans-serif;
		}

		h1,
		h2,
		h3 {
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-size: 24px;
		}

		table td {
			padding: 10px;
			margin: 5px;
		}

		.btn-success {
			background-color: #5cb85c;
			border-color: #4cae4c;
		}

		nav li:hover {
			background-color: #ddd;
		}

		@media only screen and (max-width: 768px) {
			/* add responsive styles here */
		}

		textarea {
			width: 500px;
		}
	</style>

</head>

<body>
	<?php include 'menu.php'; ?>

	<?php
	if (isset($_POST['btnaddcourse'])) {
		extract($_POST);
		include 'fileupload.php';

		mysqli_query($con, "INSERT INTO `tblcourse`(`coursename`, `coursedesc`, `courseprice`, `coursedprice`, `courseytlink`, `coursetime`, `courseimage`, `cid`) VALUES ('$txtconame','$txtdesc','$txtcoprice','$txtcodprice', '$txtytlink','$txttime','$target_file','$cmbcname')");
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin: 20px;">
				<form method="post" enctype="multipart/form-data">
					<table class="table">
						<tr>
							<Td>
								Choose Class
							</Td>
							<td>
								<select name="cmbcname" class="form-control">
									<?php
									$q = mysqli_query($con, "select * from tblclass");
									while ($r = mysqli_fetch_array($q)) {
									?>
										<option value="<?php echo $r['cid']; ?>"><?php echo $r['cname']; ?></option>
									<?php
									}
									?>

								</select>
							</td>
						</tr>
						<Tr>
							<td>
								Course Name
							</td>
							<td>
								<input type="text" name="txtconame" class="form-control" required>

							</td>
						</Tr>
						<h1>Description</h1>
    					<form action="[URL]" method="post">
       			 			<textarea name="txtdesc" id="editor">
            					&lt;p&gt;Write the Course Description here..&lt;/p&gt;
        					</textarea>
        					<p></p>
    					</form>
						<Tr>
							<td>
								Course Price
							</td>
							<td>
								<input type="text" name="txtcoprice" class="form-control" required>
							</td>
						</Tr>
						<Tr>
							<td>
								Course Discount Price
							</td>
							<td>
								<input type="text" name="txtcodprice" class="form-control" required>
							</td>
						</Tr>
						<Tr>
							<td>
								Course Image
							</td>
							<td>
								<input type="file" name="fileToUpload" class="form-control">
							</td>
						</Tr>
						<Tr>
							<td>
								Course YouTube Link
							</td>
							<td>
								<textarea name="txtytlink" class="form-control"></textarea>
							</td>
						</Tr>
						<Tr>
							<td>
								Course Duretion
							</td>
							<td>
								<textarea name="txttime" class="form-control"></textarea>
							</td>
						</Tr>

						<Tr>
							<td>
								<input type="submit" class="btn btn-success" value="Add Course" name="btnaddcourse">
							</td>
						</Tr>
					</table>
				</form>
			</div>
		</div>
	</div>


	<script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
	<?php include 'footer.php'; ?>
</body>

</html>