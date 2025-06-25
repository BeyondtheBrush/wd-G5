<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beyond the Brush</title>
  <link rel="icon" href="img/icon btb.jpg" type="image/png" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

  <style>
    body {
      background-image: url('img/bg art.jpg'); 
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      font-family: 'Georgia', serif;
      margin: 0;
      padding: 0;
    }

    .category-title {
      font-size: 2rem;
      letter-spacing: 2px;
      font-weight: bold;
      color: white;
      text-align: center;
      margin-bottom: 30px;
    }

    .category-link {
      text-decoration: none;
    }

    .category-card {
      background-color: rgba(255, 255, 255, 0.05);
      padding: 20px;
      border-radius: 15px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
      text-align: center;
      height: 100%;
    }

    .category-card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
    }

    .category-card.active {
      border: 2px solidrgb(255, 255, 255);
    }

    .category-card img {
      width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .category-card h5 {
      font-size: 1.2rem;
      font-weight: 500;
      color: white;
      margin-top: 15px;
    }

    .container {
      padding-top: 60px;
      padding-bottom: 60px;
    }
  </style>
</head>
<body>

  <div class="container text-center my-5">
    <h2 class="category-title">CATEGORIES</h2>
    <div class="row justify-content-center mt-4">
      <div class="col-12 col-md-4 mb-4">
        <a href="Paintings/index.php" class="category-link">
          <div class="category-card">
            <img src="img/Paintings.jpg" class="img-fluid rounded" alt="Paintings">
            <h5>Paintings</h5>
          </div>
        </a>
      </div>

      <div class="col-12 col-md-4 mb-4">
        <a href="photography.html" class="category-link">
          <div class="category-card active">
            <img src="img/Photography.jpg" class="img-fluid rounded" alt="Photography">
            <h5>Photography</h5>
          </div>
        </a>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
