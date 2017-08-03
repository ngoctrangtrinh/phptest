<?php /* Smarty version 3.1.27, created on 2017-08-03 11:04:47
         compiled from "src\views\templates\book_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:253385983034f7b41a5_85365513%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c53738d9709b586f7d686fa9e99d589844ff3cc' => 
    array (
      0 => 'src\\views\\templates\\book_list.tpl',
      1 => 1501757532,
      2 => 'file',
    ),
    'dcc879eb020078fca13513fcb4a5e06070d0bff3' => 
    array (
      0 => 'src\\views\\templates\\layout\\layout.tpl',
      1 => 1501739359,
      2 => 'file',
    ),
    '588d7f4a6912d506bc173075c9340751ded0e39a' => 
    array (
      0 => 'src\\views\\templates\\layout\\header.tpl',
      1 => 1501739296,
      2 => 'file',
    ),
    'e2fe0ec781843bececb5c9f6fb014aa4da5b255a' => 
    array (
      0 => 'e2fe0ec781843bececb5c9f6fb014aa4da5b255a',
      1 => 0,
      2 => 'string',
    ),
    'aac1e8295fc8e77773afe628afab68e7d128dedf' => 
    array (
      0 => 'src\\views\\templates\\layout\\footer.tpl',
      1 => 1501743379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '253385983034f7b41a5_85365513',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5983034fb7be72_43442021',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5983034fb7be72_43442021')) {
function content_5983034fb7be72_43442021 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '253385983034f7b41a5_85365513';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '48725983034f9006a7_50159553', 'content_5983034f8fb221_58209397');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '253385983034f7b41a5_85365513';
?>

    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
        <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3>
    <?php }?>
    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/book.php?type=add" class="btn btn-primary">Add new book</a></h3>
    <?php if (isset($_smarty_tpl->tpl_vars['bookList']->value)) {?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Publisher</th>
                <th>Page</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['bookList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['b'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['b']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
$foreach_b_Sav = $_smarty_tpl->tpl_vars['b'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['b']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['b']->value['publisher'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['b']->value['page'];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/book.php?type=edit&book_id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="btn btn-primary">Edit</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/book.php?type=delete&book_id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="btn btn-primary" id="book_delete">Delete</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/impression.php?type=list&book_id=<?php echo $_smarty_tpl->tpl_vars['b']->value['id'];?>
" class="btn btn-primary">View Impressions</a>
                    </td>
                </tr>

            <?php
$_smarty_tpl->tpl_vars['b'] = $foreach_b_Sav;
}
?>
            
                
            
            </tbody>

        </table>
        <?php } else { ?>
        <h3>There is no book.</h3>
    <?php }?>



<!--footer-->
<?php /*  Call merged included template "layout/footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '318795983034fb5aba9_56338928', 'content_5983034fb564b1_15131352');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:48725983034f9006a7_50159553%%*/
if ($_valid && !is_callable('content_5983034f8fb221_58209397')) {
function content_5983034f8fb221_58209397 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '48725983034f9006a7_50159553';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Trang Trinh</title>

    <!-- Bootstrap core CSS and Js -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/public/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/public/dist/js/jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/public/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head><?php
/*/%%SmartyNocache:48725983034f9006a7_50159553%%*/
}
}
?><?php
/*%%SmartyHeaderCode:318795983034fb5aba9_56338928%%*/
if ($_valid && !is_callable('content_5983034fb564b1_15131352')) {
function content_5983034fb564b1_15131352 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '318795983034fb5aba9_56338928';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:318795983034fb5aba9_56338928%%*/
}
}
?>