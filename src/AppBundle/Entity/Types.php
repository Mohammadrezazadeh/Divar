<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Types
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Types
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

    /**
     * @var string
     *
     * @ORM\Column(name="explane", type="text")
     */
    private $explane;
    /**
     *
     * @var type 
     * @ORM\OneToMany(targetEntity="Ads", mappedBy="category")
     */
    private $ads;
    
    /**
     *
     * @var type 
     * @ORM\OneToMany(targetEntity="Types", mappedBy="parent")
     */
    private $sub_title;
    /**
     *
     * @var type 
     * @ORM\ManyToOne(targetEntity="Types", inversedBy="sub_title")
     */
    private $parent;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Types
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set explane
     *
     * @param string $explane
     *
     * @return Types
     */
    public function setExplane($explane)
    {
        $this->explane = $explane;

        return $this;
    }

    /**
     * Get explane
     *
     * @return string
     */
    public function getExplane()
    {
        return $this->explane;
    }
}
