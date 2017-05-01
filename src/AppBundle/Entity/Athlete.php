<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Athlete
 *
 * @ORM\Table(name="athlete")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AthleteRepository")
 */
class Athlete
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

//    /**
//     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Competitor")
//     * @ORM\JoinColumn(name="competitor_id", referencedColumnName="id")
//     */
//    private $competitor;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;

//    /**
//     * @var \DateTime
//     *
//     * @ORM\Column(name="date_of_birth", type="datetime")
//     */
//    private $dateOfBirth;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Athlete
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Athlete
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

//    /**
//     * Set dateOfBirth
//     *
//     * @param \DateTime $dateOfBirth
//     *
//     * @return Athlete
//     */
//    public function setDateOfBirth($dateOfBirth)
//    {
//        $this->dateOfBirth = $dateOfBirth;
//
//        return $this;
//    }

//    /**
//     * Get dateOfBirth
//     *
//     * @return \DateTime
//     */
//    public function getDateOfBirth()
//    {
//        return $this->dateOfBirth;
//    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Athlete
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

//    /**
//     * @return mixed
//     */
//    public function getCompetitor()
//    {
//        return $this->competitor;
//    }
//
//    /**
//     * @param Competitor $competitor
//     *
//     * @return Athlete
//     */
//    public function setCompetitor(Competitor $competitor)
//    {
//        $this->competitor = $competitor;
//
//        return $this;
//    }
}

