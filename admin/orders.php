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
	<div class="container mt-5">
		<h2>Course Orders</h2>
		<table class="table">
			<thead>
				<tr>
					<th>User Name</th>
					<th>Course Name</th>
					<th>Course Price</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				include 'db.php';
				$q = mysqli_query($con, "SELECT tbluser.ufname, tblcourse.coursename, tblcourse.coursedprice, tblcart.status, tblcart.cartid
				FROM tblcart
				INNER JOIN tblcourse ON tblcourse.courseid = tblcart.courseid
				INNER JOIN tbluser ON tbluser.uid = tblcart.uid
				WHERE tblcart.status >= 1
				ORDER BY tbluser.ufname");
				$totalBill = 0;
				$last_user = "";
				while ($r = mysqli_fetch_array($q)) {
					$totalBill += $r['coursedprice'];
					if ($last_user != $r['ufname']) {
						echo "<tr>";
						echo "<td>" . $r['ufname'] . "</td>";
						$last_user = $r['ufname'];
					} else {
						echo "<tr>";
						echo "<td></td>";
					}
					echo "<td>" . $r['coursename'] . "</td>";
					echo "<td>₹" . $r['coursedprice'] . "/-</td>";
					echo "<td>";
					$status = "";
					switch ($r["status"]) {
						case 1:
							$status = "Not Paid";
							break;
						case 2:
							$status = "Paid";
							break;
						default:
							break;
					}
					echo '<a href="setstatus.php?id=' . $r['cartid'] . '">' . $status . '</a>';
					echo "</td>";
					echo "</tr>";
				}
				?>
				<tr>
					<td>Total Bill:</td>
					<td></td>
					<td>₹<?php echo $totalBill; ?>/-</td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>

	<?php include 'footer.php'; ?>
</body>

</html>