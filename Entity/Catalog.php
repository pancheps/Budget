<?php

namespace Budget\Entity;

/**
 * @Entity
 */
class Catalog
{
    protected $id;
    protected $name;
    protected $isMandatory;
    protected $isFixed;
    protected $isExpense;

    public function __construct($id, $name, $ismandatory, $isfixed, $isexpense)
    {
        $this->id = $id;
        $this->name = $name;
        $this->isMandatory = $ismandatory;
        $this->isFixed = $isfixed;
        $this->isExpense = $isexpense;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}