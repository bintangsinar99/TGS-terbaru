<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tentang - Berita Luar Negeri</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">

<style>
    body {
      background-color: #000000;
      color: #FFFFFF;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .navbar {
      background-color: #000000 !important;
      border-bottom: 2px solid #B71C1C;
    }
    .navbar-brand {
      color: #FFFFFF !important;
      font-weight: bold;
      font-size: 22px;
    }
    .nav-link{
      color: #FFFFFF !important;
      font-weight: 500;
      margin-left: 15px;   
    }
    .nav-link:hover { color: #FFD54F !important; }
    .card {
      background-color: #121212;
      border: 1px solid #333333;
      border-radius: 8px;
      margin-bottom: 20px;
      color: #FFFFFF;
    }
    .card-body { color: #FFFFFF; }
    .btn-readmore { color: #FFD54F; text-decoration: none; }
    .btn-readmore:hover { color: #FFC107; text-decoration: underline; }
    footer {
      background-color: #000000;
      color: #EEEEEE;
      text-align: center;
      padding: 12px;
      margin-top: 40px;
      border-top: 2px solid #B71C1C;
    }
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">Berita Luar Negeri</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="news.php">News</a></li>
        <li class="nav-item active"><a class="nav-link" href="about.php">About</a></li>
      </ul>
    </div>
  </nav>

  <div class="container mt-5">
    <div class="card shadow-sm p-4">
      <h3 class="text-danger">Tentang Berita Luar Negeri</h3>
      <p>Website ini dibuat untuk menampilkan berita terkini dari berbagai sumber menggunakan REST API.</p>
      <p>Tujuannya untuk melatih integrasi data eksternal menggunakan PHP dan Bootstrap agar user dapat melihat berita secara cepat dan dinamis.</p>
      <ul>
        <li><b>Teknologi:</b> PHP, JSON, REST API, Bootstrap</li>
        <li><b>Dibuat oleh:</b> Bintang Sinar Rahmat Puspa Negoro</li>
        <li><b>Program Studi:</b> Sistem Informasi</li>
      </ul>
    </div>
  </div>

  <footer>
    <p>&copy; <?= date('Y'); ?> Berita Luar Negeri</p>
  </footer>
</body>
</html>
