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
                    <option selected>SİNOP</option>
                    <option value="1">SİVAS</option>
                    <option value="1">KARS</option>
                    <option value="2">SAMSUN</option>
                    <option value="3">KOCAELİ</option>
                    <option value="4">BALIKESİR</option>
                    <option value="5">ANTALYA</option>
                    <option value="6">ARTVİN</option>
                    <option value="7">KASTAMONU</option>
                </select>

            </div>

            <div class="row servis-kart">
                <div class="kart">
                    <h1>SİNOP</h1>
                    <p><i class="fas fa-user"></i> PINAR TEKNİK</p>
                    <p><i class="fas fa-globe-europe"></i> GERZE</p>
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