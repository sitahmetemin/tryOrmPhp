<?php


namespace Entities;


use ORMT\ormTools;

class User extends ormTools
{

    function __construct()
    {
        $this->entity = 'User';
    }

    protected $name;
    protected $lastname;
    protected $pass;
    protected $email;
}