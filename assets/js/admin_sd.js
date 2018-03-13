// function for ajax request
function loadSd() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("POST", "ajax_sd.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+document.getElementById('ip').value);
}
