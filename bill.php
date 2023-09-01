<!DOCTYPE html>
<html>

<head>
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .invoice-container {
            background-color: #f7f7f7;
            border-radius: 5px;
            padding: 20px;
        }

        .invoice-container h2 {
            text-align: center;
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .invoice-container h5 {
            font-size: 18px;
            margin-bottom: 10px;
            color: #333;
        }

        .invoice-container p {
            font-size: 16px;
            margin-bottom: 5px;
            color: #555;
        }

        .invoice-container hr {
            border-color: #ccc;
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .invoice-container .total {
            font-weight: bold;
            color: #333;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-space">
        <div class="row mt-3 invoice-container">
            <div class="col-md-12">
                <h2 class="invoice-heading">
                    <i class="fas fa-file-invoice"></i> Invoice
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="invoice-subheading">
                            <i class="fas fa-user"></i> User Name :
                        </h5>
                        <p class="invoice-text">
                            <?php
                            $q = mysqli_query($con, "SELECT * FROM tbluser WHERE uid='" . $_SESSION['uid'] . "'");
                            while ($r = mysqli_fetch_array($q)) {
                                echo $r['ufname'];
                            }
                            ?>
                        </p>
                        <h5 class="invoice-subheading">
                            <i class="fas fa-envelope"></i> User Email :
                        </h5>
                        <p class="invoice-text">
                            <?php
                            $q = mysqli_query($con, "SELECT * FROM tbluser WHERE uid='" . $_SESSION['uid'] . "'");
                            while ($r = mysqli_fetch_array($q)) {
                                echo $r['email'];
                            }
                            ?>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <h5 class="invoice-subheading">
                            <i class="fas fa-book"></i> Course Name
                        </h5>
                        <?php
                        $q = mysqli_query($con, "SELECT * FROM tblcart,tblcourse WHERE tblcourse.courseid=tblcart.courseid AND uid='" . $_SESSION['uid'] . "' AND status=0");
                        $z = 0;
                        while ($r = mysqli_fetch_array($q)) {
                            $z += $r['coursedprice'];
                        ?>
                            <p class="invoice-text">
                                <?php echo $r['coursename']; ?>: ₹<?php echo $r['coursedprice']; ?>/-
                            </p>
                        <?php } ?>
                        <hr class="invoice-hr" />
                        <p class="invoice-text invoice-total">
                            <strong>Total : ₹<?php echo $z; ?>/-</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4 text-center">
            <div class="col-md-12">
                <h2>Payment Method</h2>
                <p><?php echo isset($cmbpayment) ? $cmbpayment : ''; ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <form method="post">
                    <div class="form-group">
                        <select name="cmbpayment" class="form-control w-auto mx-auto">
                            <option value="Online">Online Payment</option>
                        </select>
                    </div>
                    <button onclick="alert('Payments is in Processing')" type="submit" name="btnpay"  class="btn btn-success btn-lg" >
                        Pay Now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['btnpay'])) {
        extract($_POST);
        $ddate = date('Y-m-d');
        $ttime = date('H:i:s');
        $year = date('Y');
        mysqli_query($con, "UPDATE tblcart SET year='$year', status='1', pmethod='$cmbpayment', ddate='$ddate', ttime='$ttime' WHERE status='0' AND uid='" . $_SESSION['uid'] . "'");
    }
    ?>

    <?php include 'footer.php'; ?>
</body>

</html>