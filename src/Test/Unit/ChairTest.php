<?php

namespace Training\Test;

use Training\Furniture\Chair;
use Training\Test\Framework\TestCase;

class ChairTest extends TestCase
{

    public function testChairWithNullReturnsDefaultColor()
    {
        $chair = new Chair();
        $chair->setColor(null);
        $this->assertEquals('#FF0000', $chair->getColor());
    }

    public function testChairWithColorReturnsColor()
    {
        $chair = new Chair();
        $chair->setColor("#FFFF00");
        $this->assertEquals('#FFFF00', $chair->getColor());
    }

    /**
     * @expectedException Exception
     */
    public function testException()
    {
        $chair = new Chair();
        $chair->isSoft();
    }

    /**
     * @dataProvider materialProvider
     */
    public function testMaterialWithMaterialReturnsIfSoft($material, $expected)
    {
        $chair = new Chair();
        $chair->setMaterial($material);
        $this->assertEquals($expected, $chair->isSoft());
    }

    public function materialProvider()
    {
        $data = [];
        $data[] = ["wood", true];
        $data[] = ["steel", false];
        return $data;
    }

    public function testIsSoftWithSteelReturnsFalse()
    {
        $chair = $this->getMock("Training\\Furniture\\Chair", ['getMaterial']);

        $chair->method('getMaterial')
              ->willReturn('steel');

        $this->assertFalse($chair->isSoft());
    }
}
