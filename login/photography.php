<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beyond the Brush</title>
  <link rel="icon" href="img/icon btb.jpg" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
    background-image: url('../img/bg2.jpg');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    background-repeat: no-repeat;
    font-family: Arial, sans-serif;
}

.card {
    border-radius: 15px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.card-img-top {
    height: 200px;
    object-fit: cover;
    width: 100%;
}

.btn-view {
    margin-top: 10px;
    padding: 6px 16px;
    font-size: 0.8rem;
    border-radius: 50px;
    background-color: #ffffff;
    color: #000000;
    border: 1px solid #ccc;
    transition: background-color 0.3s ease;
}

.btn-view:hover {
    background-color:rgb(224, 224, 224);
    color: #000;
}

.container {
    padding-top: 60px;
    padding-bottom: 60px;
}

  </style>
</head>

<body>
  <div class="container py-4">
    <div class="row justify-content-center">

      <div class="h2 text-center p-2" style="color: white;">
        PHOTOGRAPHY
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 text-center">
          <img src="../img/photo5.jpg" class="card-img-top" alt="photo 1">
          <div class="card-body">
            <p class="mb-1" style="font-size: 14px;">photo by</p>
            <h6 style="margin-bottom: 15px; font-weight: bold;">Xyza Cruz Bacani</h6>
            <a href="viewphoto/xyza.php" class="btn btn-primary btn-view">VIEW</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 text-center">
          <img src="../img/photo4.jpg" class="card-img-top" alt="photo 2">
          <div class="card-body">
            <p class="mb-1" style="font-size: 14px;">photo by</p>
            <h6 style="margin-bottom: 15px; font-weight: bold;">Ezra Acayan</h6>
            <a href="viewphoto/ezra.php" class="btn btn-primary btn-view">VIEW</a>
          </div>
        </div>
      </div>
   
      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 text-center">
          <img src="../img/photo3.jpg" class="card-img-top" alt="photo 3">
          <div class="card-body">
            <p class="mb-1" style="font-size: 14px;">photo by</p>
            <h6 style="margin-bottom: 15px; font-weight: bold;">Shaira Luna</h6>
            <a href="viewphoto/shaira.php" class="btn btn-primary btn-view">VIEW</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 text-center">
          <img src="../img/photo2.jpg" class="card-img-top" alt="photo 4">
          <div class="card-body">
           <p class="mb-1" style="font-size: 14px;">photo by</p>
            <h6 style="margin-bottom: 15px; font-weight: bold;">Manny Librodo</h6>
            <a href="viewphoto/manny.php" class="btn btn-primary btn-view">VIEW</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <div class="card h-100 text-center">
          <img src="../img/photo1.jpg" class="card-img-top" alt="photo 5">
          <div class="card-body">
            <p class="mb-1" style="font-size: 14px;">photo by</p>
            <h6 style="margin-bottom: 15px; font-weight: bold;">Bj Pascual</h6>
            <a href="viewphoto/bj.php" class="btn btn-primary btn-view">VIEW</a>
          </div>
        </div>
      </div>
    </div> 
  </div> 
    <a href="dashboard.php" class="btn btn-light back-fixed">Back</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>