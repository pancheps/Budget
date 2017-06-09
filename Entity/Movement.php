<?php

namespace Budget\Entity;

class Movement
{
    protected $id;
    protected $user;
    protected $catalog;
    protected $amount;
    protected $date;
    protected $description;

    public function __construct($id, $user, $catalog, $amount, $date, $descr)
    {
        $this->id = $id;
        $this->user = $user;
        $this->catalog = $catalog;
        $this->amount = $amount;
        $this->date = $date;
        $this->description = $descr;
    }

    public function __get($name)
    {
        return $this->$name;
    }
}