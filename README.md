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

> composer install

### **example**

    <?php
      require_once('vendor/autoload.php');
      $gmapi = new Gmapi(array('width' => '800', 'height' => '600'));
    ?>
    <?= $gmapi->drawMap() ?>
