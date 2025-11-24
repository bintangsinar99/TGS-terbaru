<?php
//load config.php
include("config/config.php");
 
//untuk api_key newsapi.org
$api_key="25f0fc413fb843fba131c62f1200dce0";
 
//url api untuk ambil berita headline
$url = "https://newsapi.org/v2/top-headlines?country=us&pageSize=100&apiKey=".$api_key;
 
//menyimpan hasil dalam variabel
$data=http_request_get($url);
 
//konversi data json ke array
$hasil=json_decode($data,true);
 
?>
<!DOCTYPE html>
<html>
<head>
    <title>Rest Client dengan URL</title>
    <!-- CSS Bootstrap -->
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
    .nav-link {
        color: #FFFFFF !important;
        font-weight: 500;
        margin-left: 15px;
    }
    .nav-link:hover {
        color: #FFD54F !important;
    }
    .card {
        border: 1px solid #333333;
        border-radius: 10px;
        background-color: #121212;
        box-shadow: 0 3px 10px rgba(255, 255, 255, 0.1);
        transition: transform 0.2s ease-in-out, box-shadow 0.2s;
        display: flex;
        flex-direction: column;
        min-height: 380px;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 14px rgba(255, 255, 255, 0.15);
    }
    .card-body {
        background-color: #1E1E1E;
        flex-grow: 1;
    }
    .card-text {
        font-size: 15px;
        color: #E0E0E0;
    }
    .btn-readmore {
        color: #FFD54F;
        text-decoration: none;
        font-weight: 600;
    }
    .btn-readmore:hover {
        color: #FFC107;
        text-decoration: underline;
    }
    footer {
        background-color: #000000;
        color: #E0E0E0;
        text-align: center;
        padding: 12px;
        margin-top: 40px;
        border-top: 2px solid #B71C1C;
    }
</style>
</head>
<body>

<!-- navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index.php">Berita Luar Negeri</a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
        <li class="nav-item active"><a class="nav-link" href="news.php">News</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
      </ul>
    </div>
  </nav>
<!-- navbar -->

<div class="container mt-4" style="margin-top: 75px;">
  <h3 class="mb-4 text-center text-danger">Berita Terkini</h3>
    <div class="row">
 
<!-- looping hasil data di array article -->
 <?php foreach ($hasil['articles'] as $row) { ?>
      <div class="col-md-4 mb-4 d-flex align-items-stretch">
          <div class="card w-100">
              <img src="<?php echo $row['urlToImage']; ?>" class="card-img-top" height="270px" alt="news image">
              <div class="card-body d-flex flex-column">
                  <p class="card-text">
                      <i>Oleh <?php echo $row['author']; ?></i><br>
                      <?php echo $row['title']; ?>
                  </p>
                  <div class="mt-auto text-right">
                      <a href="<?php echo $row['url']; ?>" target="_blank" class="btn-readmore">Selengkapnya..</a>
                  </div>
              </div>
          </div>
      </div>
 <?php } ?>
 
    </div>
</div>

<footer>
  <p>&copy; <?= date('Y'); ?> Berita Luar Negeri</p>
</footer>
 
<!-- JS Bootstrap -->
<script src="js/jquery-3.4.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
