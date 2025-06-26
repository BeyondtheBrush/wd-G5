<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Beyond the Brush - Art Gallery Project</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Risque&display=swap" rel="stylesheet">

<style>
html {
scroll-behavior: smooth;
}

body {
background: url('bg home.jpg') no-repeat center center fixed;
background-size: cover;
font-family: Georgia, serif;
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
  font-family: 'Risque';
  font-size: 3.5rem;
  font-weight: 700;
  letter-spacing: 2px;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  text-transform: uppercase;
}

p {
font-size: 1.1rem;
margin-bottom: 25px;
 }

.btn-custom {
background-color: #4e4035;
border: none;
padding: 10px 22px;
font-size: 1rem;
color: white;
border-radius: 10px;
}

.btn-custom:hover {
background-color: #6b5649;
}

.category-card {
background-color: rgba(255, 255, 255, 0.1);
padding: 20px;
border-radius: 15px;
transition: transform 0.3s ease;
border: 2px solid white;
max-width: 300px;
width: 100%;
}

.category-card:hover {
transform: scale(1.03);
}

.category-card img {
width: 100%;
border-radius: 10px;
}

.category-card h5 {
color: white;
font-size: 1.2rem;
margin-top: 15px;
}

#about,
#help {
display: none;
padding: 70px 20px;
background-color: rgba(0, 0, 0, 0.7);
color: white;
margin-top: 40px;
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

#about .container,
#help .container {
max-width: 800px;
margin: auto;
}

#help ul {
list-style: none;
padding-left: 0;
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" onclick="goHome()">Home</a></li>
          <li class="nav-item"><a class="nav-link" onclick="showHelp()">Help</a></li>
          <li class="nav-item"><a class="nav-link" onclick="showAbout()">About</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-content d-flex flex-column align-items-center justify-content-center text-center" id="home-section">
    <div>
      <h1>SIMPLY ART. SIMPLY BEAUTIFUL</h1>
      <p>"Seventeen years of colors, stories, and inspiration. Start your art journey today."</p>
    </div>
    <div class="d-grid gap-3 col-8 col-md-6 mt-3">
      <a href="#categories-section" class="btn btn-custom">Filipino Historical & Cultural Artworks</a>
      <a href="#categories-section" class="btn btn-custom">Categories</a>
    </div>
  </div>

  <section id="categories-section" class="d-flex flex-column align-items-center justify-content-center text-center py-5">
    <h2 class="mb-4" style="color: white; font-size: 2rem;">Categories</h2>
    <div class="d-flex flex-wrap justify-content-center gap-4">
      <a href="photography.html" class="text-decoration-none">
        <div class="category-card">
          <img src="Photography.jpg" alt="Photography">
          <h5>Photography</h5>
        </div>
      </a>
      <a href="paintings.html" class="text-decoration-none">
        <div class="category-card">
          <img src="Paintings.jpg" alt="Paintings">
          <h5>Paintings</h5>
        </div>
      </a>
    </div>
  </section>

  <section id="about">
    <button class="close-btn" onclick="hideAbout()">×</button>
    <div class="container">
      <h2>About This Project</h2>
      <p>This website some examples of Filipino historical and cultural artworks.Thank you for visiting!</p>
    </div>
  </section>

  <section id="help">
    <button class="close-btn" onclick="hideHelp()">×</button>
    <div class="container">
      <h2>Help Section</h2>
      <p>Here's how to use:</p>
      <ul>
        <li>Click on the categories to view more artworks.</li>
        <li>Use the nav bar to explore or go back to the homepage.</li>
        <li>If something doesn't work, try refreshing the page.</li>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
