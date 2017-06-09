<?php

namespace Budget\Form;

use Zend\Form\Form;

class UserForm extends Form
{
    public function __construct($name = null)
    {
        parent::__construct('user');
        $this->add([
           'name' => 'id',
            'type' => 'Hidden'
        ]);
        $this->add([
           'name' => 'username',
            'type' => 'Text',
            'options' => [
                'label' => 'Username'
            ]
        ]);
        $this->add([
            'name' => 'password',
            'type' => 'Password',
            'options' => [
                'label' => 'Password'
            ]
        ]);
        $this->add([
            'name' => 'passwordconfirm',
            'type' => 'Password',
            'options' => [
                'label' => 'Password Confirm'
            ]
        ]);
        $this->add([
            'name' => 'familyname',
            'type' => 'Text',
            'options' => [
                'label' => 'Last Name'
            ]
        ]);
//        $this->add([
//            'name' => 'isParent',
//            'type' => 'Checkbox',
//            'options' => [
//                'label' => 'Parent?',
//                'use_hidden_element' => true,
//                'checked_value' => '1',
//                'unchecked_value' => '0'
//            ]
//        ]);
//        $this->add([
//            'name' => 'birthdate',
//            'type' => 'Date',
//            'options' => [
//                'label' => 'Birth Date'
//            ]
//        ]);
        $this->add([
            'name' => 'submit',
            'type' => 'Submit',
            'attributes' => [
                'value' => 'Send',
                'id' => 'subitbutton'
            ]
        ]);
    }
}