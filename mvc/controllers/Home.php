<?php
class Home extends Controller
{
    public $AsuzacModel;
    public $InsertTableCustomerModel;

    public function __construct()
    {
        $this->InsertTableCustomerModel = $this->model("InsertTableCustomerModel");
    }
    function SayHi()
    {
        $this->view("home", [
            "Page"=>"asuzac"
        ]);
    }
    function  Show($a,$b)
    {
        //model
       // $this->AsuzacModel = $this->model("Asuzac");
        //view

    }
// insert table customer page  home
    function InsertTableCustomer()
    {
        if(isset($_POST["submit_customer"]))
        {
            $name = $_POST['name'];
            $email= $_POST['email'];
            $suport = $_POST['suport'];
//            print_r($suport);
        }
        $kq = $this->InsertTableCustomerModel->InsertCustomer($name, $email, $suport);
      //  print_r($kq);
        // show kq tra ve
        $this->view("home",[
            "Page"=>"asuzac",
            "result"=>$kq
        ]);
    }
}