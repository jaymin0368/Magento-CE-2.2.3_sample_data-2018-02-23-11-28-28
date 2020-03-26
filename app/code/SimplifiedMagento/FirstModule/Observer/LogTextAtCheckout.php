<?php


namespace SimplifiedMagento\FirstModule\Observer;

use Magento\Framework\Event\Observer;
use  Magento\Framework\Event\ObserverInterface;

class LogTextAtCheckout implements  ObserverInterface
{

    /**
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        // TODO: Implement execute() method.
        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/test.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info('Your text message');
    }
}