<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beyond the Brush</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      background: url('bg home.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Georgia', serif;
      margin: 0;
      padding: 0;
      color: #fff;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      background-color: black;
      padding: 10px 20px;
      z-index: 1000;
    }

    .navbar-nav .nav-link {
      color: white;
      font-weight: 500;
      margin-left: 20px;
      cursor: pointer;
    }

    .container-content {
      padding-top: 100px;
      flex: 1;
    }

    h1 {
      font-size: 3rem;
      font-weight: bold;
    }

    p {
      font-size: 1.2rem;
      margin-bottom: 30px;
    }

    .btn-custom {
      background-color: #4e4035;
      border: none;
      padding: 12px 24px;
      font-size: 1rem;
      color: white;
      border-radius: 10px;
    }

    .btn-custom:hover {
      background-color: #6b5649;
    }

    #about, #help {
      display: none;
      padding: 80px 20px;
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      margin-top: 50px;
      position: relative;
      text-align: center;
    }

    .close-btn {
      position: absolute;
      top: 10px;
      right: 20px;
      background: none;
      border: none;
      color: white;
      font-size: 2rem;
      cursor: pointer;
    }

    .close-btn:hover {
      color: red;
    }

    #about .container, #help .container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    #about p, #help p, #help ul {
      max-width: 800px;
      text-align: left;
    }

    #help ul {
      padding-left: 0;
      list-style: none;
    }

    #help ul li::before {
      content: "• ";
      color: #f8c291;
    }
  </style>
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="logo home.png" alt="Logo" height="30">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" onclick="goHome()">Home</a></li>
          <li class="nav-item"><a class="nav-link" onclick="showHelp()">Help</a></li>
          <li class="nav-item"><a class="nav-link" onclick="showAbout()">About Us</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container container-content d-flex flex-column align-items-center justify-content-center text-center" id="home-section" style="min-height: 70vh;">
    <div>
      <h1>SIMPLY ART. SIMPLY BEAUTIFUL</h1>
      <p>"Seventeen years of colors, stories, and inspiration. Start your art journey today."</p>
    </div>
    <div class="d-grid gap-3 col-8 col-md-6 mt-4">
      <a href="#" class="btn btn-custom">Filipino Historical & Cultural Artworks</a>
      <a href="#" class="btn btn-custom">Categories</a>
    </div>
  </div>

  
  <section id="about">
    <button class="close-btn" onclick="hideAbout()">×</button>
    <div class="container">
      <h2>About Us</h2>
      <p>
        Beyond the Brush is a digital gallery committed to showcasing Filipino historical and cultural masterpieces.
        Our mission is to preserve and celebrate the legacy of our national identity through art.
        Whether you're a student, teacher, enthusiast, or simply curious, we invite you to explore the colorful stories behind every stroke.
      </p>
    </div>
  </section>

 
  <section id="help">
    <button class="close-btn" onclick="hideHelp()">×</button>
    <div class="container">
      <h2>Help Center</h2>
      <p>Need assistance using our site? Here are some tips:</p>
      <ul>
        <li><strong>Explore Artworks:</strong> Click “Filipino Historical & Cultural Artworks” to browse curated pieces.</li>
        <li><strong>Filter by Category:</strong> Use “Categories” to explore different styles and subjects.</li>
        <li><strong>Navigation:</strong> Use the top menu to return to the homepage or explore more.</li>
        <li><strong>Support:</strong> For further help, contact us via social media or the upcoming contact form.</li>
      </ul>
    </div>
  </section>


  <script>
    function goHome() {
      document.getElementById("about").style.display = "none";
      document.getElementById("help").style.display = "none";
      document.getElementById("home-section").scrollIntoView({ behavior: "smooth" });
    }

    function showAbout() {
      document.getElementById("about").style.display = "block";
      document.getElementById("help").style.display = "none";
      document.getElementById("about").scrollIntoView({ behavior: "smooth" });
    }

    function hideAbout() {
      document.getElementById("about").style.display = "none";
    }

    function showHelp() {
      document.getElementById("help").style.display = "block";
      document.getElementById("about").style.display = "none";
      document.getElementById("help").scrollIntoView({ behavior: "smooth" });
    }

    function hideHelp() {
      document.getElementById("help").style.display = "none";
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>

</body>
</html>