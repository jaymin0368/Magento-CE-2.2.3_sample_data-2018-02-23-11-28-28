<?php


namespace SimplifiedMagento\Database\Setup;


use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Db\Ddl\Table;


class UpgradeSchema implements UpgradeSchemaInterface
{

    /**
     * Upgrades DB schema for a module
     *
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
          $setup->startSetup();
          if(version_compare($context->getVersion(),'0.0.2','<'))
          {
                //if version of your project is lower than 0.0.2 then implement this
              $setup->getConnection()->addColumn(
                  $setup->getTable('affiliate_member'),
                  'phonenumber',
                  ['nullable' => false,'type' => Table::TYPE_TEXT,'comment' => 'Phone number column']
              );
          }
          $setup->endSetup();
    }
}