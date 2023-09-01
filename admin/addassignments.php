<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Space Admin</title>
  <?php include 'head.php'; ?>

  <style>
    body {
      background-color: #f2f2f2;
      font-family: Arial, sans-serif;
    }

    h1,
    h2,
    h3 {
      font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
      font-size: 24px;
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input[type=text],
    input[type=file] {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      margin-bottom: 20px;
      box-sizing: border-box;
    }

    input[type=submit] {
      background-color: #5cb85c;
      color: #fff;
      border: none;
      border-radius: 1px;
      padding: 10px 20px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #4cae4c;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    nav {
      background-color: #333;
      overflow: hidden;
    }

    nav a {
      float: left;
      color: #fff;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    nav a:hover {
      background-color: #ddd;
      color: #333;
    }

    @media only screen and (max-width: 768px) {

      /* add responsive styles here */
      form {
        max-width: 100%;
        padding: 0 20px;
      }
    }
  </style>

</head>

<body>
  <?php include 'menu.php'; ?>
  <div class="container mt-4">
    <form method="post" enctype="multipart/form-data">
      <label for="sclassname">Class Name:</label>
      <input type="text" id="sclassname" required name="sclassname">

      <label for="ssubname">Subject Name:</label>
      <input type="text" id="ssubname" required name="ssubname">

      <label for="fileToUpload">Select PDF file to upload:</label>
      <input type="file" required name="fileToUpload" id="fileToUpload">

      <input type="submit" value="Submit" name="submit">
    </form>
  </div>

  <?php
  include 'fileupload3.php';

  if (isset($_POST['submit'])) {
    $sclassname = $_POST['sclassname'];
    $ssubname = $_POST['ssubname'];
    $target_file = "uploads3/" . basename($_FILES["fileToUpload"]["name"]);

    // Check if file is uploaded
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      $query = "INSERT INTO tblassignments (sclassname, ssubname, solutions) VALUES ('$sclassname', '$ssubname', '$target_file')";
      mysqli_query($con, $query);
    } else {
      // Handle file upload error
      echo "Sorry, there was an error uploading your file.";
    }
  }

  ?>

  <?php include 'footer.php'; ?>
</body>

</html>