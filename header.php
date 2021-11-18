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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= $url ?>css/swiper.css">
    <link rel="stylesheet" href="<?= $url ?>css/style.css">
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
                            <li><a href="<?= $url ?>sertifika.php">Sertifikalarımız</a> &nbsp;|&nbsp;</li>
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
                <li><a href="<?= $url ?>"><img src="<?= $url ?>image/dizayn-logo.png" alt="logo"></a></li>
            </div>
            <div class="center-header col-7">
                <ul>
                    <li><a href="<?= $url ?>">ANA SAYFA</a></li>
                    <li>
                        <a href="">KURUMSAL <i class="fas fa-angle-down"></i></a>
                        <div>
                            <ul>
                                <li><a href="<?= $url ?>hakkimizda.php">Hakkımızda</a></li>
                                <li><a href="<?= $url ?>sss.php">Sıkça Sorulan Sorular</a></li>
                                <li><a href="<?= $url ?>tanitim.php">Tanıtım Filmimiz</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">ÜRÜNLER <i class="fas fa-angle-down"></i></a>
                        <div>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?= $url ?>kombiler.php">Kombiler</a>
                                    <div>
                                        <ul>
                                            <li><a href="<?= $url ?>kombitech.php">Kombitech Plus</a></li>
                                            <li><a href="<?= $url ?>doru-kombi.php">Doru Kombi</a></li>

                                        </ul>
                                    </div>

                                </li>
                                <li><a href="<?= $url ?>termostat.php">Oda Termostatı</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="">MÜŞTERİ HİZMETLERİ <i class="fas fa-angle-down"></i></a>

                        <div>
                            <ul>
                                <li><a href="<?= $url ?>servis.php">Servislerimiz</a></li>
                                <li><a href="<?= $url ?>musteri.php">Görüşlerinize İhtiyacımız Var</a></li>

                            </ul>
                        </div>
                    </li>
                    <li><a href="<?= $url ?>iletisim.php">İLETİŞİM</a></li>
                </ul>
            </div>
            <div class="right-header">
                <svg enable-background="new 0 0 32 32" height="24px" id="Слой_1" version="1.1" viewBox="0 0 32 32" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Shuffle">
                        <path clip-rule="evenodd" d="M31.532,24.15l-4.815-4.872c-0.393-0.395-1.03-0.395-1.422,0   c-0.393,0.394-0.393,1.034,0,1.428l3.231,3.269h-6.038l-3.772-4.717c-0.394-0.394-1.033-0.394-1.427,0s-0.394,1.033,0,1.427   l3.994,4.994c0.198,0.198,0.457,0.296,0.716,0.295c0.001,0,0.001,0,0.002,0h6.556l-3.262,3.3c-0.393,0.394-0.393,1.034,0,1.428   c0.393,0.395,1.03,0.395,1.423,0l4.909-4.967C31.849,25.553,32,25.286,32,24.975C32,24.623,31.807,24.328,31.532,24.15z" fill-rule="evenodd" />
                        <path clip-rule="evenodd" d="M1,7.975h7.52l3.762,4.704c0.394,0.394,1.033,0.394,1.427,0   c0.394-0.394,0.394-1.033,0-1.427L9.715,6.258C9.501,6.045,9.217,5.957,8.938,5.975H1c-0.552,0-1,0.448-1,1S0.448,7.975,1,7.975z" fill-rule="evenodd" />
                        <path clip-rule="evenodd" d="M22.52,7.975h6.078l-3.262,3.3c-0.393,0.394-0.393,1.034,0,1.428   c0.393,0.395,1.03,0.395,1.423,0l4.94-4.999c0.407-0.409,0.393-1.087-0.043-1.472l-4.897-4.956c-0.393-0.395-1.03-0.395-1.423,0   c-0.393,0.394-0.393,1.034,0,1.428l3.231,3.269H22c-0.005,0-0.009,0.003-0.014,0.003c-0.283-0.025-0.551,0.062-0.778,0.289   L8.443,23.975H1c-0.552,0-1,0.448-1,1s0.448,1,1,1h8c0.276,0,0.58-0.124,0.775-0.32L22.52,7.975z" fill-rule="evenodd" />
                    </g>
                    <g />
                    <g />
                    <g />
                    <g />
                    <g />
                    <g />
                </svg>

            </div>
        </div>
    </header>