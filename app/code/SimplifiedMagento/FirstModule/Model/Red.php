<?php


namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Brightness;

class Red implements Color
{

    private  $brightness;
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

    public function getColor()
    {
        return "Red";
    }
}