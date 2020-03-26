<?php


namespace SimplifiedMagento\FirstModule\Model;


class HeavyService
{
    public function __construct()
    {
        echo "Heavy Service has been instantiated"."<br>";
    }

    public function  printHeavyServiceMessage()
    {
        echo "message from Heavy service class";
    }
}