<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ngoct
 * Date: 8/1/17
 * Time: 12:39 AM
 * To change this template use File | Settings | File Templates.
 */

require_once('src/controllers/C_smarty.php');
require_once('src/models/M_impression_table.php');

class C_impression
{
    private $m_impression_table;

    public function __construct()
    {
        $this->m_impression_table = new M_impression_table();

    }
    public function listAction()
    {
        $smarty = new C_smarty;
        $smarty->__construct();
        $msg = "";
        if(isset($_GET['addimpression']) && $_GET['addimpression'] == 'success' )
            $msg = "Add impression successfully.";
        if(isset($_GET['deleteimpression']) && $_GET['deleteimpression'] == 'success' )
            $msg = "Delete impression successfully.";
        if(isset($_GET['editimpression']) && $_GET['editimpression'] == 'success' )
            $msg = "Edit impression successfully.";
        $smarty->assign('msg',$msg);
        if(isset($_GET['book_id']))
        {
            $book_id = $_GET['book_id'];
            $impressionList = "";
            $impressionList = $this->m_impression_table->getImpressionByBookId($book_id);
            if($impressionList)
            {
                $smarty->assign('impressionList',$impressionList);

            }
            $smarty->assign('bookId',$book_id);
            $smarty->display('impression_list.tpl');
        }
    }
    public function addAction()
    {
        $smarty = new C_smarty;
        $smarty->__construct();
        if(isset($_POST['submit']))
        {
            $book_id = $_GET['book_id'];
            $impressionData = array(
                'name'=>$_POST['comment'],
                'book_id'=>$book_id,
            );
            $impressionId = $this->m_impression_table->addImpression($impressionData);
            if($impressionId)
            {
                header('location:' . path . '/impression.php?type=list&book_id='.$book_id);
            }
            else
                echo '<h3>Fail. Please check again your data again.</h3>';
        }
        $smarty->assign('bookId',$_GET['book_id']);
        $smarty->display('impression_add.tpl');
    }

    public function editAction()
    {
        $smarty = new C_smarty;
        $smarty->__construct();
        if(isset($_GET['id']))
        {
            $impressionId = $_GET['id'];
            $impressionInfo = $this->m_impression_table->getimpressionById($impressionId);
            $smarty->assign('impressionInfo',$impressionInfo);
        }
        if(isset($_POST['submit']))
        {
            $i_id = $_GET['i_id'];
            $b_id = $_GET['b_id'];
            $impressionData = array(
                'name'=>$_POST['comment'],
                'id'=>$i_id,
            );
            $result = $this->m_impression_table->updateImpressionById($impressionData);
            if($result)
            {
                header('location:' . path . '/impression.php?type=list&book_id='.$b_id);
            }
            else
                echo '<h3>Fail. Please check again your data again.</h3>';
        }

        $smarty->display('impression_edit.tpl');
    }
    public function deleteAction()
    {
        $smarty = new C_smarty;
        $smarty->__construct();
        if(isset($_GET['id']))
        {
            $impressionId = $_GET['id'];
            $impression = $this->m_impression_table->getImpressionById($impressionId);
            $book_id=$impression['book_id'];
            $result = $this->m_impression_table->deleteimpressionById($impressionId);
        }
        if($result)
        {
            header('location:' . path . '/impression.php?type=list&book_id='.$book_id.'&deleteimpression=success');
        }
        else
            echo '<h3>Fail. Cannot delete your impression.</h3>';
    }
}