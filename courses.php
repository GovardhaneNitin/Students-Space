<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students Space</title>
    <?php include "head.php"; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .course-container {
            transition: box-shadow 0.2s ease-in-out;
        }

        .course-container:hover {
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
        }

    </style>
</head>

<body> <?php include "header.php"; ?>
    <div class="container-fluid">
        <div class="container py-2">
            <div class="row justify-content-center mb-4 mt-4">
                <div class="col-md-6">
                    <form method="post">
                        <div class="input-group">
                            <select name="cmbcname" class="form-control">
                                <option value="0">All Courses</option>

                                <?php
                                $q = mysqli_query($con, "select * from tblclass");
                                while ($r = mysqli_fetch_array($q)) {
                                ?> <option value="<?php echo $r["cid"]; ?>"><?php echo $r["cname"]; ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit" name="btnsearchbycategory">Search By Courses</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            if (isset($_POST["btnsearch"])) {
                extract($_POST);
                $query = "select * from tblcourse where coname like '%" . $txtsearch . "%'";
            } else {
                $query = "select * from tblcourse order by courseid desc";
            }

            if (isset($_POST["btnsearchbycategory"])) {
                extract($_POST);
                if ($cmbcname == 0) {
                    $query = "select * from tblcourse";
                } else {
                    $query = "select * from tblcourse where cid = '" . $cmbcname . "'";
                }
            }
            ?>


            <div class="row mt-5">
    <?php
    $q = mysqli_query($con, $query);
    while ($r = mysqli_fetch_array($q)) {
    ?>
        <div class="course-container col-lg-4 col-md-6 mb-4">
            <div class="rounded overflow-hidden mb-2 border mb-3 mt-3">
                <img class="img-fluid" src="admin/<?php echo $r["courseimage"]; ?> " alt="">
                <div class="bg-light p-4">
                    <div class="d-flex justify-content-between mb-3">
                        <small class="m-0"><i class="fas fa-rupee-sign"></i><strike> <?php echo $r["courseprice"]; ?></strike>/-</small>
                        <small class="m-0 text-success"><i class="fas fa-rupee-sign"></i> <?php echo $r["coursedprice"]; ?>/-</small>
                    </div>
                    <h5><?php echo $r["coursename"]; ?></h5>
                    <div class="border-top mt-4 pt-4">
                        <a class="btn btn-info" href="details.php?id=<?php echo $r['courseid']; ?>">
                            <small><i class="fas fa-info-circle"></i> View Details</small>
                        </a>
                        <small class="m-3 text-danger"><i class="far fa-clock"></i> <?php echo $r["coursetime"]; ?></small>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>


        </div>
    </div>

    <?php include "footer.php"; ?>
</body>

</html>