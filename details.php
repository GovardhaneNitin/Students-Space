<!DOCTYPE html>
<html>

<head>
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .course-image {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php

if (isset($_POST['btnaddcart'])) {
    extract($_POST);

    // Check if the user is logged in
    if(isset($_SESSION['uid'])) {
        mysqli_Query($con, "INSERT INTO `tblcart`(`uid`, `courseid`,`status`) VALUES ('" . $_SESSION['uid'] . "','" . $_GET["id"] . "','0')");
        echo "<script>alert('Course added to your cart!');</script>";
    } else {
        echo "<script>alert('Please login or signup first!');</script>";
    }
}

?>
<?php
$q = mysqli_query($con, "select * from tblcourse where courseid=" . $_GET['id']);
$r = mysqli_fetch_array($q);
?>

<div class="container-fluid course-details">
    <div class="row mt-3">
        <div class="container col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="course-image img-fluid" src="admin/<?php echo $r['courseimage']; ?>" alt="" />
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <h5>Course Name :</h5>
                        </div>
                        <div class="col-md-6 text-danger">
                            <p><?php echo $r['coursename']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Course Price :</h5>
                        </div>
                        <div class="col-md-6">
                            <p class="text-muted">
                                <s>₹<?php echo $r['courseprice']; ?></s>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Course Discount Price :</h5>
                        </div>
                        <div class="col-md-6 text-success">
                            <p>₹<?php echo $r['coursedprice']; ?></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Course Duration :</h5>
                        </div>
                        <div class="col-md-6 text-info">
                            <p><?php echo $r['coursetime']; ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form method="post">
                                <button type="submit" name="btnaddcart" class="btn btn-success w-100">
                                    <i class="fas fa-cart-plus"></i> Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="course-description col-md-6 col-sm-6 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0">Course Description</h5>
                </div>
                <div class="card-body">
                    <p class="card-text"><?php echo $r['coursedesc']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php include 'footer.php'; ?>
</body>

</html>