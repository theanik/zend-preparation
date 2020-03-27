<?php

class Color{
    private $color;
    private $red;
    private $green;
    private $blue;
    function __construct($colorCode = ''){
        $this->color = ltrim($colorCode,'#');
        $this->getRGB();
    }


    private function parseColor(){
        if($this->color){
            list($this->red,$this->green,$this->blue) = sscanf($this->color,"%02x%02x%02x");
        }else{
            list($this->red,$this->green,$this->blue) = array(0,0,0);
        }
        
    }
    private function getRGB(){
        $this->parseColor();
        echo "Red = $this->red \nGreen = $this->green \nBlue = $this->blue";
    }
}

new Color("#ff0AAF");