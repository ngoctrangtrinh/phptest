<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ngoct
 * Date: 8/1/17
 * Time: 12:39 AM
 * To change this template use File | Settings | File Templates.
 */

require_once('src/controllers/C_smarty.php');
require_once('src/models/M_book_table.php');
require_once('src/models/M_impression_table.php');

class C_book
{
    private $m_book_table;

    public function __construct()
    {
        $this->m_book_table= new M_book_table();
        $this->m_impression_table = new M_impression_table();

    }
    public function listAction()
    {

        $smarty = new C_smarty;
        $smarty->__construct();
        $msg = "";
        if(isset($_GET['addbook']) && $_GET['addbook'] == 'success' )
        $msg = "Add book successfully.";
        if(isset($_GET['deletebook']) && $_GET['deletebook'] == 'success' )
            $msg = "Delete book and its comments successfully.";
        if(isset($_GET['editbook']) && $_GET['editbook'] == 'success' )
            $msg = "Edit book successfully.";
        $smarty->assign('msg',$msg);
        $bookList = $this->m_book_table->getAllBook();
        $smarty->assign('bookList',$bookList);
        $smarty->display('book_list.tpl');

    }
    public function addAction()
    {
        $smarty = new C_smarty;
        $smarty->__construct();
        if(isset($_POST['submit']))
        {
            $bookData = array(
                'name'=>$_POST['name'],
                'publisher'=>$_POST['publisher'],
                'page'=>$_POST['page'],
            );
            $bookId = $this->m_book_table->addBook($bookData);
            if($bookId)
            {
                header('location:' . path . '/index.php?&addbook=success');
            }
            else
                echo '<h3>Fail. Please check again your data again.</h3>';
        }
        $smarty->display('book_add.tpl');
    }
    public function detailAction()
    {
        $smarty = new CustomSmarty;
        $smarty->__construct();
        if(isset($_GET['user_id']))
        {
            $userId = $_GET['user_id'];
            $userInfo = $this->m_user_table->getUser($userId);
            if($userInfo)
            {
                $smarty->assign('userInfo',$userInfo);
                $smarty->display('user_detail.tpl');
            }
        }
    }
    public function editAction()
    {

        $smarty = new C_smarty;
        $smarty->__construct();
        if(isset($_GET['book_id']))
        {
            $bookId = $_GET['book_id'];
            $bookInfo = $this->m_book_table->getBookById($bookId);
            $smarty->assign('bookInfo',$bookInfo);
        }
        if(isset($_POST['submit']))
        {
            $bookData = array(
                'name'=>$_POST['name'],
                'publisher'=>$_POST['publisher'],
                'page'=>$_POST['page'],
                'id'=>$_GET['bookId'],
            );
            $result = $this->m_book_table->updateBookById($bookData);
            if($result)
            {
                header('location:' . path . '/index.php?&editbook=success');
            }
            else
                echo '<h3>Fail. Please check again your data again.</h3>';
        }

        $smarty->display('book_edit.tpl');
    }
   public function deleteAction()
   {
       $smarty = new C_smarty;
       $smarty->__construct();
       if(isset($_GET['book_id']))
       {
           $bookId = $_GET['book_id'];
           $result1 = $this->m_book_table->deleteBookById($bookId);
           $result2 = $this->m_impression_table->deleteImpressionByBookId($bookId);
       }
       if($result1&&$result2)
       {
           header('location:' . path . '/index.php?&deletebook=success');
       }
       else
           echo '<h3>Fail.Cannot delete your book.</h3>';
   }
}