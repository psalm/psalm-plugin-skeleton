<?php
namespace Weirdan\PsalmPluginSkeleton;

use Psalm\PluginApi;
use SimpleXMLElement;

class Plugin implements PluginApi\PluginEntryPointInterface
{
    /** @return void */
    public function __invoke(PluginApi\RegistrationInterface $psalm, ?SimpleXMLElement $config = null)
    {
        // This is plugin entry point. You can initialize things you need here,
        // and hook them into psalm using RegistrationInterface
        //
        // Here's some examples:
        // 1. Add a stub file
        // ```php
        // $psalm->addStubFile(__DIR__ . '/stubs/YourStub.php');
        // ```

        // Psalm allows arbitrary content to be stored under you plugin entry in
        // its config file, psalm.xml, so you plugin users can put some configiration
        // values there. They will be provided to your plugin entry point in $config
        // parameter, as a SimpleXmlElement object. If there's no configuration present,
        // null will be passed instead.
    }
}
