<?php

namespace Tipster\FrontBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tipster\FrontBundle\Entity\Repository\ValidationRepository")
 */
class Validation
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
     * @var bool
     *
     * @ORM\Column(name="isValid", type="bool")
     */
    private $isValid;
}
