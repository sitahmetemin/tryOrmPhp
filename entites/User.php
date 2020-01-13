<?php


namespace Entities;


use ORMT\ormTools;

class User extends ormTools
{
    protected $table = "User";

    protected $fillable = [
        "name",
        "lastname",
        "pass"
    ];
}