<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 " href="#">Admin Panel</a>
    <!-- Sidebar Toggle-->
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="text-danger dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>

            </ul>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Students Space</div>
                    <a class="nav-link" href="addclass.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-graduation-cap"></i></div>
                        Class
                    </a>
                    <div class="sb-sidenav-menu-heading">Study Materials</div>
                    <a class="nav-link" href="addcourse.php"><i class="fa-solid fa-laptop-file me-2"></i>Courses</a>
                    <a class="nav-link" href="addnotes.php"><i class="fa-solid fa-book me-2"></i>Notes</a>
                    <a class="nav-link" href="addassignments.php"><i class="fa-solid fa-file-pdf me-2"></i>Assignments</a>

                    <div class="sb-sidenav-menu-heading">Customer Information</div>
                    <a class="nav-link" href="orders.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                        Orders
                    </a>
                    <a class="nav-link" href="contact.php">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                        Contact
                    </a>
                    <div class="sb-sidenav-menu-heading">Reports Section</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseReports" aria-expanded="false" aria-controls="collapseReports">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file"></i></div>
                        Reports
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseReports" aria-labelledby="headingReports" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="report1.php">Report 1</a>
                            <a class="nav-link" href="report2.php">Report 2</a>
                            <a class="nav-link" href="report3.php">Report 3</a>
                        </nav>
                    </div>

                </div>
            </div>
        </nav>
    </div>