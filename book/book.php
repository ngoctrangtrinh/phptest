<?php
require_once("src/controllers/C_book.php");
$C_book= new C_book();
if(isset($_GET['type']))
{
    switch($_GET['type'])
    {
        case'add':
            $C_book->addAction();
            break;
        case 'edit':
            $C_book->editAction();
            break;
        case 'delete':
            $C_book->deleteAction();
            break;
    }
}
?>