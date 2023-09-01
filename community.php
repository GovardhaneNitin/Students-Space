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
    #jitsi-container {
      width: 95vw;
      height: 95vh;
      margin: 10px auto 10px;
    }
  </style>
</head>

<body>
  <?php include 'header.php'; ?>

  <div id="jitsi-container">
    <?php
    // Define the Jitsi Meet room URL
    $jitsi_room = 'https://meet.jit.si/MyConferenceRoom';

    // Generate a unique room name
    $room_name = uniqid();

    // Define the API parameters
    $api_params = array(
      'roomName' => $room_name,
      'width' => '100%',
      'height' => '100%',
      'parentNode' => '#meet',
      'config.overwriteConfig' => array(
        'prejoinPageEnabled' => false
      ),
      'interfaceConfig.APP_NAME' => 'My Jitsi Meet App',
    );

    // Encode the API parameters as JSON
    $api_params_json = json_encode($api_params);

    // Generate the Jitsi Meet iframe HTML code with the API parameters
    $jitsi_iframe_html = '<iframe src="' . $jitsi_room . '#config.api=' . urlencode($api_params_json) . '" allow="camera; microphone" style="height: 100%; width: 100%; border: none;"></iframe>';

    echo $jitsi_iframe_html;
    ?>
  </div>

  <?php include 'footer.php'; ?>
</body>

</html>