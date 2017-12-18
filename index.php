<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Angkot App</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <a href="index.php" class="btn btn-success" style="margin-top: 10px;">List Angkot</a>
    <a href="register.php" class="btn btn-default" style="margin-top: 10px;">Pendaftaran Supir</a>
    <h2>List Angkot</h2>
    <hr/>
    <div id="map" style="height: 400px; width: 100%;"></div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Latitude</th>
          <th>Longitude</th>
          <th>Penumpang</th>
        </tr>
      </thead>
      <tbody id="content-table">
      </tbody>
    </table>
  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- Include Firebase Library -->
  <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBptEiwE1YZan04opzp7yuvXgw-BQt8-Q4"></script>

  <script src="index.js"></script>

</body>
</html>
