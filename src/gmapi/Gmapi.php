<?php

namespace pwter;

class Gmapi
{
    private $width;
    private $height;

    public function __construct($options)
    {
        foreach ($options as $key => $value) {
            $this->$key = $value;
        }
    }
    public function width($width)
    {
        $this->width = $width;
    }
    public function height($height)
    {
        $this->height = $height;
    }
    public function drawMap()
    {
        return '<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>'
              .'<script src="http://maps.googleapis.com/maps/api/js"></script><div id="googleMap" style="width:'. $this->width .'px;height:'. $this->height .'px;"></div>'
              .'<script src="vendor/pwter/gmapi/src/gmapi/assets/js/gmapi.js"';
    }

}
