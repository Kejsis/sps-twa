<?php

namespace EshopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of User
 *
 * @author Tomáš
 * @ORM\Entity()
 */
class User {
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
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
     * @ORM\Column(type="string", length=255)
     */
    private $password;
    
    /**
     *@ORM\Column(type="string", length=16) 
     */
    private $role;
    
    /**
     * @ORM\Column(type="string", length=128)
     * @ORM\JoinColumn(nullable=true)
     */
    private $address;
    
    /**
     * @ORM\Column(type="string", length=16)
     * @ORM\JoinColumn(nullable=true)
     */
    private $phone;
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    
     /**
     * @return mixed
     */
    public function getFirsName()
    {
        return $this->firstname;
    }
    
    /**
     * @param mixed $firstname
     * @return User
     */
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    
     /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastname;
    }
    
    /**
     * @param mixed $lastname
     * @return User
     */
    public function setLastName($lastname)
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
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }
    
     /**
     * @param mixed $password
     * @return User
     */
     public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    
    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }
    
    /**
     * @param mixed $role
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;
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
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }


}
