<?php
class Login extends Controller
{
    public $LoginAdmin;
    public function __construct()
    {
        $this->LoginAdmin = $this->model("LoginAdminModel");
    }
    public function SayHi()
    {
        $this->viewlogin("login");
    }
    public function LoginUser()
    {
        if(isset($_POST["login"]))
        {
            $email = $_POST['email'];
            $password = $_POST['password'];
            //echo $password;
        }
        // login database bang user
        $kq= $this->LoginAdmin->Login($email,$password);
        //echo $kq;
//        if($kq==1){
//
//            header("Location:http://localhost:8080/landingpage_asuzac/admin");
//        }
//        elseif ($kq==2)
//        {
//            header("Location:http://localhost:8080/landingpage_asuzac/Home");
//        }
//        else
//        {
//            header("Location:http://localhost:8080/landingpage_asuzac/login");
//        }
    }
}