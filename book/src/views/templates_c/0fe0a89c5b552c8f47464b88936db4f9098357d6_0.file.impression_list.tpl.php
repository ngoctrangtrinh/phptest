<?php /* Smarty version 3.1.27, created on 2017-08-03 10:53:17
         compiled from "src\views\templates\impression_list.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:284865983009de58ac8_05626972%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0fe0a89c5b552c8f47464b88936db4f9098357d6' => 
    array (
      0 => 'src\\views\\templates\\impression_list.tpl',
      1 => 1501757588,
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
    '0c394709eab6331169bd6e1b5af99f52908fd4d4' => 
    array (
      0 => '0c394709eab6331169bd6e1b5af99f52908fd4d4',
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
  'nocache_hash' => '284865983009de58ac8_05626972',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5983009e657cc9_78137004',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5983009e657cc9_78137004')) {
function content_5983009e657cc9_78137004 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '284865983009de58ac8_05626972';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '220685983009e047096_83876717', 'content_5983009e042d58_91994113');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '284865983009de58ac8_05626972';
?>

    <h3><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/impression.php?type=add&book_id=<?php echo $_smarty_tpl->tpl_vars['bookId']->value;?>
" class="btn btn-primary">Add new impression for this book</a></h3>
    <?php if (isset($_smarty_tpl->tpl_vars['msg']->value)) {?>
        <h3><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</h3>
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['impressionList']->value)) {?>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Comment</th>
                <th>Options</th>
            </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->tpl_vars['impressionList']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['i']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
$foreach_i_Sav = $_smarty_tpl->tpl_vars['i'];
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                    <td>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/impression.php?type=edit&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-primary">Edit</a>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/impression.php?type=delete&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="btn btn-primary" id="book_delete">Delete</a>
                    </td>
                </tr>

            <?php
$_smarty_tpl->tpl_vars['i'] = $foreach_i_Sav;
}
?>
            
            
            
            </tbody>

        </table>
        <?php } else { ?>
        <h3>There is no impression for this book</h3>
    <?php }?>


<!--footer-->
<?php /*  Call merged included template "layout/footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '191075983009e637771_57571485', 'content_5983009e633090_56732381');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:220685983009e047096_83876717%%*/
if ($_valid && !is_callable('content_5983009e042d58_91994113')) {
function content_5983009e042d58_91994113 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '220685983009e047096_83876717';
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
/*/%%SmartyNocache:220685983009e047096_83876717%%*/
}
}
?><?php
/*%%SmartyHeaderCode:191075983009e637771_57571485%%*/
if ($_valid && !is_callable('content_5983009e633090_56732381')) {
function content_5983009e633090_56732381 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '191075983009e637771_57571485';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:191075983009e637771_57571485%%*/
}
}
?>