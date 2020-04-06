<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Question\ChoiceQuestion;
use Symfony\Component\Console\Question\Question;

class Interactive extends Command
{
    protected function configure()
    {
        $this
            ->setName('interactive')
            ->setDescription('ask users info');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $helper = $this->getHelper('question');

        $questionName = new Question('What is your name? ', 'not answered');
        $userName = $helper->ask($input, $output, $questionName);

        $questionAge = new Question('What is your age? ', 'not answered');
        $userAge = $helper->ask($input, $output, $questionAge);

        $questionGender = new ChoiceQuestion(
            'Please select your gender',
            ['male', 'female'],
            0
        );
        
        $userGender = $helper->ask($input, $output,  $questionGender);

        $output->writeln('Your data - name: '.$userName.'  userAge: '.$userAge.' gender: '.$userGender);


        return 1;
    }
}