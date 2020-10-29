<?php
class Alias extends Controller
{
    public $Checkslug;
    public function __construct()
    {
        $this->Checkslug= $this->model("EmployeeModel");
    }

    public function alias()
    {

    }
}