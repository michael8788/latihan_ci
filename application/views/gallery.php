<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        .judul{
            margin-bottom:51px;
            font-size:large;
            margin-top: 35px;
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
<header>
<nav>
                <ul>
                        <li><a href="<?=base_url()?>index.php/welcome/utama">home</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/event">Event</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/gallery">Gallery</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/contact">contact</a></li>
                        <li><a href="<?=base_url()?>index.php/welcome/profil">MyProfil</a></li>
                </ul>
            </nav>
</header>
<body style="margin: 52px; font-family:'Century Gothic',sans-serif; background-color: #ededed;text-align:center;">
<p class="judul"> everything about big smoke </p>
<img style="width: 400px; margin-right: 671px;" src="<?=base_url()?>assets/admin.png">
<p style ="margin-top: -199px;margin-left: 291px;">pic</p>


<img style="width: 400px; margin-left: 613px; margin-top:166px;" src="<?=base_url()?>assets/senpai.jpg">
<p style ="margin-top: -199px;margin-left: 291px;">pic</p>
</body>
</html>