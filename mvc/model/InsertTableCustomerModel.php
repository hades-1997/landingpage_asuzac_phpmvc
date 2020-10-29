<?php
class InsertTableCustomerModel extends Database
{
    public function InsertCustomer($name, $email, $suport)
    {
       // INSERT INTO `email` ( `name`, `email`, `suport`) VALUES ( 'Test', 'test@gmail.com', 'thanh cong');
        $qr = "INSERT INTO email VALUES(null,'$name','$email','$suport')";
        $result = false;
        if(mysqli_query($this->con, $qr))
        {
            $result = true;
        }
        return json_encode($result);
    }
//    public function checkUsername($un)
//    {
//        $qr="SELECT id FROM email
//            WHERE username='$un'";
//        $rows = mysqli_query($this->con, $qr);
//        $kq = false;
//        if(mysqli_num_rows($rows)>0)
//        {
//            $kq = true;
//        }
//        return json_encode($kq);
//    }
}