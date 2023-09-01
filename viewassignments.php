<!DOCTYPE html>
<html>

<head>
  <title>Students Space</title>
  <?php include 'head.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Select Class and Subject:</h2>
        <form id="filter-form">
          <div class="form-group">
            <label for="sclassname">Class Name:</label>
            <select class="form-control" id="sclassname" name="sclassname">
              <option value="">--Select Class--</option>
              <?php
              $class_query = "SELECT DISTINCT sclassname FROM tblassignments ORDER BY sclassname ASC";
              $class_result = mysqli_query($con, $class_query);
              while ($class_row = mysqli_fetch_assoc($class_result)) {
                echo '<option value="' . $class_row['sclassname'] . '">' . $class_row['sclassname'] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="form-group">
            <label for="ssubname">Subject Name:</label>
            <select class="form-control" id="ssubname" name="ssubname">
              <option value="">--Select Subject--</option>
              <?php
              $sub_query = "SELECT DISTINCT ssubname FROM tblassignments ORDER BY ssubname ASC";
              $sub_result = mysqli_query($con, $sub_query);
              while ($sub_row = mysqli_fetch_assoc($sub_result)) {
                echo '<option value="' . $class_row['ssubname'] . '">' . $sub_row['ssubname'] . '</option>';
              }
              ?>
            </select>
          </div>
          <button type="button" class="btn btn-primary" onclick="filterResults()">Filter Results</button>
        </form>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <?php
      $sql = "SELECT * FROM tblassignments";
      $result = mysqli_query($con, $sql);
      while ($row = mysqli_fetch_assoc($result)) {
        $filepath = $row['solutions'];
      ?>
        <div class="col-md-6 mt-5">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title"><?php echo $row['sclassname']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['ssubname']; ?></h6>
              <div class="embed-responsive embed-responsive-16by9">
                <embed class="embed-responsive-item" src="admin/<?php echo $row['solutions']; ?>" type="application/pdf" />
              </div>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>


  <script>
    function filterResults() {
      var className = document.getElementById("sclassname").value;
      var subName = document.getElementById("ssubname").value;
      var cards = document.getElementsByClassName("card");

      for (var i = 0; i < cards.length; i++) {
        var card = cards[i];
        var cardClass = card.querySelector(".card-title").innerText;
        var cardSub = card.querySelector(".card-subtitle").innerText;

        if ((className == "" || cardClass == className) && (subName == "" || cardSub == subName)) {
          card.style.display = "block";
        } else {
          card.style.display = "none";
        }
      }
    }
  </script>
  <?php include 'footer.php'; ?>
</body>

</html>