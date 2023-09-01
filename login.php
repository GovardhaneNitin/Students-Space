<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    if (isset($_POST['btnlogin'])) {
        extract($_POST);
        $q = mysqli_query($con, "select * from tbluser where email='$txtemail' and password='$txtpass'");
        if (
            mysqli_num_rows($q) >
            0
        ) {
            $_SESSION['email'] = $txtemail;
            $q1 = mysqli_query($con, "select *
        from tbluser where email='" . $_SESSION['email'] . "'");
            $r1 =
                mysqli_fetch_array($q1);
            $_SESSION['uid'] = $r1['uid'];
            $_SESSION['ufname'] = $r1['ufname']; ?>
            <script type="text/javascript">
                window.location.href = "courses.php";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Invalid Credentials");
            </script>
    <?php
        }
    }
    ?>

    <div class="container-space col-md-4">
  <h2><i class="fas fa-user-circle"></i> Login Form</h2>
  <div id="form">
    <div class="centeredForm mt-5">
      <form method="post">
        <div class="form-group">
          <label for="username"><i class="fas fa-envelope"></i> <b>Username</b></label>
          <input type="email" class="form-control" placeholder="Enter Username" name="txtemail" required />
        </div>
        <div class="form-group">
          <label for="password"><i class="fas fa-lock"></i> <b>Password</b></label>
          <input type="password" class="form-control" placeholder="Enter Password" name="txtpass" required />
        </div>
        <button type="submit" class="btn btn-primary" name="btnlogin"><i class="fas fa-sign-in-alt"></i> Login</button>
      </form>
    </div>
  </div>
</div>

    <?php include 'footer.php'; ?>
</body>

</html>