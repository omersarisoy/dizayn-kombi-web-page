<?php
require("header.php");
?>

<div class="servis">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Servislerimiz</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Servislerimiz
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <p>Türkiye çapında dağıtım ve servis ağımız ile her zaman yanınızdayız. Satın aldığınız ürünlerimizin montajını yaptırmak ya da ilgili diğer servis hizmetlerini almak için lütfen aşağıdaki listeden size en yakın Dizayn Kombi yetkili servisini bularak iletişime geçiniz. Bu sayfada aradığınızı bulamazsanız hafta içi 08:00-18:00 saatleri arasında 0212 886 5741 numaralı telefondan Dizayn Grup merkez ofisimizi arayabilirsiniz. <br>
            </p>

            <p> <strong>Önemli:</strong> Ürünlerimizle ilgili her türlü sorunuz için lütfen öncelikli olarak yetkili servislerimizle görüşünüz.

            <div class="select-menu">
                <select class="form-select" aria-label="Default select example">
                    <option selected value="0">SİNOP</option>
                    <option value="1">SİVAS</option>
                    <option value="2">SAMSUN</option>
                    <option value="3">KOCAELİ</option>
                    <option value="4">BALIKESİR</option>
                    <option value="5">ANTALYA</option>
                    <option value="6">ARTVİN</option>
                    <option value="7">KASTAMONU</option>
                    <option value="8">KARS</option>
                </select>
            </div>

            <div class="row servis-kart">
                <div class="kart 0 col-md-6 col-sm-12 ">
                    <h1>SİNOP</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> GERZE</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                    
                </div>
                <div class="kart 2 col-md-6 col-sm-12">
                    <h1>SAMSUN</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> YAKAKENT</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 1 col-md-6 col-sm-12">
                    <h1>SİVAS</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> DİVRİĞİ</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 8 col-md-6 col-sm-12">
                    <h1>KARS</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> DİGOR</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 3 col-md-6 col-sm-12">
                    <h1>KOCAELİ</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> GEBZE</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 4 col-md-6 col-sm-12">
                    <h1>BALIKESİR</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> MANYAS</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 5 col-md-6 col-sm-12">
                    <h1>ANTALYA</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> KAŞ</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 6 col-md-6 col-sm-12">
                    <h1>ARTVİN</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> HOPA</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 7 col-md-6 col-sm-12">
                    <h1>KASTAMONU</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> HANÖNÜ</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
                <div class="kart 0 col-md-6 col-sm-12">
                    <h1>SİNOP</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> DİKMEN</p>
                    <p><i class="fas fa-phone"></i> 0850 290 34 34</p>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>

<?php
require("footer.php");
?>