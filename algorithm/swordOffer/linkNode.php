<?php
/**
 * Created by PhpStorm.
 * User: liukai
 * Date: 20/3/31
 * Time: 18:24
 */

class linkNode{

    public $value;

    public $next;

    public function __construct($value)
    {
        $this->value = $value;
    }
}