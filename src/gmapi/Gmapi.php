<?php

namespace pwter;

class Gmapi
{
    private $properties;
    private $markers;

    public function __construct($options)
    {
        $this->properties = $options;
    }

    public function addMarker($options)
    {
        $this->markers[] = $options;
    }

    public function drawMap()
    {
        $map = '<script src="http://maps.googleapis.com/maps/api/js"></script>'
              .'<div id="googleMap" style="width:'. (isset($this->properties['width']) ? $this->properties['width'] : 400) .'px;height:'. (isset($this->properties['height']) ? $this->properties['height'] : 300) .'px;"';

        // add properties as data-tags for js
        foreach ($this->properties as $key => $value) {
            $map .= ' data-'. $key .'="' . $value . '"';
        }

        // add markers as data-tags for js
        if (count($this->markers) > 0) {
            foreach ($this->markers as $key => $marker) {
                $map .= ' data-marker'. $key .'="'.$marker['lat'].';'.$marker['lng'].';'.$marker['title'].';'.$marker['animation'].';'.$marker['icon'].'"';
            }
        }

        $map .= '></div>'
                .'<script src="vendor/pwter/gmapi/src/gmapi/assets/js/gmapi.js"></script>';

        return $map;
    }

}
