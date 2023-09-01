<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Space</title>
  <?php include 'head.php'; ?>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    /* Custom CSS */
    .card {
      margin-bottom: 20px;
    }
    .card-img-top {
      height: 200px;
      object-fit: cover;
    }
    .card-title {
      margin-bottom: 0;
    }
    .card-text {
      margin-top: 10px;
    }
    .fa {
      margin-right: 5px;
    }
  </style>
</head>
<body>
  <?php include 'header.php'; ?>
  <div class="container">
    <h1 class="text-center my-5">How to Learn Cloud Computing</h1>
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <img class="card-img-top" src="img/cclogo.jpg" alt="Blog Post Image">
          <div class="card-body">
            <h5 class="card-title">Introduction to Cloud Computing</h5>
            <p class="card-text">
<ul>
  <li>Cloud computing refers to the delivery of computing services, including servers, storage, databases, networking, software, analytics, and intelligence, over the internet ("the cloud") to offer faster innovation, flexible resources, and economies of scale.</li>
  <li>The cloud allows businesses to avoid upfront infrastructure costs, and instead pay only for what they use, making it a cost-effective solution for organizations of all sizes.</li>
  <li>Cloud computing is based on a pay-as-you-go model, which allows for greater flexibility and scalability, as businesses can easily scale their resources up or down based on demand.</li>
  <li>There are three main types of cloud computing: public, private, and hybrid. Public clouds are owned and operated by third-party cloud service providers, private clouds are dedicated to a single organization, and hybrid clouds are a combination of public and private clouds.</li>
  <li>Cloud computing has revolutionized the way businesses operate, providing unprecedented access to data, applications, and services that were previously out of reach for many organizations.</li>
  <li>Some of the key benefits of cloud computing include increased efficiency, cost savings, flexibility, scalability, and enhanced security and reliability.</li>
</ul></p>
            <a href="https://www.geeksforgeeks.org/cloud-computing/" class="btn btn-primary">Read More <i class="fas fa-arrow-right"></i></a>
          </div>
        </div>
        
        
      </div>
      <div class="col-md-4">
        <div class="card sticky-top">
          <div class="card-body">
            <h5 class="card-title">Follow Us</h5>
            <p class="card-text">Stay updated with the latest news and resources on cloud computing.</p>
            <a href="#" class="btn btn-primary"><i class="fab fa-twitter"></i></a>
            <a href="#" class="btn btn-primary"><i class="fab fa-facebook"></i></a>
            <a href="#" class="btn btn-primary"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>
  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Font Awesome JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>