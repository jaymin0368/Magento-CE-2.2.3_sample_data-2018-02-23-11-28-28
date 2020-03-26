<?php


namespace SimplifiedMagento\HelloWorld\ViewModel;


use Magento\Framework\View\Element\Block\ArgumentInterface;

class HelloView implements ArgumentInterface
{
    public function getHelloWorld1()
    {
        return 'This is from view Model.';
    }

    public function helloArray1()
    {
        $arr = [
            'Good View Model',
            'Very Good Model',
            'Excellent Model'
        ];
        return $arr;
    }
}