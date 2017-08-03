<?php
define("DB_HOST","localhost");
define("DB_PORT","3306");
define("DB_NAME","books_db");
define("DB_USER","root");
define("DB_USER_PASSWORD","");

class Database
{
    protected $pdo='';
    protected $sql='';
    protected $stateMent='';
    public function Database()
    {
        try
        {
            $this->pdo=new PDO('mysql:host='.DB_HOST.'; dbname='.DB_NAME,DB_USER,DB_USER_PASSWORD);
            $this->pdo->query('set names utf8');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    public function setQuery($sql)
    {
        $this->sql=$sql;
    }

    public function execute($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option);
        return $this->stateMent;
    }

    public function loadAllRow($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option);
        return $this->stateMent->fetchAll(PDO::FETCH_ASSOC);
    }


    public function loadRow($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option);
        return $this->stateMent->fetch(PDO::FETCH_ASSOC);
    }

    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        }
        else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    public function lastInsertId()
    {
        return $this->pdo->lastInsertId();
    }
    public function CountAll($option=array())
    {
        $this->stateMent=$this->pdo->prepare($this->sql);
        $this->stateMent->execute($option=array());
        return $this->stateMent->rowCount();
    }
}
?>