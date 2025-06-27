<?php
include('connect.php');

$query = "SELECT * FROM paintingsinfo";
$result = $conn->query($query);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Painting Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      height: 100vh;
      background-color: #f4f4f4;
    }

    #wrapper {
      display: flex;
      height: 100vh;
    }

    #sidebar-wrapper {
      width: 260px;
      background: linear-gradient(180deg, #0d1b2a, #1b263b);
      color: white;
      padding-top: 20px;
    }

    .sidebar-heading {
      font-size: 1.5rem;
      text-align: center;
      padding: 20px 0;
      border-bottom: 1px solid #394867;
    }

    .list-group-item {
      background-color: transparent;
      color: #ddd;
      padding: 15px 25px;
      border: none;
      transition: all 0.3s ease;
    }

    .list-group-item:hover {
      background-color: #778da9;
      color: white;
      font-weight: bold;
    }

    #page-content-wrapper {
      flex: 1;
      overflow-y: auto;
      padding: 0;
    }

    .navbar {
      height: 60px;
      background-color: #fff;
      border-bottom: 1px solid #dee2e6;
    }

    .logout-btn {
      text-decoration: none;
      color: #6c757d;
      border: 1px solid #ced4da;
      padding: 6px 14px;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .logout-btn:hover {
      background-color: #dee2e6;
      color: #212529;
    }

    .container-fluid {
      padding: 60px 40px;
    }

    .table thead th {
      background-color: #1b263b;
      color: white;
    }
  </style>
</head>

<body>

<div id="wrapper">
  <div id="sidebar-wrapper">
    <div class="sidebar-heading">🖼️ Painting Admin</div>
    <div class="list-group list-group-flush">
      <a href="dashboard.php" class="list-group-item">📊 Dashboard</a>
      <a href="#" class="list-group-item">🖌️ Manage Paintings</a>
      <a href="index.php" class="list-group-item">🚪 Logout</a>
    </div>
  </div>

  <div id="page-content-wrapper">
    <nav class="navbar px-4">
      <div class="ms-auto">
        <a href="index.php" class="logout-btn">Logout</a>
      </div>
    </nav>

    <div class="container-fluid">
      <h2 class="mb-4">Painting Records</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
            $count = 1;
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<th scope='row'>" . $count++ . "</th>";
              echo "<td>" . htmlspecialchars($row['paintingName']) . "</td>";
              echo "<td>" . htmlspecialchars($row['author']) . "</td>";
              echo "<td>" . htmlspecialchars($row['paintingDate']) . "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='4'>No paintings found.</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
