<?php
require("header.php");
?>

<div class="tanitim">
    <div class="container-fluid">
        <div class="design-container">
            <h2>Tanıtım - Filmi</h2>
        </div>
    </div>

    <div class="container-fluid">
        <div class="design-container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= $url ?>">Ana Sayfa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tanıtım Filmi
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="design-container">
        <iframe width="100%" height="506" src="https://www.youtube.com/embed/Z2blCfgU8NE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

    <?php
    require("footer.php");
    ?>