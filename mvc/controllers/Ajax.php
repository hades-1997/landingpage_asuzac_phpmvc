<?php
class Ajax extends Controller
{
    public $UserModel;
    public $SessionAdmin;
    public function __construct()
    {
        $this->UserModel = $this->model("InsertRegisterModel");
        $this->SessionAdmin= $this->model("EmployeeModel");
    }
    public function checkEmail()
    {
        $un = $_POST["un"];

     echo $this->UserModel->checkEmail($un);
    }

    public function checkAdmin()
    {
        $pq = $_POST["pq"];
        echo $this->SessionAdmin->checkAdmin($pq);
    }
}