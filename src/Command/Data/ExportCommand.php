<?php


namespace App\Command\Data;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExportCommand extends Command
{
    protected static $defaultName = 'crawler/site';

    protected function configure(): void
    {
        $this
            ->setDescription('Exports data to mini dumps');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {

        //


    }

}