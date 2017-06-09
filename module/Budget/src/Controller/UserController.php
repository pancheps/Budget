<?php

namespace Budget\Controller;

use Budget\Service\UserService;
use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Budget\User\Repository\Model\User;
use Budget\Form\UserForm;

class UserController extends AbstractActionController
{

    private $userservice;

    public function __construct(UserService $container)
    {
        $this->userservice = $container;
    }

    public function indexAction()
    {
        return ['users' => $this->userservice->fetchAllRecords()];
    }

    public function addAction()
    {
        $form = new UserForm();
        $form->get('submit')->setValue('Add User');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $form->setData($request->getPost());
            if ($form->isValid()) {
                $this->userservice->add($this->params());
                $this->redirect()->toRoute('user');
            }
        }
        return ['form' => $form];
    }

    public function editAction()
    {

    }
}