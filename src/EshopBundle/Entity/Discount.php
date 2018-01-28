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
class Discount {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $name;
    
    /**
     * @ORM\Column(type="text")
     */
    private $description;
    
    /**
     * @ORM\Column(type="float")
     */
    private $percent;
    
    /**
     * @ORM\Column(type="string", length=32)
     */
    private $code;
    
    /**
     * @ORM\Column(type="boolean", options={"default": true})
     */
    private $applied;
           
    /**
     * @ORM\Column(type="date")
     * @ORM\JoinColumn(nullable=true,referencedColumnName="id")
     */
    private $validityto;
    
    /**
     * @return mixed
     */
    public function getId() 
    {
        return $this->id;
    }

     /**
     * @param mixed $id
     * @return Discount
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
     * @return Discount
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return Discount
     */
    public function setDescription($description) 
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPercent() 
    {
        return $this->percent;
    }

     /**
     * @param mixed $percent
     * @return Discount
     */
    public function setPercent($percent) 
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

     /**
     * @param mixed $code
     * @return Discount
     */
    public function setCode($code) 
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApplied()
    {
        return $this->applied;
    }

     /**
     * @param mixed $applied
     * @return Discount
     */
    public function setApplied($applied) 
    {
        $this->applied = $applied;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValidityto()
    {
        return $this->validityto;
    }

     /**
     * @param mixed $validityto
     * @return Discount
     */
    public function setValidityto($validityto)
    {
        $this->validityto = $validityto;
        return $this;
    }


}
