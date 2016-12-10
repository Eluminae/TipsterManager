<?php

namespace Tipster\FrontBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tipster\FrontBundle\Entity\Repository\UserRepository")
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="pseudonym", type="string", length=255)
     */
    private $pseudonym;


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;
}
