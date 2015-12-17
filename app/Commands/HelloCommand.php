<?php

namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class HelloCommand
 * Example Command
 *
 * @package App\Command
 * @link http://symfony.com/doc/current/components/console/introduction.html
 */
class HelloCommand extends Command
{
    /**
     * Config
     *
     * @return void;
     */
    protected function configure()
    {
        $this
            ->setName('hello')
            ->setDescription('HelloWorld command')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Your name'
            )
            ->addOption(
                'yell',
                null,
                InputOption::VALUE_NONE,
                'If set, the task will yell in uppercase letters'
            )
        ;
    }

    /**
     * Execute
     *
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return void;
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!$name = $input->getArgument('name')) {
            $name = 'Anonym';
        }

        $output->writeln('<info>Hello, ' . $name . '!</info>');
    }
}