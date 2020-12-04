<?php declare(strict_types=1);

namespace App\Command\Crawler;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SiteCommand extends Command
{
    protected static $defaultName = 'crawler/site';

    protected function configure(): void
    {
        $this
            ->setDescription('We browse the site parsing links and content')
            ->setHelp("url = site");
    }


    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $url = $input->getArgument('url');
    }

}