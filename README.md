# gmapi
simple google map api

### **install**
composer.json:

    {
        "repositories": [
            {
            "type": "vcs",
            "url": "https://github.com/pwter/gmapi"
        }
        ],
        "require": {
            "Pwter/gmapi": "dev-master"
        }
    }

> >composer install

### **basic example**

<?php
    use pwter\gmapi;
    require_once('vendor/autoload.php');

    $gmapi = new Gmapi(array(
        'width' => '800',
        'height' => '600',
        'lat' => '47.4984',
        'lng' => '19.0408',
        'zoom' => 10,
        'map-type' => 'TERRAIN' // ROADMAP, HYBRID, SATELLITE
    ));

    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    </head>
    <body>
        <?= $gmapi->drawMap() ?>
    </body>
    </html>

### **add a marker**
    
    $gmapi->addMarker(array(
        'lat' => '47.4984',
        'lng' => '19.0408'
    ));