<?php
    include("../DataCrud.php");
    $db = new DataCrud();
    if (!empty($_POST['action'])) {
        $id = $_POST['action'];

        $statement = "DELETE FROM eventvalve WHERE id = ?";
        $param = [ 
            $id
        ];
        $stmt = $db -> updateParam($statement, $param);
    }
    header('Location: ./employee.php');
?>
