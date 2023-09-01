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
    if (isset($_POST['btnsave'])) {
        extract($_POST);

        mysqli_query($con, "INSERT INTO `tbluser`(`ufname`, `ulname`, `email`, `password`) VALUES ('$txtfname', '$txtlname','$txtemail','$txtpass')");
    ?>
        <script type="text/javascript">
            alert("Registeration Successfull");
            window.location.href = "login.php";
        </script>
    <?php
    }

    ?>

    <div class="container-space col-md-5">
  <h2><i class="fas fa-user-plus"></i> Registration Form</h2>
  <form method="post">
    <div class="form-group mt-5">
      <label for="firstname"><i class="fas fa-user"></i> <b>First Name</b></label>
      <input type="text" class="form-control" placeholder="Enter First Name" name="txtfname" required />
    </div>
    <div class="form-group">
      <label for="lastname"><i class="fas fa-user"></i> <b>Last Name</b></label>
      <input type="text" class="form-control" placeholder="Enter Last Name" name="txtlname" required />
    </div>
    <div class="form-group">
      <label for="email"><i class="fas fa-envelope"></i> <b>Email</b></label>
      <input type="email" class="form-control" placeholder="Enter Email" name="txtemail" required />
    </div>
    <div class="form-group">
      <label for="password"><i class="fas fa-lock"></i> <b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="txtpass" required />
    </div>
    <button type="submit" class="btn btn-primary" name="btnsave"><i class="fas fa-user-plus"></i> Register</button>
  </form>
</div>

    <?php include 'footer.php'; ?>
</body>

</html>