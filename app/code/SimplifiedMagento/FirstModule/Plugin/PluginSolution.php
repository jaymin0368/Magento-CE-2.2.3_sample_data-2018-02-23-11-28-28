<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{
//    public  function beforeSetName(\Magento\Catalog\Model\Product $subject,$name)
//    {
//        return "Before Plugin".$name;
//    }
//
//    public function  afterGetName(\Magento\Catalog\Model\Product $subject,$result)
//    {
//        return $result." After Plugin";
//    }

//    public function aroundGetIdBySku(\Magento\Catalog\Model\Product $subject, callable $proceed,$sku)
//    {
//        echo "Before proceed "."<br>";
//        $id = $proceed($sku); //why because getName() doesnt have any arguments
//        echo $id.'<br>';
//        echo "After proceed "."<br>";
//        return $id;
//    }
//
//    public  function aroundGetName(\Magento\Catalog\Model\Product $subject, callable $proceed)
//    {
//        echo "Before proceed "."<br>";
//        $name = $proceed(); //why because getName() doesnt have any arguments
//        echo $name.'<br>';
//        echo "After proceed "."<br>";
//        return $name;
//    }

        public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
        {
            echo "Before execute called sort order 10";
            echo "<br>";
        }

        public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
        {
            echo "After execute called  sort order 10";
            echo "<br>";
        }

        public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable  $proceed)
        {
            echo "Before proceed called sort order 10";
            echo "<br>";
            $proceed();
            echo "After proceed called sort order 10";
            echo "<br>";
        }


}