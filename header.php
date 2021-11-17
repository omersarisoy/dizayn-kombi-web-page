<?php
    $url = 'http://localhost:8080/dizayn-kombi/';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Dizayn Kombi</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $url?>css/swiper.css">
    <link rel="stylesheet" href="<?= $url?>css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <header>
        <div class="container-fluid header-container">
            <div class="design-container menu-upbar">
                <div class="row">
                    <div class="header-left col">
                        <li>
                            <a href="facetime:14085551234"><i class="fas fa-phone"></i> +90 850 290 3434</a>
                        </li>
                    </div>
                    <div class="header-right col-6">
                        <ul>
                            <li><a href="">Sertifikalarımız</a> &nbsp;|&nbsp;</li>
                            <li><a href="">İnsan Kaynakları</a> &nbsp;|&nbsp;</li>
                            <li><a href="">Bayimiz Olmak İstermisiniz ?</a> </li>
                            <li class="language">
                                <a href="">Language <i class="fas fa-angle-down"></i></a>
                                <div class="language-open">
                                    <ul>
                                        <li><a href="">English</a></li>
                                        <li><a href="">Arabian</a></li>
                                        <li><a href="">Russian</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="design-container main-bar">
            <div class="left-header col-2">
                <li><a href="<?= $url?>"><img src="<?= $url?>image/dizayn-logo.png" alt="logo"></a></li>
            </div>
            <div class="center-header col-7">
                <ul>
                    <li><a href="<?= $url?>">ANA SAYFA</a></li>
                    <li>
                        <a href="">KURUMSAL <i class="fas fa-angle-down"></i></a>
                        <div>
                            <ul>
                                <li><a href="<?= $url?>hakkimizda.php">Hakkımızda</a></li>
                                <li><a href="<?= $url?>sss.php">Sıkça Sorulan Sorular</a></li>
                                <li><a href="<?= $url?>tanitim.php">Tanıtım Filmimiz</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">ÜRÜNLER <i class="fas fa-angle-down"></i></a>
                        <div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= $url?>kombiler.php">Kombiler</a>
                                    <div>
                                        <ul>
                                            <li><a href="<?= $url?>kombitech.php">Kombitech Plus</a></li>
                                            <li><a href="<?= $url?>doru-kombi.php">Doru Kombi</a></li>

                                        </ul>
                                    </div>

                                </li>
                                <li><a href="<?= $url?>termostat.php">Oda Termostatı</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">MÜŞTERİ HİZMETLERİ <i class="fas fa-angle-down"></i></a>

                        <div>
                            <ul>
                                <li><a href="">Servislerimiz</a></li>
                                <li><a href="">Görüşlerinize İhtiyacımız Var</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="">İLETİŞİM</a></li>
                </ul>
            </div>
            <div class="right-header">
                <img src="<?= $url?>image/random.svg" alt="random">
                
            </div>
        </div>
    </header>