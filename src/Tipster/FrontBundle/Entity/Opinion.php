<?php

namespace Tipster\FrontBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tipster\FrontBundle\Entity\Repository\OpinionRepository")
 */
class Opinion
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
     * @ORM\Column(name="isLiked", type="bool")
     */
    private $isLiked;
}
