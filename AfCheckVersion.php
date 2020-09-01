<?php

namespace AfCheckVersion;

use Shopware\Components\Plugin;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Shopware-Plugin AfCheckVersion.
 */
class AfCheckVersion extends Plugin
{

    /**
    * @param ContainerBuilder $container
    */
    public function build(ContainerBuilder $container)
    {
        $container->setParameter('af_check_version.plugin_dir', $this->getPath());
        parent::build($container);
    }

}
