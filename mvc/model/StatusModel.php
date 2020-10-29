<?php
class StatusModel extends Database
{
    public  function ShowStatus()
    {
        $qr= "SELECT * FROM decentralization ";

        return mysqli_query($this->con, $qr);
//        $arr = array();
//        while ($row = mysqli_fetch_array($arr))
//        {
//            $arr[] = $row;
//        }
//        echo json_encode($arr);
    }
}