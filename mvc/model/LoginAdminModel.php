<?php
class LoginAdminModel extends Database
{
    public function Login($email,$password)
    {

        $query = "SELECT * FROM admin WHERE email='$email'";
        $rows = mysqli_query($this->con, $query);
        $num = mysqli_num_rows($rows);
        //print_r($num) ;
        //print_r ($rows);
        if($num>0)
        {
        $qr = mysqli_fetch_array($rows);
        $_SESSION["email"]= $qr["email"];
        $_SESSION["status"]= $qr["status"];
        $_COOKIE["role"]= $qr["status"];
        $password_hash = $qr['password'];
        $test = password_verify($password, $password_hash);
        if($test && $qr["status"]==1 )
            {
                session_start();
                $_SESSION['email'] = $qr["email"];
                $_SESSION["role"]= $qr["status"];
                //return json_encode($_COOKIE["role"]);
               header("Location:http://localhost:8080/landingpage_asuzac/admin");
            }
        else if ($test && $qr["status"]==2 )
        {

            session_start();
            $_SESSION['email'] = $qr["email"];
            header("Location:http://localhost:8080/landingpage_asuzac/Home");
        }
        else if ($test && $qr["status"]==3 )
        {

            session_start();
            $_SESSION['email'] = $qr["email"];
            header("Location:http://localhost:8080/landingpage_asuzac/Home");
        }
        else
            {
                header("Location:http://localhost:8080/landingpage_asuzac/login");
            }
       // return json_encode($result);
       // print_r(json_encode($result));
        }
    }
}
