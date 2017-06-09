<?php

namespace Budget\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Element\DateTime;
use Zend\Validator\Date;

/**
 * Class User
 * @package User\Entity
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(name="username", type="string", nullable=false, length=100)
     */
    protected $username;
    /**
     * @var string
     * @ORM\Column(name="password", type="string", nullable=false, length=100)
     */
    protected $password;
    /**
     * @var string
     * @ORM\Column(name="familyname", type="string", nullable=false, length=100)
     */
    protected $familyname;
//    /**
//     * @var boolean
//     * @ORM\Column(name="isParent", type="boolean", nullable=false)
//     */
//    protected $isParent;
//    /**
//     * @var DateTime
//     * @ORM\Column(name="birthdate", type="datetime", nullable=false)
//     */
//    protected $birthdate;

    public function __construct()
    {
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __set($name, $value)
    {
        $this->$name = $value;
    }
}