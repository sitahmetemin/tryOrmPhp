<?php


namespace EnvResolver;


class Environment
{
    function get($value){
        $env = json_decode(fopen('../env.json', 'r'));

        fclose($env);

        return $env["$value"];
    }
}