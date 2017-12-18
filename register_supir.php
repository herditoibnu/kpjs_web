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
    <a href="index.php" class="btn btn-default" style="margin-top: 10px;">List Angkot</a>
    <a href="register_supir.php" class="btn btn-success" style="margin-top: 10px;">Pendaftaran Supir</a>
    <h2>Pendaftaran Sopir</h2>
    <hr/>
    <div class="row">
        <form method="post" name="contactForm">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" required placeholder="Masukkan nama">
          </div>
          <div class="form-group">
            <label for="username">Username</label>
            <input type="username" class="form-control" id="username" required placeholder="Masukkan username">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" required placeholder="Masukkan password">
          </div>
          <button type="submit" class="btn btn-primary addValue">Submit</button>
        </form>
    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <!-- Include Firebase Library -->
  <script src="https://www.gstatic.com/firebasejs/4.5.0/firebase.js"></script>

  <script src="register_supir.js"></script>
</body>
</html>
