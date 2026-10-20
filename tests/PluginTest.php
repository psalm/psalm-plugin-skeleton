<?php

namespace Weirdan\PsalmPluginSkeleton\Tests;

use SimpleXMLElement;
use Weirdan\PsalmPluginSkeleton\Plugin;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Prophecy\PhpUnit\ProphecyTrait;
use Prophecy\Prophecy\ObjectProphecy;
use Psalm\Plugin\RegistrationInterface;

final class PluginTest extends TestCase
{
    use ProphecyTrait;

    /**
     * @var ObjectProphecy<RegistrationInterface>
     */
    private $registration;

    /**
     * @return void
     */
    #[\Override]
    public function setUp(): void
    {
        $this->registration = $this->prophesize(RegistrationInterface::class);
    }

    /**
     * @return void
     */
    #[Test]
    public function hasEntryPoint()
    {
        $this->expectNotToPerformAssertions();
        $plugin = new Plugin();
        $plugin($this->registration->reveal(), null);
    }

    /**
     * @return void
     */
    #[Test]
    public function acceptsConfig()
    {
        $this->expectNotToPerformAssertions();
        $plugin = new Plugin();
        $plugin($this->registration->reveal(), new SimpleXMLElement('<myConfig></myConfig>'));
    }
}
