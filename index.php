<?php
require 'vendor/autoload.php';
$faker = Faker\Factory::create();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OpenStreetMap</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
          integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
          crossorigin=""/>

</head>
<body>
    <h1>Ou acheter le meilleur <strong>chocopain</strong> </h1>
<div class="container">
    <div class="list">
        <?php for ($i = 0; $i < 30; $i++): ?>
            <div class="item js-marker" data-lat=" <?= $faker->latitude(43.57639, 43.60639) ?> " data-long=" <?= $faker->longitude(3.96306, 3.98306) ?>" data-price=" <?= $faker->numberBetween(0, 100) ?>">
                <img src="https://via.placeholder.com/460x260" alt="">
                <h4>3 barre de chocolat pour le prix de 2 !</h4>
                <p>
                    Ici une petite description qui explique pourquoi c'est mieux ici
                </p>
            </div>
        <?php endfor; ?>
    </div>
    <div class="map" id="map"></div>
</div>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js" integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg==" crossorigin=""></script>
<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.3.0"></script>
<script src="app.js"></script>
</body>
</html>
