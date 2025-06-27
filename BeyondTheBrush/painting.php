<?php
include('connect.php');

$query = "SELECT * FROM paintings";
$result = $conn->query($query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beyond the Brush</title>
  <link rel="icon" href="../../img/icon btb.jpg" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="container py-5">
    <div class="row justify-content-center">

      <?php
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
      ?>
          <div class="col-12 col-md-4 mb-4">
            <div class="card h-100 text-center">
              <img src="<?php echo $row['image_path']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                <a href="<?php echo $row['link_page']; ?>" class="btn btn-primary btn-view">VIEW</a>
              </div>
            </div>
          </div>
      <?php
        }
      } else {
        echo "<p>No paintings found.</p>";
      }
      ?>

    </div>
  </div>

  <a href="index.php" class="btn btn-light back-fixed">Back</a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
