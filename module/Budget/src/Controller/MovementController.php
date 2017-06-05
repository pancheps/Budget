<?php

namespace Budget\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class MovementController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}