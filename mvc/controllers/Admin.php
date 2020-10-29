<?php
class Admin extends Controller
{
    public $Employee;
    public $StatusModel;
    public function  __construct()
    {
        $this->Employee = $this->model("EmployeeModel");
        $this->StatusModel= $this->model("StatusModel");
    }
    function SayHi()
    {
            $this->viewadmin("admin",[
                "Page"=> "main"
            ]);
        //echo "Trang Admin";
    }
    function  addproduct()
    {
        if(isset($_POST["save"]))
        {
//            $email = $_POST['email'];
//            $password = $_POST['password'];
            //echo $password;
        }
        //model
        $this->viewadmin("admin",[
            "Page"=> "addproduct",
        ]);
    }
    function  employee()
    {

        //model
        $this->viewadmin("admin",[
            "Page"=> "employee",
            "Employee"=>$this->Employee->ShowEmployee()
        ]);
    }
    function  addemployee()
    {
        //model
        $this->viewadmin("admin",[
            "Page"=> "addemployee",
            "Status"=>$this->StatusModel->ShowStatus()
        ]);
    }

}