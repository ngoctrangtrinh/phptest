<?php
require_once("src/controllers/C_impression.php");
$C_impression= new C_impression();
if(isset($_GET['type']))
{
    switch($_GET['type'])
    {
        case'list':
            $C_impression->listAction();
            break;
        case'add':
            $C_impression->addAction();
            break;
        case 'edit':
            $C_impression->editAction();
            break;
        case 'delete':
            $C_impression->deleteAction();
            break;
    }
}
?>