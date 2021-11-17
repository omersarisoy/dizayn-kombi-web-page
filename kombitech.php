<?php
require("header.php");
?>

<div class="kombiler">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Kombitech Plus Kombi</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kombitech Plus Kombi
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <div class="row">
            <div class="col-3">
                <a href="">
                    <img src="<?= $url?>image/kombimix.jpeg" alt="mix">
                    <p>Kombitech Plus Kombi</p>
                </a>
            </div>
        </div>
        
    </div>
</div>

    <?php
    require("footer.php");
    ?>