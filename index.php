<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students Space</title>
  <?php include 'head.php'; ?>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <style>
    .container-header {
      padding: 5px;
    }

    .code-confidently {
      background-repeat: no-repeat;
      background-size: 470px;
      background-position: 80px;
      background-image: url(img/background-image.svg);
      margin-top: 90px;
    }

    .code-confidently h1 {
      margin-left: 50px;
      margin-top: 90px;
      font-size: 48px;
      font-weight: bold;
      margin-bottom: 20px;
      color: #333;
    }

    .code-confidently p {
      margin-left: 50px;
      font-size: 20px;
      color: #666;
      line-height: 1.5;
    }

    .coding-logo img {
      display: block;
      max-width: 100%;
      height: auto;
      margin: 0 auto;
    }

    @media (max-width: 768px) {
      .code-confidently {
        background-size: 300px;
        background-position: 50px;
        margin-top: 50px;
      }

      .code-confidently h1 {
        margin-left: 30px;
        margin-top: 50px;
        font-size: 36px;
      }

      .code-confidently p {
        margin-left: 30px;
        font-size: 16px;
      }
    }

    @media (max-width: 576px) {
      .code-confidently {
        background-size: 250px;
        background-position: 20px;
        margin-top: 30px;
      }

      .code-confidently h1 {
        margin-left: 20px;
        margin-top: 30px;
        font-size: 28px;
      }

      .code-confidently p {
        margin-left: 20px;
        font-size: 14px;
      }
    }


    /* Animation */
    .animation-section {
      margin-bottom: -20px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      gap: 50px;
    }

    .wrapper {
      display: flex;
    }

    .wrapper .static-txt {
      font-size: 60px;
      font-weight: 400;
    }

    .wrapper .dynamic-txts {
      margin-left: -20px;
      height: 90px;
      line-height: 90px;
      overflow: hidden;
    }

    .dynamic-txts li {
      list-style: none;
      color: #fc6d6d;
      font-size: 60px;
      font-weight: 500;
      position: relative;
      top: 0;
      animation: slide 12s steps(4) infinite;
    }

    @keyframes slide {
      100% {
        top: -360px;
      }
    }

    .dynamic-txts li span {
      position: relative;
      margin: 5px 0;
      line-height: 90px;
    }

    .dynamic-txts li span::after {
      content: "";
      position: absolute;
      left: 0;
      height: 110%;
      width: 100%;
      background: #ffffff;
      border-left: 2px solid #fc6d6d;
      animation: typing 3s steps(10) infinite;
    }

    @keyframes typing {

      40%,
      60% {
        left: calc(100% + 30px);
      }

      100% {
        left: 0;
      }
    }

    .container-top-courses img {
      max-width: 100%;
      height: auto;
      max-height: 130px;
      margin-right: 20px;
      transition: transform 0.3s ease;
    }

  .container-top-courses img:hover {
    transform: scale(1.1);
  }

  </style>

</head>

<body>
  <?php include 'header.php'; ?>

  <!-- Animated-text -->
  <div class="container animation-section flex mt-5">
    <div class="wrapper">
      <div class="static-txt">We are</div>
      <ul class="dynamic-txts">
        <li><span>Engineers</span></li>
        <li><span>Programmers</span></li>
        <li><span>Developers</span></li>
        <li><span>Technologists</span></li>
      </ul>
    </div>
  </div>

  <div class="container-header">
    <div class="container-fluid row">
      <div class="col-md-6 code-confidently">
        <h1>Code Confidently</h1>
        <p>
          Confidence in coding comes from knowing your tools, your code, and
          yourself. With every line of code, you build your skills and unleash
          your potential. So dream big, code boldly, and let your confidence
          soar
        </p>
      </div>
      <div class="col-md-6 coding-logo">
        <img src="img/coding-logo.jpg" alt="Image description">
      </div>
    </div>
  </div>



  <div class="container-top-courses mt-5">
    <div class="row">
      <div class="col-md-12 text-center">
        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Learn more about</h5>
        <h1 class="mt-3">Top Programming Courses</h1>
        <div class="d-flex justify-content-center align-items-center mt-5">
         <a href="courses.php"><img src="img/java.png" class="img-fluid mx-4" alt="Java"></a>
          <a href="courses.php"><img src="img/cpp.png" class="img-fluid mx-4" alt="C++"></a>
          <a href="courses.php"><img src="img/python.png" class="img-fluid mx-4" alt="Python"></a>
          <a href="courses.php"><img src="img/android.png" class="img-fluid mx-4" alt="Android"></a>
          <a href="courses.php"><img src="img/web-development.png" class="img-fluid mx-4" alt="Web Development"></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Blog Start -->
    <div class="container-fluid py-5 mt-3">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h1>Trending Technologies</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/ai.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="ai.php">
                            <h5 class="text-white mb-3">Artificial Intelligence</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/ml.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="ml.php">
                            <h5 class="text-white mb-3">Machine Learning</h5>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="blog-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cloud.jpg" alt="">
                        <a class="blog-overlay text-decoration-none" href="cc.php">
                            <h5 class="text-white mb-3">Cloud Computing</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

  <!-- Testimonial Start -->
    <div class="container-fluid mb-5">
        <div class="container mb-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
                <h1>Hear from our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">I have been using Student Space for a few months now, and I am extremely impressed with their platform. The courses are top-notch, and the instructors are knowledgeable and engaging. I have learned so much and am excited to continue my education with them.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/man.png" alt="">
                            <h5 class="m-0">Hemant Patole</h5>
                            <span>TYBCA Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">As a Student professional, I needed a flexible and affordable way to further my education, and Student Space provided just that. The courses are designed to fit around my schedule, and the online community allows me to connect with other students and share ideas.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/girl.png" alt="">
                            <h5 class="m-0">Harshada Jadhav</h5>
                            <span>TYBCA Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">I have tried several online learning platforms in the past, but Student Space is by far the best. The courses are well-structured, and the instructors are responsive to questions and feedback. I appreciate the variety of courses available, and the pricing is very reasonable.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/man1.png" alt="">
                            <h5 class="m-0">Om Shinde</h5>
                            <span>SYBCA Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Need Any Courses</h5>
                        <h1 class="text-white">50% Off For New Students</h1>
                    </div>
                    <p class="text-white">Limited time offer! Enroll now and get Exciting offers on all courses. Don't miss this opportunity to enhance your skills and take your career to the next level. Sign up today!</p>
                    <ul class="list-inline text-white m-0">
    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Learn from top industry experts</li>
    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Access to exclusive learning materials</li>
    <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Earn a certificate upon completion</li>
</ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select a course</option>
                                        <option value="1">Android Programming</option>
                                        <option value="2">Java Programming</option>
                                        <option value="3">Python Programming</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->

  <?php include 'footer.php'; ?>
</body>

</html>