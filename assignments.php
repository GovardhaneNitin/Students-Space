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

  <div class="container">
    <div class="row justify-content-center mb-4 mt-4">
      <div class="col-md-6">
        <form method="post">
          <div class="input-group">
            <select name="sclassname" class="form-control">
              <?php
              $q = mysqli_query($con, "select * from tblassignments");
              $i = 0;
              while ($r = mysqli_fetch_array($q)) {
                $i++;
              ?>
                <option value="<?php echo $r["solutionsid"]; ?>" <?php if ($i == 1) {
                                                                    echo "selected";
                                                                  } ?>><?php echo $r["sclassname"]; ?> : <?php echo $r["ssubname"]; ?></option>
              <?php
              }
              ?>
            </select>
            <div class="input-group-append">
              <button class="btn btn-success" type="submit" name="btnsearchbycategory">Search By Assignments</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>



  <?php

  $query = "select * from tblassignments LIMIT 1";

  if (isset($_POST["btnsearchbycategory"])) {
    extract($_POST);
    if ($sclassname != 0) {
      $query = "select * from tblassignments where solutionsid = '" . $sclassname . "'";
    }
  }
  ?>

  <div class="container-lg">
    <div class="row">
      <?php
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_assoc($result)) {
        $filepath = $row['solutions'];
      ?>
        <div class="col-md-12 mt-3">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title" style="text-align: center;"><?php echo $row['sclassname']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted" style="text-align: center;"><?php echo $row['ssubname']; ?></h6>
              <div class="embed-responsive embed-responsive-16by9">
                <embed class="embed-responsive-item" src="admin/<?php echo $row['solutions']; ?>" type="application/pdf" style="object-fit: contain; width: 100%; height: 100%;" />
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>