<?php

declare(strict_types=1);

namespace ParaTest\Runners\PHPUnit;

class TestMethodTest extends \TestBase
{
    public function testConstructor()
    {
        $testMethod = new TestMethod('pathToFile', 'methodName');
        $this->assertEquals('pathToFile', $this->getObjectValue($testMethod, 'path'));
    }
}
