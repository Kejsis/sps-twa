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
 * 
 */
class ProductsInOrder {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Product", mappedBy="Product")
     */
    private $product;
    
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Order", mappedBy="Order")
     */
    private $order;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $quantity;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return ProductsInOrder
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     * @return ProductsInOrder
     */
    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     * @return ProductsInOrder
     */
    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return ProductsInOrder
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }




}
