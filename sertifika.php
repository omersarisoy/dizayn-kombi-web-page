<?php
require("header.php");
?>

<div class="sertifika">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Sertifikalarımız</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sertifikalarımız
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <div class="col-3">
                <a href="<?= $url ?>image/sertifikalar-1.jpeg">
                    <img src="<?= $url ?>image/sertifikalar-1.jpeg" alt="ser-1">
                    <span>+</span>
                </a>
            </div>
            <div class="col-3">
                <a href="<?= $url ?>image/sertifikalar-2.jpeg">
                    <img src="<?= $url ?>image/sertifikalar-2.jpeg" alt="ser-2">
                    <span>+</span>
                </a>
            </div>
            <div class="col-3">
                <a href="<?= $url ?>image/sertifikalar-1.jpeg">
                    <img src="<?= $url ?>image/sertifikalar-1.jpeg" alt="ser-1">
                    <span>+</span>
                </a>
            </div>
            <div class="col-3">
                <a href="<?= $url ?>image/sertifikalar-2.jpeg">
                    <img src="<?= $url ?>image/sertifikalar-2.jpeg" alt="ser-2">
                    <span>+</span>
                </a>
            </div>
        </div>

    </div>
</div>

<?php
require("footer.php");
?>