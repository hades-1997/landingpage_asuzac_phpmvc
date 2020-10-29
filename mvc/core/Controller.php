<?php
class Controller
{
    public function model($model)
    {
        require_once "./mvc/model/".$model.".php";
           return new $model;
           //view
    }
    public  function view($view, $data=[])
    {
        require_once "./mvc/views/".$view.".php";
    }
// view admin
    public  function viewadmin($viewadmin, $data=[])
    {
        require_once "./mvc/Admin/".$viewadmin.".php";
    }
    // view register
    public  function viewregister($viewregister, $data=[])
    {
        require_once "./mvc/Admin/".$viewregister.".php";
    }
    //view login
    public  function viewlogin($viewlogin, $data=[])
    {
        require_once "./mvc/Admin/".$viewlogin.".php";
    }
}