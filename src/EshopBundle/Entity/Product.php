<?php
namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Product
 *
 * @author kmento
 * @ORM\Entity()
 */
class Product {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string",length=128, nullable=true)
     */
    private $name;
    
    /**
     *  @ORM\Column(type="string", length=128, unique=true)
     */
    private $url;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="float")
     */
    private $price;
    
    /**
     * @ORM\ManyToOne(targetEntity="EshopBundle\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(name="category_id", nullable=true, referencedColumnName="id")
     */
    private $category;
    
    /**
     * @ORM\Column(type="boolean", options={"default": true})
     */
    private $active;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $stock;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * @param mixed $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * @param mixed $url
     * @return Product
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @param mixed $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }
    
    /**
     * @param mixed $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * @param mixed $category
     * @return Product
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }
    
    /**
     * @param mixed $active
     * @return Product
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }
    
    /**
     * @param mixed $stock
     * @return Product
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
        return $this;
    }


}
