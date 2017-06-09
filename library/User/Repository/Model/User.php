<?php

namespace Budget\User\Repository\Model;

use Doctrine\ORM\Mapping as ORM;
use Zend\Form\Element\DateTime;
use Zend\Validator\Date;

/**
 * Class User
 * @package User\Entity
 *
 * @ORM\Table(name="user")
 */
class User
{
    /**
     * @var int
     * @ORM\Column(name="id", type="integer", nullable="false")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;
    /**
     * @var string
     * @ORM\Column(name="username", type="string", nullable="false", length=100)
     */
    protected $username;
    /**
     * @var string
     * @ORM\Column(name="password", type="string", nullable="false", length=100)
     */
    protected $password;
    /**
     * @var string
     * @ORM\Column(name="familyname", type="string", nullable="false", length=100)
     */
    protected $familyname;
    /**
     * @var bool
     * @ORM\Column(name="isParent", type="bool", nullable="false")
     */
    protected $isParent;
    /**
     * @var DateTime
     * @ORM\Column(name="birthdate", type="datetime", nullable="false")
     */
    protected $birthdate;

    public function __construct($id, $username, $password, $familyname, $isparent, $birthdate)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->familyname = $familyname;
        $this->isParent = $isparent;
        $this->birthdate = $birthdate;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}