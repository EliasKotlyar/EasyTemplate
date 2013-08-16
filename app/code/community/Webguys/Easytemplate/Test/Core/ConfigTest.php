<?php

class Webguys_Easytemplate_Test_Core_ConfigTest extends EcomDev_PHPUnit_Test_Case_Config
{

    /**
     * @dataProvider dataProvider
     */
    public function testBackendType($type)
    {
        $l_type = strtolower($type);
        $u_type = ucfirst( $l_type );

        $this->assertModelAlias('easytemplate/backend_'.$l_type, 'Webguys_Easytemplate_Model_Backend_' . $u_type );
        $this->assertResourceModelAlias('easytemplate/backend_'.$l_type, 'Webguys_Easytemplate_Model_Resource_Backend_' . $u_type );

        $model = Mage::getModel('easytemplate/backend_'.$l_type );
        $this->assertInstanceOf( 'Webguys_Easytemplate_Model_Backend_' . $u_type, $model );

        $collection = $model->getCollection();
        $this->assertInstanceOf( 'Webguys_Easytemplate_Model_Backend_' . $u_type.'_Collection', $collection );

        $resource = $model->getResource();
        $this->assertInstanceOf('Webguys_Easytemplate_Model_Resource_Backend_' . $u_type, $resource);

        $resourceCollection = $model->getResourceCollection();
        $this->assertInstanceOf('Webguys_Easytemplate_Model_Resource_Backend_' . $u_type.'_Collection', $resourceCollection);

    }



    public function testBlockAlias()
    {
        $this->assertBlockAlias('easytemplate/block', 'Webguys_Easytemplate_Block_Block' );
    }

}