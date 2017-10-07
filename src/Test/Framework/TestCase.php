<?php

namespace Training\Test\Framework;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{

    /**
     * getMock
     *
     * Shortcut for getMockbuilder with methods
     *
     * @param string $originalClassName
     * @param array $setMethods
     * @return Object
     */
    public function getMock(string $originalClassName, array $setMethods = [])
    {
        return $this->getMockBuilder($originalClassName)
                    ->setMethods($setMethods)
                    ->getMock();
    }
}
