<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "<script>alert('Silakan login terlebih dahulu');</script>";
    echo "<meta http-equiv='refresh' content='0;url=login.php'>";
    exit();
}
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Makanan Khas Sulawesi Selatan</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      background-color: #f4f4f4;
      color: #333;
    }

    header {
      background: linear-gradient(to right, #555, #000);
      color: #fff;
      padding: 1.5rem;
      text-align: center;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
      font-size: 1.8rem;
      position: relative;
    }

    .user-info {
      position: absolute;
      right: 20px;
      top: 10px;
      font-size: 1rem;
    }

    nav {
      display: flex;
      justify-content: center;
      background-color: #444;
    }

    nav a {
      color: #fff;
      padding: 1rem;
      text-decoration: none;
      text-transform: uppercase;
      letter-spacing: 0.1rem;
      transition: color 0.3s ease, transform 0.3s ease;
    }

    nav a:hover {
      color: yellow;
      transform: scale(1.1);
    }

    section {
      padding: 2rem;
      margin: 1rem auto;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      max-width: 1000px;
    }

    footer {
      text-align: center;
      padding: 1rem;
      background-color: #333;
      color: #fff;
      margin-top: 2rem;
    }

    .food-list {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .card img {
      height: 200px;
      object-fit: cover;
    }

    .food-list .card {
      transition: transform 0.3s ease;
    }

    .food-list .card:hover {
      transform: scale(1.05);
    }

    .container {
      padding: 2rem;
    }
  </style>
</head>
<body>

  <header class="mb-3">
    <h1>Sulawesi Selatan</h1>
    <p>Budaya | Kuliner | Wisata</p>
    <div class="user-info">Hi, <?php echo htmlspecialchars($username); ?> | <a href="logout.php" style="color:yellow; text-decoration:none;">Keluar</a></div>
  </header>

  <nav>
    <a href="dashboard.php">Dashboard</a>
    <a href="#about">About</a>
    <a href="#wisata">Objek Wisata</a>
    <a href="#kuliner">Kuliner</a>
  </nav>

  <div class="container">
    <section id="about" class="border border-secondary p-4">
      <h2>Selamat Datang di Sulawesi Selatan</h2>
      <p>
        Sulawesi Selatan adalah salah satu provinsi di Indonesia yang terletak di bagian selatan Pulau Sulawesi.
        Provinsi ini terkenal dengan keindahan alam, budaya yang kaya, serta kuliner khasnya.
      </p>
    </section>

    <section id="wisata" class="border border-secondary p-4">
      <h2>Objek Wisata Terkenal</h2>
      <ul>
        <li>Toraja</li>
        <li>Bantimurung</li>
        <li>Taman Nasional Wakatobi</li>
        <li>Rammang-Rammang</li>
      </ul>
    </section>

    <section id="kuliner" class="border border-secondary p-4">
      <h2 class="text-center mb-4">Makanan Khas Sulawesi Selatan</h2>
      <div class="food-list">

        <div class="card text-bg-light mt-3" style="width: 15rem;">
          <img class="card-img-top" src="coto-makassar.jfif" alt="Coto Makassar">
          <div class="card-body">
            <h3 class="card-title">Coto Makassar</h3>
            <p class="card-text">
              Coto Makassar adalah kuliner khas Sulawesi Selatan yang terbuat dari daging sapi yang dimasak dalam bumbu rempah khas.
            </p>
          </div>
        </div>

        <div class="card text-bg-light mt-3" style="width: 15rem;">
          <img class="card-img-top" src="pallubasa.jfif" alt="Pallubasa">
          <div class="card-body">
            <h3 class="card-title">Pallubasa</h3>
            <p class="card-text">
              Pallubasa mirip dengan Coto Makassar, namun menggunakan kelapa parut sangrai sebagai salah satu bahannya.
            </p>
          </div>
        </div>

        <div class="card text-bg-light mt-3" style="width: 15rem;">
          <img class="card-img-top" src="pisang-ijo.jpg" alt="Pisang Ijo">
          <div class="card-body">
            <h3 class="card-title">Pisang Ijo</h3>
            <p class="card-text">
              Pisang Ijo adalah makanan khas Makassar yang terbuat dari pisang yang dibalut adonan tepung hijau dan disajikan dengan sirup manis merah.
            </p>
          </div>
        </div>

      </div>
    </section>
  </div>

  <footer>
    <p>&copy; 2025 Zul Faris. All rights reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
