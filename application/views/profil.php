<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profil</title>
    <style>
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
     background: #fff;
     padding: 30px;
     text-align: left;
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
    
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/profil.css">
</head>
<header><nav>
                <ul>
                        <li><a href="<?=base_url()?>index.php/welcome/utama">home</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/contact">contact</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                </ul>
            </nav></header>
<img src="<?=base_url()?>assets/profil.png" alt="" class="bg">
<div class='content'>
<body style="background: linear-gradient(135ged,#325adf 0%,#e7530f 100%); text-align: center;">
    <img style="width: 200px;border-radius: 10%;" src="<?=base_url()?>assets/1.png" alt="">
    <h1>Carl Johnson</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dolorum provident quaerat totam alias minima enim libero possimus quod eveniet voluptates deserunt hic sed accusantium laborum, inventore reprehenderit. Deleniti, architecto.</p>
</body>
</div>
</html>