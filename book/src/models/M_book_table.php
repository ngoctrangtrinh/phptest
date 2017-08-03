<?php
include_once('src/models/database.php');
class M_book_table extends Database
{

    public function addBook($data)
    {
        $query='INSERT INTO book (name, publisher, page) VALUES (?,?,?)';
        $this->setQuery($query);
        $this->execute(array($data['name'],$data['publisher'],$data['page']));
        return $this->lastInsertId();
    }
    public function getAllBook()
    {
        $this->setQuery('select * from book where 1');
        return $this->loadAllRow(array());
    }
    public function getBookById($book_Id)
    {
        $this->setQuery('select * from book where id=?');
        return $this->loadRow(array($book_Id));
    }
    public function updateBookById($data)
    {
        $query='update book set name=? , publisher=? , page=? where id=? ';
        $this->setQuery($query);
        return $this->execute(array($data['name'],$data['publisher'],$data['page'],$data['id']));
    }
    public function deleteBookById($book_Id)
    {
        $this->setQuery('delete from book where id=?');
        return $this->execute(array($book_Id));
    }
}