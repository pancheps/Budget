<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ApplicationController extends AbstractActionController
{
    public function indexAction()
    {
        echo "Seeee";
        //return new ViewModel();
    }
}