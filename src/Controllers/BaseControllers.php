<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 02.03.19
 * Time: 16:46
 */

abstract class BaseControllers
{
    protected $view;
    protected $model;


    public function __construct()
    {
        $this->view = new Render();
    }
}