<?php


namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution3
{
    public function beforeExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "Before execute called sort order 30";
        echo "<br>";
    }

    public function afterExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject)
    {
        echo "After execute called sort order 30";
        echo "<br>";
    }

    public function aroundExecute(\SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject, callable  $proceed)
    {
        echo "Before proceed called sort order 30";
        echo "<br>";
        $proceed();
        echo "After proceed called sort order 30";
        echo "<br>";
    }
}