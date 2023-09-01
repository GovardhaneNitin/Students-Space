<!DOCTYPE html>
<html>

<head>
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid row text-center">
        <div class="col-md-12">
            <h2 class="mb-4" style="margin-top: 30px">
                Your Shopping Cart
            </h2>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Course Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $q = mysqli_query($con, "select * from tblcart,tblcourse where tblcourse.courseid=tblcart.courseid and uid='" . $_SESSION['uid'] . "' and status='0'");
                    while ($r = mysqli_fetch_array($q)) {
                    ?>
                        <tr>
                            <td><?php echo $r['coursename']; ?></td>
                            <td>
                                ₹<?php $z += $r['coursedprice'];
                                    echo $r['coursedprice']; ?>/-
                            </td>
                            <td>
                                <a href="delete.php?id=<?php echo $r['cartid']; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> Remove</a>
                            </td>
                        </tr>
                    <?php } ?>
                    <tr>
                        <td colspan="2" class="text-right">
                            <strong>Total Bill:</strong>
                        </td>
                        <td>₹<?php echo $z; ?>/-</td>
                    </tr>
                </tbody>
            </table>
            <div class="text-center">
                <?php if (isset($_SESSION['uid'])) { ?>
                    <table class="table">
                        <tr>
                            <td>
                                <a href="bill.php?id=<?php echo $r1['addressid']; ?>" class="btn btn-success">Proceed to Checkout</a>
                            </td>
                        </tr>
                    </table>
                <?php } else { ?>
                    <p class="lead">
                        Please <a href="register.php">signup</a> or
                        <a href="login.php">login</a> to proceed to checkout.
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>