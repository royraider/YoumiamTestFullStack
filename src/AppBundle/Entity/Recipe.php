<?php
/**
 * Created by PhpStorm.
 * User: benjamin
 * Date: 15/09/17
 * Time: 14:28
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="RecipeRepository")
 * @ORM\Table(name="recipe")
 */
class Recipe
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="id")
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", name="nb_likes")
     * @var int
     */
    private $nbLikes;

    /**
     * @ORM\Column(type="string", name="photo")
     * @var string
     */
    private $photo;

    /**
     * @ORM\Column(type="string", name="title")
     * @var string
     */
    private $title;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return Recipe
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLikes()
    {
        return $this->nbLikes;
    }

    /**
     * @param int $nbLikes
     * @return Recipe
     */
    public function setNbLikes($nbLikes)
    {
        $this->nbLikes = $nbLikes;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     * @return Recipe
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Recipe
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

}