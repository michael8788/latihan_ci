<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    nav{
    display: block;
    background-color: #4679BD;
}
nav ul{
    margin: 0;
    padding: 0;
    list-style: none;
}
nav ul > li{ display: inline; }
nav ul > li > a{
    display: inline-block;
    padding: 8px 12px;
    border-right: #4072B4;
    text-decoration: none;
    color: #fff;
    text-transform: capitalize;
}
nav ul > li > a:hover{ background-color: #4072B4; }
body {
     margin: 0;
     padding: 0;
     text-align: center;
}
.bg {
     width: 100%;
     height: 100%;
     position: fixed;
     z-index: 1;
     float: left;
     left: 0;
     
}
.content {
     width: 80%;
     height: auto;
     margin: 0 auto;
     position: relative;
     z-index: 5;
     padding: 30px;
     text-align: center;
     
     background:rgba(0,0,0,0.4);}
    </style>
    <title>BERANDA</title>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/style.css">
</head>
<body>
  <header class="ob">
  <div class="atas">
      <div id="logo"> <img style="width: 127px;margin-left:40px;float: left;" src="<?=base_url() ?>" alt="" > </div>
      
      <nav>
          <ul>
              <li><a href="<?=base_url()?>index.php/welcome/utama">home</a></li>
              <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
              <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
              <li><a href="<?=base_url()?>index.php/welcome/contact">contact</a></li>
              <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
            </ul>
        </nav>
    </div>
</header>
<img src="<?=base_url()?>assets/background.jpg" alt="" class="bg">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="content">
<h1 style="color: #dbbcb7;"> selamat datang <?= $nama_lengkap?></h1>
 <h1 style="color: #ee5339;">gender <?=$jenis_kelamin?></h1>  
  <p style="color: #dbbcb7;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque nesciunt, consectetur expedita possimus asperiores voluptatem aperiam sunt ab voluptatibus error eligendi culpa ex perspiciatis eveniet ducimus, cum architecto aliquam sed?</p>
  </div>
</body>
</html>