// navigation slide-in
$(window).load(function() {
  $('.nav_slide_button').click(function() {
    $('.pull').slideToggle();
  });
});

// function videocontrol() {
//
//   var video= document.getElementsByTagName("video")[0];
//   if(video.paused) {
//     video.play();
//   } else {
//     video.pause();
//   }
// }
//
// function volumecontrol(e) {
//   var video = document.getElementsByTagName("video")[0];
//   video.volume = e.target.value;
// };
//
//  document.addEventListener("DOMContentLoaded", function() {
//    var volume = document.getElementById("volume");
//    volume.addEventListener("change", volumecontrol);
//  });
