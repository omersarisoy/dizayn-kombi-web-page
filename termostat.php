<?php
require("header.php");
?>

<div class="termostat">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Oda Termostati</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Oda Termostati
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <img src="<?= $url ?>image/oda-termostati.jpeg" alt="mix">
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="termo-hero">
                        <div class="hero-title">
                            <h2>
                                DİJİTAL ODA TERMOSTATI
                            </h2>
                        </div>

                        <div>
                            <h4>
                                HT150 SET kablosuz oda termostatıdır. Kullanıcı <strong> oda termostatını </strong> ihtiyacı olan sıcaklığa ayarlayarak
                                daha konforlu ve ekonomik ısınma sağlar.
                            </h4>
                        </div>

                        <div>
                            <img src="<?= $url ?>image/oda-termostati-gostergesi.jpeg" alt="doru">
                        </div>

                        <div>
                            <p>- Hassas Sıcaklık Ölçümü</p>
                            <p>- ON/OFF Kontrol</p>
                            <p>- Sıcaklık Kalibrasyonu</p>
                            <p>- Kablosuz Bağlantı</p>
                        </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php
require("footer.php");
?>