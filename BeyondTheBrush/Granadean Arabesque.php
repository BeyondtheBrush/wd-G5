<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Spoliarium - Beyond the Brush</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css"> 
  <style>
    body {
      background-image: url('../img/bg-art.jpg'); 
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      font-family: Arial, sans-serif;
    }

    .art-card {
      background-color: rgba(0, 0, 0, 0.7);
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .art-img {
      width: 100%;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .btn-back {
      margin-top: 20px;
    }
  </style>
</head>
<body>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <div class="art-card text-center">
          <h2 class="mb-4">Granadean Arabesque</h2>
          <img src="../img/art2.jpg" alt="Spoliarium" class="art-img">
          <p>
           The “Granadean Arabesque,” is a staple of the Philippine art world, created by the well-known Filipino painter and Artist Jose Joya.
          </p>
          <a href="painting.php" class="btn btn-light btn-back">← Back to Gallery</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
