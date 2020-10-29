<?php
class InsertRegisterModel extends Database
{
    public function InsertRegister($fullname,$email,$password,$status)
    {
        $qr = "INSERT INTO admin VALUES(null,'$fullname','$email','$password','$status')";
        $result = false;
        if(mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return json_encode($result);
    }
    public function checkEmail($un)
    {
        $qr="SELECT id FROM admin 
            WHERE email='$un'";
        $rows = mysqli_query($this->con, $qr);
        $kq='';
        if(mysqli_num_rows($rows)>0)
        {
            $kq = "Email already exists !";
        }
        return json_encode($kq);
    }

}