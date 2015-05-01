<?php

namespace Kamran\TestBundle\Entity;
 
use Doctrine\ORM\Mapping as ORM;
 
/**
 * Projects
 *
 * @ORM\Table(name="posts")
 */
class Post
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    private $tags = array();
 
    public function getTags()
    {
        return $this->tags;
    }
 
    public function setTags(array $tags)
    {
        $this->tags = $tags;
    }
 
}