<?php
include_once('src/models/database.php');
class M_impression_table extends Database
{

    public function addImpression($data)
    {
        $query='INSERT INTO impression (name, publisher, page) VALUES (?,?,?)';
        $this->setQuery($query);
        $this->execute(array($data['name'],$data['publisher'],$data['page']));
        return $this->lastInsertId();
    }
    public function getAllImpression()
    {
        $this->setQuery('select * from impression where 1');
        return $this->loadAllRow(array());
    }
    public function getImpressionById($impression_Id)
    {
        $this->setQuery('select * from impression where id=?');
        return $this->loadRow(array($impression_Id));
    }
    public function getImpressionByBookId($id)
    {
        $this->setQuery('select * from impression where book_id = ?');
        return $this->loadAllRow(array($id));
    }

}