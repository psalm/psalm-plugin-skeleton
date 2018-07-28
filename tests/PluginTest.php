<?php
namespace Weirdan\PsalmPluginSkeleton\Tests;

use Weirdan\PsalmPluginSkeleton\Plugin;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophecy\ObjectProphecy;
use Psalm\PluginApi\RegistrationInterface;

class PluginTest extends TestCase
{
    /**
     * @var ObjectProphecy
     */
    private $registration;

    /**
     * @return void
     */
    public function setUp()
    {
        $this->registration = $this->prophesize(RegistrationInterface::class);
    }

    /**
     * @test
     * @return void
     */
    public function hasEntryPoint()
    {
        $this->expectNotToPerformAssertions();
        $plugin = new Plugin();
        $plugin($this->registration->reveal());
    }
}
