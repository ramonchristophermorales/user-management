<?php

use RamonChristopherMorales\UserManagement\UM;

class CommonTest extends PHPUnit_Framework_TestCase
{

    public $um;

    public function __construct($name = NULL, array $data = array(), $dataName = '') {
        parent::__construct($name, $data, $dataName);

        $this->setUpBeforeClass();
        $this->um = new UM();
    }

    public function assertSTF($actual)
    {
        $this->assertInstanceOf('RamonChristopherMorales\UserManagement\UM', $actual);
    }

    public function testProfileRolesClass() {
        $this->assertNotEmpty($this->um);
    }

    public function testAttributeConfigPath() {
        $this->assertClassHasAttribute('configPath', 'RamonChristopherMorales\UserManagement\UM');
    }


}
