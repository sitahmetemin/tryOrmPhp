<?php

namespace ORMT;


use DB\DBAccess;

class ormTools extends DBAccess
{
    protected  $entity;

    function where($sorgu){

    }

    function get(){

    }

    function all(){
        $access = new DBAccess();
        $conn = $access->startConn();

        $conn->query("SELECT * FROM {$this->entity}");
    }

    function take($number, $order = "decs"){
        $access = new DBAccess();
        $conn = $access->startConn();

        $conn->query("SELECT * FROM {$this->entity} ORDER BY {$order} LIMIT {$number}");
    }

    function limit($limit){

        $access = new DBAccess();
        $conn = $access->startConn();

        $conn->query("SELECT * FROM {$this->entity} LIMIT {$limit}");

    }

    function eager(){

    }
}