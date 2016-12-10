<?php

namespace Tipster\FrontBundle\Entity;

/**
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Tipster\FrontBundle\Entity\Repository\TagRepository")
 */
class Tag
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
}
