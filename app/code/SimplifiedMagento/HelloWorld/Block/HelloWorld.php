<?php


namespace SimplifiedMagento\HelloWorld\Block;


use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\View\Element\Template;

class HelloWorld extends \Magento\Framework\View\Element\Template
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository,
                                Template\Context $context,
                                array $data = [])
    {
        $this->product = $productRepository;
        parent::__construct($context, $data);
    }

    public function getHelloWorld()
    {
        return 'This is from custom block.';
    }

    public function helloArray()
    {
        $arr = [
            'Good',
            'Very Good',
            'Excellent'
        ];
        return $arr;
    }

    public function getProductName()
    {
        $product = $this->product->get('MJ12');
        return $product->getName();
    }
}