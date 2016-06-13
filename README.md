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

    $gmapi->addMarker(array(
        'lat' => '47.4984',
        'lng' => '19.0408',
        'title' => 'Center!',
        'animation' => 'BOUNCE', // DROP
        'icon' => 'http://icongal.com/gallery/image/446949/map_marker_bubble_azure_google_marker.png',
        'infowindow' => '<h1>Hello</h1>',
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
        'lng' => '19.0408',
        'title' => 'Center!',
        'animation' => 'BOUNCE', // DROP
        'icon' => 'http://icongal.com/gallery/image/446949/map_marker_bubble_azure_google_marker.png',
    ));
