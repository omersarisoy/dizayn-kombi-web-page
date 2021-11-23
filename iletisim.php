<?php
require("header.php");
?>

<div class="iletisim">
    <div class="container-fluid">
        <div class="design-container">
            <h2>İletişim</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">İletişim
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <div class="col-12 p-0">
                <iframe width="100%" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=nidakule%20ata%C5%9Fehir&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a>

            </div>
        </div>

        <div class="row gy-5 ">
            <div class="row col-lg-6 col-12 ">
                <div class="col-10"> 
                    <h2>İletişim Bilgilerimiz</h2>
                    <p><strong>Dizayn Kombi</strong> size bir telefon kadar yakın, dilerseniz iletişim formu ile de bize  ulaşabilirsiniz.</p>
                </div>
                <div class="col-sm-7 col-12 mb-5 adress  ">
                    <h4>Adres</h4>

                    <ul>
                        <li> 
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Mah. Adnan Menderes Cad. No:6, <br> 34522 Esenyurt İstanbul</p>
                        </li>
                        <li> 
                            <i class="fas fa-phone"></i>
                            <a href="facetime:14085551234"> +90 850 290 3434</a>
                        </li>
                        <li> 
                            <i class="far fa-envelope"></i>
                            <a href="mailto:someone@example.com">info@dizaynkombi.com</a>
                        </li>
                    </ul>

                </div>
                <div class="col-sm-5 col-12 ">
                    <h4>Çalışma Saatleri</h4>
                    <li> <i class="far fa-clock"></i> <p>Pazartesi - Pazar <br>09:00 - 18:00</p></li>
                     
                </div>
            </div>
            <div class="row col-lg-6 col-12 iletisim-form ">
                <div class="col-12  ">
                    <h2>İletişim Formu</h2>
                    <p>Satış ekibiyle iletişime geçmek için aşağıdaki formu kullanabilirsiniz.</p>

                </div>

                <form action="">
                    <div class="row gx-5 ">
                        <div class="col-sm-6 col-12  ">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ad Soyad *">
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-mail Adresiniz *">
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Telefon Numaranız">
                        </div>
                        <div class="col-sm-6 col-12">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Konu Giriniz">
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Açıklama Giriniz *" ></textarea>
                        </div>
                    </div>
                    <button type="submit"> Gönder <i class="fas fa-long-arrow-alt-right"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
require("footer.php");
?>