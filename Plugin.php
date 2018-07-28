<?php
namespace Weirdan\PsalmPluginSkeleton;
use Psalm\PluginApi;

class Plugin implements PluginApi\PluginEntryPointInterface
{
    /** @return void */
    public function __invoke(PluginApi\RegistrationInterface $psalm)
    {
        // This is plugin entry point. You can initialize things you need here,
        // and hook them into psalm using RegistrationInterface
        //
        // Here's some examples:
        // 1. Add a stub file
        // ```php
        // $psalm->addStubFile(__DIR__ . '/stubs/YourStub.php');
        // ```
    }
}
