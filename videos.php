<!DOCTYPE html>
<html>

<head>
    <title>Students Space</title>
    <?php include 'head.php'; ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Container styling */
        .container-videos {
            margin-bottom: 40px;
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .container-notes {
            overflow-y: scroll;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
            background-color: #f5f5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 2.5rem;
            margin-top: 2rem;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 0.2rem;
        }

        .video-wrapper {
            flex: 1;
            margin-right: 10px;
            height: 500px;
            overflow: hidden;
            position: relative;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <?php
    $course_id = $_GET['id']; // get the course id from the URL parameter
    $q = mysqli_query($con, "SELECT * FROM tblcart, tblcourse WHERE tblcourse.courseid = tblcart.courseid AND uid='" . $_SESSION['uid'] . "' AND status>=1 AND tblcourse.courseid = '$course_id'");
    while ($r = mysqli_fetch_array($q)) {
    ?>
        <div class="container-fluid">
            <h1>MY LEARNING</h1>
            <div class="container-videos">
                <div class="video-wrapper">
                    <?php
                    // Your PHP code to retrieve the video link and course timeline goes here
                    $video_link = $r['courseytlink'];
                    ?>
                    <iframe width="560" height="315" src="<?php echo $video_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <div class="container-notes">

                    <?php
                    $q2 = mysqli_query($con, "select * from tblnotes where courseid='" . $r['courseid'] . "'");
                    while ($r2 = mysqli_fetch_array($q2)) {
                        $pdf_file = $r2['pdffile'];
                    ?>
                        <div class="notes-container">
                            <h3 style="text-align: center;">Notes</h3>
                            <iframe class="embed-responsive-item" src="admin/<?php echo $pdf_file; ?>" type="application/pdf" style="object-fit: contain; width: 100%; height: 100%;"></iframe>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <?php include 'footer.php'; ?>
</body>

</html>