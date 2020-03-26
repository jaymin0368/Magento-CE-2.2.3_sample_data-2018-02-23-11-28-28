<?php


namespace SimplifiedMagento\FirstModule\Model;


class Student
{
    private $name;
    private $age;
    private  $scores;

    public function __construct($name="Jaymin",$age = 24, array $scores = array('maths' => 21,'Programming' => 33))
    {
        $this->name = $name;
        $this->age = $age;
        $this->scores = $scores;
    }
}