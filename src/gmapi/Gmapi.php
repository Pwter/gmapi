<?php

namespace pwter;

class Gmapi
{
    private $properties;

    public function __construct($options)
    {
        $this->properties = $options;
    }

    public function drawMap()
    {
        $map = '<script src="http://maps.googleapis.com/maps/api/js"></script>'
              .'<div id="googleMap" style="width:'. (isset($this->properties['width']) ? $this->properties['width'] : 400) .'px;height:'. (isset($this->properties['height']) ? $this->properties['height'] : 300) .'px;"';

        foreach ($this->properties as $key => $value) {
            $map .= ' data-'. $key .'="' . $value . '"';
        }

        $map .= '></div>'
                .'<script src="vendor/pwter/gmapi/src/gmapi/assets/js/gmapi.js"></script>';

        return $map;
    }

}
