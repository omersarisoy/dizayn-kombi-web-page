<?php
require("header.php");
?>

<div class="musteri">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Müşteri Görüş Formu</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Müşteri Görüş Formu
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <div class="col-6">
            <form action="">
                    <div class="row">
                        <div class="col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Adınız Soyadınız">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-posta adresiniz">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Telefon">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Konu">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mesajınız" ></textarea>
                        </div>
                    </div>
                    <button type="submit"> Gönder <i class="fas fa-long-arrow-alt-right"></i></button>
                </form>
            </div>
            <div class="col-5">
                <img src="<?= $url ?>image/musteri-gorus.jpeg" alt="">
            </div>
            
        </div>
    </div>
</div>

    <?php
    require("footer.php");
    ?>