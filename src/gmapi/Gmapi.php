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
        return '<div id="googleMap" style="width:'. $this->width .'px;height:'. $this->height .'px;"></div>';
    }

}
