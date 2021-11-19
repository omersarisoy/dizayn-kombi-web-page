<?php
require('header.php');
?>

<div class="container-fluid slider">
    <div class="design-container">
        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide ">
                    <div class="kombi-pic col-3 ps-5 pt-3">
                        <img src="./image/kombimix-plus.png" alt="kombimix">
                    </div>
                    <div class="kombi-info col-9 ps-3 pb-5">
                        <h2>Dizayn Kombimix Plus</h2>
                        <p>Güvenilir-pirinç monotermik hidrolik yapı-yüksek kalite paslanmaz çelik plaka eşanjörü.</p>
                        <a href="<?= $url ?>kombitech.php"> Keşfedin <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="kombi-pic col-3 ps-5 pt-3 ">
                        <img src="./image/doru-kombi.png" alt="kombimix">
                    </div>
                    <div class="kombi-info col-9 ps-3 pb-5 ">
                        <h2>Dizayn Doru Kombi</h2>
                        <p>Güvenilir-pirinç monotermik hidrolik yapı-yüksek kalite paslanmaz çelik plaka eşanjörü.</p>
                        <a href="<?= $url ?>doru-kombi.php"> Keşfedin <i class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
                <!-- <div class="swiper-slide"> -->

            </div>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>

<div class="home-hero">
    <div class="design-container">
        <div class="hero-title">
            <h2>
                Dizayn Kombi Kumbara
            </h2>
        </div>

        <div>
            <p>
                <strong>Dizayn Kombi Kumbara,</strong> ayrıcalıklı <strong>Dizayn Kombi </strong> topluluğunun buluşma noktasıdır. Üyeler montajlarını yaptıkları cihazların barkodlarını okutarak kolayca puanlar kazanabilir, bu puanlarla diledikleri alışverişleri yapabilir ve <strong>Dizayn Kombi</strong> ailesinin bir üyesi olmanın farklı imkanlarından faydalanabilirler. <a href="">Uygulamayı İndir</a>
            </p>
        </div>
        <div class="row">
            <div class="col-3"><img src="./image/dizayn-1.png" alt=""></div>
            <div class="col-3"><img src="./image/dizayn-2.png" alt=""></div>
            <div class="col-3"><img src="./image/dizayn-3.png" alt=""></div>
            <div class="col-3"><img src="./image/dizayn-4.png" alt=""></div>
        </div>
    </div>
</div>



<?php
require('footer.php');
?>