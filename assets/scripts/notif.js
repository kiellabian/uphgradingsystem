var notice = document.getElementsByClassName('notice')[0];
var alert = document.getElementsByClassName('alert')[0];

function showNotif() {
  if (notice) {
    notice.style.opacity = "0";
  }
  if (alert) {
    alert.style.opacity = "0";
  }
}