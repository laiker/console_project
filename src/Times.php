<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class Times extends Command
{
    protected function configure()
    {
        $this
            ->setName('times')
            ->setDescription('just saying hello to your string')
            ->addArgument('string', InputArgument::REQUIRED, 'Pass the string.')
            ->addArgument('times', InputArgument::OPTIONAL, 'Times.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $times = $input->getArgument('times') ?: 1;
        for($i = 0; $i < $times; $i++){
            $output->writeln($input->getArgument('string'));
        }
        return 1;
    }
}