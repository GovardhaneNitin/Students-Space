<!DOCTYPE html>
<html>

<head>

	<title>Students Space Admin</title>
	<?php include 'head.php'; ?>
</head>

<body>

	<?php include 'menu.php'; ?>
	<div class="container mt-3 row">
		<div class="col-md-12">
			<table class="table">
				<Tr>
					<th>
						UserName
					</th>
					<th>
						Email
					</th>
					<th>
						Subject
					</th>

					<th>
						Message
					</th>
				</Tr>
				<?php
				$q = mysqli_query($con, "select * from tblcontact");
				while ($r = mysqli_fetch_array($q)) {
				?>
					<tr>
						<Td>
							<?php
							echo $r['uname']; ?>
						</Td>

						<Td>
							<?php
							echo $r['email']; ?>
						</Td>

						<Td>
							<?php
							echo $r['subject']; ?>
						</Td>

						<Td>
							<?php
							echo $r['message']; ?>
						</Td>




					</Tr>
				<?php
				}
				?>

			</table>
		</div>
	</div>
	<?php include 'footer.php'; ?>
</body>

</html>