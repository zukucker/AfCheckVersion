<?php

namespace AfCheckVersion\Tests;

use AfCheckVersion\AfCheckVersion as Plugin;
use Shopware\Components\Test\Plugin\TestCase;

class PluginTest extends TestCase
{
    protected static $ensureLoadedPlugins = [
        'AfCheckVersion' => []
    ];

    public function testCanCreateInstance()
    {
        /** @var Plugin $plugin */
        $plugin = Shopware()->Container()->get('kernel')->getPlugins()['AfCheckVersion'];

        $this->assertInstanceOf(Plugin::class, $plugin);
    }
}
