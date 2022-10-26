<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <title>Naudotojo forma</title>
</head>

<body>

    <div class="container">
        <h1>Ledo storio pranešimas</h1>
        <form method="post" action="" enctype="multipart/form-data">
            <div class="form-group">
                <label for="Ledo_storis">Ledo storis</label>
                <input type="number" class="form-control" id="Ledo_storis">
            </div>
            <div class="form-group">
                <label for="comment">Komentaras</label>
                <input type="text" class="form-control" id="comment">
            </div>
            <div class="form-group ">
                <label for="latitude"></label>
                <input type="number" value="" class="form-control" id="latitude">
            </div>
            <div class="form-group ">
                <label for="longitude"></label>
                <input type="number" value="" class="form-control" id="longitude">
            </div>

            <br>
            <div class="d-flex flex-row justify-content-end">
                <button type="submit" class="btn btn-primary" name="submitResults">Pateikti</button>
            </div>
        </form>
    </div>

<script>
var x = document.getElementById("geolocation");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
    document.getElementById("latitude").value = position.coords.latitude;
    document.getElementById("longitude").value = position.coords.longitude;
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      console.log ('User denied the request for Geolocation.'); 
      break;
    case error.POSITION_UNAVAILABLE:
        console.log ('Location information is unavailable.'); 
      break;
    case error.TIMEOUT:
        console.log ('The request to get user location timed out.'); 
      break;
    case error.UNKNOWN_ERROR:
        console.log ('An unknown error occurred.'); 
      break;
  }
}
getLocation();
</script>

</body>

</html>