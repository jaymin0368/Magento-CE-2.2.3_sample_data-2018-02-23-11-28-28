<?php


namespace SimplifiedMagento\FirstModule\Observer;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;



class OurObserver implements  ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        // TODO: Implement execute() method.
        $message = $observer->getData('greeting');
        $message->setGreeting('Good Night');

    }
}