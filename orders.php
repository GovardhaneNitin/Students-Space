<!DOCTYPE html>
<html>

<head>
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .container-fluid {
            margin-top: 50px;
        }

        .container-fluid h1 {
            font-size: 2.5rem;
            margin-top: 2rem;
            margin-bottom: 2rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
        }

        th {
            font-size: 20px;
            font-weight: bold;
        }

        td {
            font-size: 18px;
        }

        .text-danger,
        .text-success {
            font-size: 24px;
            margin-right: 5px;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid">
        <h1>MY ORDERS</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Course Name</th>
                            <th>Course Price</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $q = mysqli_query($con, "select * from tblcart,tblcourse where tblcourse.courseid=tblcart.courseid and uid='" . $_SESSION['uid'] . "' and status>=1");
                        while ($r = mysqli_fetch_array($q)) { ?>
                            <tr>
                                <td><?php echo $r['coursename']; ?></td>
                                <td>
                                    ₹<?php $z += $r['coursedprice'];
                                        echo $r['coursedprice']; ?>/-
                                </td>
                                <td>
                                    <?php if ($r['status'] == 1) { ?>
                                        <i class="fas fa-times text-danger"></i> Not
                                        Paid
                                    <?php } else { ?>
                                        <i class="fas fa-check text-success"></i>
                                        Paid
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                        <tr>
                            <td>Total Bill:</td>
                            <td>₹<?php echo $z; ?>/-</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>
</body>

</html>