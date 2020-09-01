<?php

namespace AfCheckVersion\Commands;

use Shopware\Commands\ShopwareCommand;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckVersion extends ShopwareCommand
{
        protected function configure()
        {
            $this
                ->setName('check:version')
                ->setDescription('Checks the Version');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $release = Shopware()->Kernel()->getRelease();
            $version = $release['version'];
            $rev = $release['revision'];
            $output->writeln("Version: " . $version . "\n" . "Rev.: " . $rev);
        }
}


