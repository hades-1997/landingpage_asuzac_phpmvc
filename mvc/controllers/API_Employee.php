<?php
class API_Employee extends Controller
{
    public function Status()
    {
        $employee= $this->model("StatusModel");
        $epe= $employee->ShowStatus();
        $arry= [];

        while ($e = mysqli_fetch_array($epe))
        {
            array_push($arr, new employee(
               $e["id_decentralization"]
            ));
        }
        echo json_encode($arr);
    }
}