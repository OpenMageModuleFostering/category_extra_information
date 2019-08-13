<?php
$this->startSetup();
$this->addAttribute('catalog_category', 'informations', array(
    'group'         => 'General',
    'input'         => 'textarea',
    'type'          => 'text',
    'label'         => 'Extra informations',
    'backend'       => '',
    'visible'       => 1,
    'required'      => 0,
    'user_defined' => 1,
    'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
));
$this->endSetup();
?>
