<?php


namespace SimplifiedMagento\Attribute\Setup;

use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{
    private $eavSetupFactory;
    public function __construct(EavSetupFactory $eavSetupFactory)
    {
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * Upgrades data for a module
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();
        if(version_compare($context->getVersion(),'0.0.5','<'))
        {
            $eavSetup = $this->eavSetupFactory->create(['setup'=> $setup]);
            $eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY,
                'custom_eav',
                [
                    'group' => 'Content Area',
                    'type' => 'text',
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visibility' => true,
                    'required' => true,
                    'searchable' => false,
                    'used_in_product_listing' => true,
                    'label' => 'Custom EAV',
                    'input' => 'text'
                ]
            );
        }
        $setup->endSetup();
    }
}