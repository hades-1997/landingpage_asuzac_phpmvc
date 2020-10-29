<?php
class Register extends Controller
{
    public $InsertRegisterModel;
    public function __construct()
    {
       $this->InsertRegisterModel = $this->model("InsertRegisterModel");
    }
    public function SayHi(){
        $this->viewregister("register");
    }
    public function KhachHangDangKy()
    {
        // get data khach hang nhap
        if(isset($_POST["register"]))
        {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['confirm_password'];
            $password = password_hash($password, PASSWORD_DEFAULT);
            $status= '3';
            //echo $status;
        }
        // insert database bang user
         $kq = $this->InsertRegisterModel->InsertRegister($fullname,$email,$password,$status);

        // Show chu ok or fail
        $this->viewregister("register",[
            "result"=>$kq
        ]);
    }
}