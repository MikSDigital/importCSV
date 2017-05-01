<?php

namespace AppBundle\Command;


use AppBundle\Entity\Athlete;
use AppBundle\Entity\Competitor;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

use Doctrine\ORM\EntityManager;

use League\Csv\Reader;


use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class CreateUserCommand extends ContainerAwareCommand
{

protected function configure()
{
    $this
        // the name of the command (the part after "bin/console")
        ->setName('csv:import')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new user.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a user...')
    ;
}

protected function execute(InputInterface $input, OutputInterface $output)
{

    $em = $this->getContainer()->get('doctrine.orm.entity_manager');


    $io = new SymfonyStyle($input, $output);

    $io->title('Attempting to import the feed...');


    $reader = Reader::createFromPath('%kernel.root_dir%/../src/AppBundle/Data/DATA.csv');

    $results = $reader->fetchAssoc();

    $io->progressStart(iterator_count($results));

    foreach ($results as $row) {

        // create new athlete
        $athlete = (new Athlete())
            ->setFirstName($row['first_name'])
            ->setLastName($row['last_name'])
            ->setWeight($row['weight'])
        ;
        $em->persist($athlete);

        $io->progressAdvance();
      }

    $em->flush();
    $io->progressFinish();
    $io->success('Everything is ok!');
}
}