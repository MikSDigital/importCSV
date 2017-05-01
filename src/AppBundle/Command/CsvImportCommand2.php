<?php

namespace AppBundle\Command;

use AppBundle\Entity\Athlete;
use AppBundle\Entity\Competitor;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

use Symfony\Component\Console\Command\Command;



class CsvImportCommand extends ContainerAwareCommand
{
    /**
     * CsvImportCommand constructor.
     * @var EntityManagerInterface
     */

    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct($em);

        $this->em  = $em;

    }

    protected function configure()
    {
        $this
            ->setName('csv')
            ->setDescription('Imports data from CSV')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);

        $io->title('Attempting to import the feed...');

        $athlete = new Athlete();

        $athlete->setFirstName('John');
        $athlete->setLastName('Test');
        $athlete->getDateOfBirth(new \DateTime());
        $athlete->setWeight(123);

        $this->em->persist($athlete);

        $competitor = new Competitor();

        $competitor
            ->setCategory('cat a')
            ->setCompetition('comp 1')
            ;

        $this->em->persist($competitor);


        $athlete->setCompetitor($competitor);

        $this->em->flush();



        $io->success('Everything is ok!');
    }

}
