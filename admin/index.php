<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Students Space Admin</title>
	<?php include 'head.php'; ?>
	<style>
		h1 {
  color: #007bff;
  font-size: 3rem;
  font-weight: bold;
  margin-top: 2rem;
  text-align: center;
}

form {
  margin-top: 3rem;
  border: 1px solid #007bff;
  padding: 2rem;
  border-radius: 10px;
  max-width: 500px;
  margin: 0 auto;
  background-color: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

table {
  margin: 0 auto;
}

input[type="text"],
input[type="password"],
input[type="submit"] {
  border-radius: 5px;
  padding: 10px 20px;
  border: none;
  background-color: #f2f2f2;
  width: 100%;
  margin-bottom: 1rem;
  color: #333;
  font-size: 1.2rem;
  font-weight: bold;
  box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  cursor: pointer;
  transition: background-color 0.3s ease;
  font-size: 1.2rem;
  font-weight: bold;
  margin-top: 1rem;
  padding: 12px 24px;
  border-radius: 5px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
}

input[type="submit"]:hover {
  background-color: #0062cc;
}
	</style>
</head>

<body class="sb-nav-fixed">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8 col-lg-6">
				<h1 class="text-center">Admin Panel</h1>
				<form method="post">
					<table>
						<tr>
							<td><i class="fas fa-user"></i> Username</td>
							<td><input type="text" name="txtname"></td>
						</tr>
						<tr>
							<td><i class="fas fa-lock"></i> Password</td>
							<td><input type="password" name="txtpass"></td>
						</tr>
						<tr>
							<td colspan="2" class="text-center">
								<input type="submit" name="btnlogin" value="Login">
							</td>
						</tr>
					</table>
				</form>
				<?php
				if (isset($_POST['btnlogin'])) {
					extract($_POST);
					$q1 = mysqli_query($con, "select * from tbladmin where username='$txtname' and password='$txtpass'");
					if (mysqli_num_rows($q1) > 0) {
						header("location:orders.php");
					} else {
				?>
						<script type="text/javascript">
							alert("Invalid Credentials");
						</script>
				<?php
					}
				}
				?>
			</div>
		</div>
	</div>
</body>

</html>