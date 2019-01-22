<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
    <style>
    a{
        font-size:1cm; text-decoration none;
        color: blanchedalmond; padding:5px 20px;
        border:1px solid transparent;
        transition: 0.6s ease; font-family:sans-serif;
    }
    a:hover{
            background-color: tomato;color:black;
            border :2px solid tomato;border-radius: 40px;
            transition-duration: 0.5s;
    }
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
    background-image: 
}
nav ul > li > a:hover{ background-color: #4072B4; }
    </style>
</head>
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
<body style="margin: 175px; font-family: fantasy; background: linear-gradient(135deg, #325adf 0%,#e7530f 100%); text-align:center;">


<img src="<?=base_url()?>assets/meme.jpg " alt="">
<br>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"> gratis 1 Laptop ROG </a>
</body>
</html>