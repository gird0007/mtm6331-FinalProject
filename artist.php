<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SONAR | ARTIST</title>
  <link rel="stylesheet" href="./css/style.css">
  <style>
    @import url('https://fonts.googleapis.com/css?family=KoHo');
  </style>
</head>
<body>
<div class="wrapper">
<header>
  <div class="hero">
    <div class="logo">
      <img src="./img/9logo.png" alt="logo_placeholder">
    </div>
  </div>
  <div class="sidebar-container" id="side-contain">
    <div class="sidebar-arrow" id="sidebar">
      <img src="./img/open-arrow.png" alt="open-sidebar" class="arrow open" id="open">
      <img src="./img/close-arrow.png" alt="close-sidebar" class="arrow close" id="close">
    </div>
    <div class="sidebar" id="sidebar-box">
      <div class="user">
        <div class="account-icon">
          <img src="./img/assets/account-icon.png" alt="account-icon">
        </div>
        <p>name</p>
        <div class="setting-icon">
          <img src="./img/assets/settings-icon.png" alt="settings-icon">
        </div>
      </div>
      <!-- <hr> -->
      <div class="logo">
        <img src="./img/9logo.png" alt="logo_placeholder">
      </div>
      <hr>
      <div class="search"></div>
      <h2>explore more genres</h2>
        <ul>
          <li><a href="#">genre 1</a></li>
          <li><a href="#">genre 2</a></li>
          <li><a href="#">genre 3</a></li>
          <li><a href="#">genre 4</a></li>
        </ul>
        <div class="social">
          <ul>
            <li><a href="#"><img src="./img/footer_social/facebook.png" alt="facebook_logo" srcset=""></a></li>
            <li><a href="#"><img src="./img/footer_social/instagram.png" alt="instagram_logo" srcset=""></a></li>
            <li><a href="#"><img src="./img/footer_social/twitter.png" alt="twitter_logo" srcset=""></a></li>
          </ul>
        </div>
        <!-- <div class="back-to-home">
          <p><a href="index.php">back to home</a></p>
        </div> -->
    </div>
  </div>
  <div class="genre-back">
    <div class="button-back">
      <h1>< back to genre</h1>
    </div>
  </div>
</header>
<main class="artist-main">
  <article>
    <div class="artist">
      <div class="artist-img">
            <img src="https://via.placeholder.com/400

C/O https://placeholder.com/" alt="">
          </div>
          <div class="artist-info">
            <h1>artist name</h1>
            <h2>location</h2>
            <h3>genre/subgenre</h3>
      </div>
    </div>
  </article>
  <div class="booking">
    <div class="book-button">
      <h1>book this artist</h1>
    </div>
  </div>
  <div class="about-artist">
    <div class="text">
      <h2>about</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et in perferendis laudantium minima enim, delectus quam aperiam repudiandae beatae ea! Facilis dolorem illo corporis minima.</p>
      <div class="read">
        <p><a href="#">read more</a></p>
      </div>
    </div>
    <div class="about-artist-images">
      <div class="about-img">
        <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" alt="">
      </div>
      <div class="about-img">
        <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" alt="">
      </div>
    </div>
  </div>
  <div class="tracks-container">
    <h2>tracks</h2>
  </div>
  <div class="calender">
    <h2>upcoming events</h2>
    <div class="contain-info">
      <div class="date">
        <div class="day-word">
          <h2>mon</h2>
        </div>
        <div class="day-num">
          <h1>05</h1>
        </div>
        <div class="month">
          <h2>oct</h2>
        </div>
      </div>
      <div class="info">
        <h4>venue</h4>
        <h4>city, province</h4>
        <h4>full date</h4>
      </div>
      <div class="buy-tickets">
        <div class="button">
          <a href="#">
            buy tickets
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="similar">
    <h2>similar artists</h2>
    <div class="similar-artists">
    <div class="left-arrow">
    <div class="artist">
      <div class="artist-img">
        <a href="artist.php">
          <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" alt="">
        </a>
      </div>
      <div class="artist-info">
        <a href="artist.php"><h1>artist name</h1></a>
        <h2>location</h2>
        <h3>genre/subgenre</h3>
      </div>
    </div>
    </div>
    <div class="artist">
      <div class="artist-img">
        <a href="artist.php">
          <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" alt="">
        </a>
      </div>
      <div class="artist-info">
        <a href="artist.php"><h1>artist name</h1></a>
        <h2>location</h2>
        <h3>genre/subgenre</h3>
      </div>
    </div>
    <div class="right-arrow">
    <div class="artist">
      <div class="artist-img">
        <a href="artist.php">
          <img src="https://via.placeholder.com/150

C/O https://placeholder.com/" alt="">
        </a>
      </div>
      <div class="artist-info">
        <a href="artist.php"><h1>artist name</h1></a>
        <h2>location</h2>
        <h3>genre/subgenre</h3>
      </div>
    </div>
    </div>
    </div>
  </div>
</main>
</div>
<script src="./js/index.js"></script>
</body>
</html>