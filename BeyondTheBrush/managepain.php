<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
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

        .welcome-card {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .welcome-card h2 {
            font-weight: bold;
            color: #1b263b;
        }

        .welcome-card p {
            color: #495057;
        }

        @media (max-width: 768px) {
            #sidebar-wrapper {
                display: none;
            }

            #wrapper {
                flex-direction: column;
            }
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

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>John</td>
                        <td>Doe</td>
                        <td>@social</td>
                    </tr>
                </tbody>
            </table>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>