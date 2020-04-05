<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class SayHello extends Command
{
    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('just saying hello to your string')
            ->addArgument('string', InputArgument::REQUIRED, 'Pass the string.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf('Привет, %s', $input->getArgument('string')));
        return 1;
    }
}