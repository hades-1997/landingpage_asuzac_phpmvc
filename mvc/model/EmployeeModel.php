<?php
class EmployeeModel extends Database
{
    public function ShowEmployee()
    {
        //SELECT * FROM admin INNER JOIN decentralization ON admin.status = decentralization.id_decentralization
        //WHERE id_decentralization= 1
        $stmt= "SELECT * FROM admin INNER JOIN decentralization ON admin.status = decentralization.id_decentralization";
        return mysqli_query($this->con, $stmt);
        $mang = array();
        while ($row = mysqli_fetch_array($mang))
        {
            $mang[] = $row;
        }
        return json_encode($mang);
    }

}
