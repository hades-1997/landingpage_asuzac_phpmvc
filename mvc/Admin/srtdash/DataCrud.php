<?php
include("ShowMess.php");
class DataCrud
{
    private $dns = "mysql:host=localhost;dbname=vancn;charset=utf8";
    private $username = "root";
    private $password = "";
    private $pdo;
    private $stmt;

    public function __construct()
    {
        try {
            $this->pdo = new PDO($this->dns, $this->username, $this->password);
        } catch (Exception $e) {
            ShowMessage::showInfo($e->getMessage());
        }
    }

    public function closeConnec(){
        $this->pdo = null;
    }

    public function selectData($statement){ //$statement = "select * from product"
        try {
            $this->stmt = $this->pdo->prepare($statement);
            $this->stmt->execute();
            return $this->stmt;
        } catch (Exception $e) {
            ShowMessage::showInfo($e->getMessage());
        }
    }

    public function selectDataParam($statement,$param){ //$statement = "select * from product where id=? or name=?"
        try {
            $this->stmt = $this->pdo->prepare($statement);
            $this->stmt->execute($param);
            return $this->stmt;
        } catch (Exception $e) {
            ShowMessage::showInfo($e->getMessage());
        }
    }

    public function updateParam($statement,$param)
    {
        try{
            $this->stmt = $this->pdo->prepare($statement);
            $this->stmt->execute($param);
            return true;
        }catch (Exception $e){
            ShowPhp::showMessage($e->getMessage());
        }
    }
    public function LoginParam($statement,$param)
    {
        try{ //$statement = "select * from product where id=? or name=?"
            $this->stmt = $this->pdo->prepare($statement);
            $this->stmt->execute($param);
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }catch (Exception $e){
            ShowPhp::showMessage($e->getMessage());
        }
    }
}
