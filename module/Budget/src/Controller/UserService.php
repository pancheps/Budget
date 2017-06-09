<?php

namespace Budget\Service;

use Budget\Entity\User;
use Zend\Http\Request;
use Zend\Mvc\Controller\Plugin\Params;
use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Budget\Form\UserForm;
use Doctrine\ORM\EntityManager;

class UserService
{
    /**
     * @var EntityManager
     */
    private $em;
    private $container;

    public function __construct(EntityManager $container)
    {
        $this->em = $container;
    }

    public function populate(Params $dataArray)
    {
        $user = new User();
        $user->__set('id', $dataArray->fromPost('id'));
        $user->__set('username', $dataArray->fromPost('username'));
        $user->__set('password', $dataArray->fromPost('password'));
        $user->__set('familyname', $dataArray->fromPost('familyname'));
        return $user;
    }

    public function add(Params $dataArray)
    {
        $popuser = $this->populate($dataArray);
        $this->em->persist($popuser);
        $this->em->flush();
    }

    public function fetchAllRecords()
    {
        return $this->em->getRepository('Budget\Entity\User')->findAll();
    }

    public static function edit()
    {

    }

    public static function delete()
    {

    }
}