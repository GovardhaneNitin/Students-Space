<?php
error_reporting(0);
session_start(); ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="css/style.css" rel="stylesheet">

<?php $con = mysqli_connect("localhost", "root", "", "dbstudentspace"); ?>

<style>
  .container-space {
  width: 50%;
  margin: 40px auto;
  padding: 40px;
  border: 1px solid #007bff;
  border-radius: 10px;
  background-color: #fff;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #007bff;
}

#form {
  margin-top: 30px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  font-weight: bold;
  color: #555;
}

input[type="email"],
input[type="password"] {
  border-radius: 5px;
  border: none;
  background-color: #f2f2f2;
  padding: 10px;
  width: 100%;
  color: #555;
}

input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 14px 20px;
  margin-top: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
  font-size: 16px;
  font-weight: bold;
}

input[type="submit"]:hover {
  background-color: #0069d9;
}
</style>