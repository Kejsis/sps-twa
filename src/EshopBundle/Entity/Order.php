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
class Order {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $datecreate;
    
    /**
     * @ORM\Column(type="float")
     */
    private $fullprice;
    
    /**
     * @ORM\Column(type="text")
     */
    private $note;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $address;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private $firstname;
    
    /**
     * @ORM\Column(type="string", length=128)
     */
    private  $lastname;
    
    /**
     * @ORM\Column(type="string", length=255, unique=true)
     */
    private $email;
    
    /**
     * @ORM\Column(type="string", length=16)
     */
    private $phone;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $state;
    
    /**
     * @ORM\OneToMany(targetEntity="EshopBundle\Entity\Discount", mappedBy="order")
     * @ORM\JoinColumn(nullable=true,referencedColumnName="id")
     */
    private $discount;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Order
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getDatecreate() 
    {
        return $this->datecreate;
    }

    /**
     * @param mixed $datecreate
     * @return Order
     */
    public function setDatecreate($datecreate)
    {
        $this->datecreate = $datecreate;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getFullprice()
    {
        return $this->fullprice;
    }

    /**
     * @param mixed $fullprice
     * @return Order
     */
    public function setFullprice($fullprice)
    {
        $this->fullprice = $fullprice;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     * @return Order
     */
    public function setNote($note)
    {
        $this->note = $note;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     * @return Order
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Order
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Order
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Order
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return Order
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Order
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     * @return Order
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

}
