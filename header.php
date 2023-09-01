<!-- Topbar Start -->
<div class="container-fluid-topbar d-none d-lg-block">
    <div class="row justify-content-center align-items-center py-2 px-xl-5">
        <div class="col-lg-9 text-center">
            <a href="index.php" class="text-decoration-none">
                <h1 style="font-size: 50px">
                    <span class="text-primary">STUDENT'S</span> SPACE
                    <img src="img/students-space-logo.png" alt="Students Space Logo" height="100" width="100" />
                </h1>
            </a>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<div class="container-fluid px-0">
    <div class="row">

        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-3">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0" style="font-size: 50px">
                        <span class="text-primary">STUDENT'S</span> SPACE
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse col-lg-12" id="navbarCollapse">
                    <a href="admin/index.php" target="_blank"><img src="img/students-space-logo.png" alt="Students Space Logo" height="50" width="50" style="border: 1px solid floralwhite; border-radius: 50%;" /></a>

                    <div class="navbar-nav mx-auto">
                        <style>
                            .navbar-nav a:hover {
                                background-color: black;
                            }
                        </style>
                        <a href="index.php" class="nav-item nav-link font-weight-bold active">Home</a>
                        <a href="courses.php" class="nav-item nav-link font-weight-bold active">Courses</a>
                        <a href="assignments.php" class="nav-item nav-link font-weight-bold active">Assignments</a>
                        <a href="about.php" class="nav-item nav-link font-weight-bold active">About</a>
                        <a href="contact.php" class="nav-item nav-link font-weight-bold active">Contact</a>
                    </div>


                    <?php
                    $stmt = $con->prepare("SELECT uid, GROUP_CONCAT(courseid SEPARATOR ',') AS
                    courseids FROM tblcart WHERE uid = ? AND status > 1 GROUP
                    BY uid");
                    $stmt->bind_param("s", $_SESSION['uid']);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    while ($r =
                        $result->fetch_assoc()
                    ) {
                        $courseids = explode(
                            ',',
                            $r['courseids']
                        ); ?>
                        <div class="dropdown">
                            <button class="btn btn-info dropdown-toggle mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                My Learning
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="community.php"><i class="fas fa-link"></i> Joined Live Clasess </a>
                                <?php foreach ($courseids as $courseid) {
                                    $stmt = $con->prepare("SELECT * FROM tblcourse WHERE courseid = ?");
                                    $stmt->bind_param("s", $courseid);
                                    $stmt->execute();
                                    $result = $stmt->get_result();
                                    $course =
                                        $result->fetch_assoc(); ?>

                                    <a class="dropdown-item" href="videos.php?id=<?php echo $course['courseid']; ?>"><i class="fas fa-laptop"></i> Videos for
                                        <?php echo $course['coursename']; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($_SESSION["email"] == null) { ?>
                        <a href="login.php" class="btn btn-primary py-2 px-3 ml-auto mr-2 d-none d-lg-block">Login</a>
                        <a href="register.php" class="btn btn-secondary py-2 px-2 d-none mr-5 d-lg-block">Sign Up</a>

                    <?php } else { ?>
                        <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bars"></i>
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="viewcart.php">
            <i class="fa fa-shopping-cart"></i> Cart
        </a>
        <a class="dropdown-item" href="orders.php">
            <i class="fas fa-credit-card"></i> Orders
        </a>
    </div>
</div>


                        <script>
                            function redirectTo(url) {
                                window.location.href = url;
                            }
                        </script>

                        <div class="d-block d-lg-none">
                            <a href="viewcart.php" class="btn btn-primary btn-block my-2">
                                <i class="fa fa-shopping-cart"></i> Cart
                            </a>
                            <a href="orders.php" class="btn btn-secondary btn-block my-2">
                                <i class="fas fa-credit-card"></i> Orders
                            </a>
                        </div>

                        <a href="logout.php" class="btn btn-danger py-2 px-4 ml-auto d-none d-lg-block">Logout</a>
                    <?php } ?>
                </div>
            </nav>
        </div>
    </div>
</div>