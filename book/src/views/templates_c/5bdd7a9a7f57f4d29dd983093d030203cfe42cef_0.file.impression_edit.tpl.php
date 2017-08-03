<?php /* Smarty version 3.1.27, created on 2017-08-03 10:28:25
         compiled from "src\views\templates\impression_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:229715982fac949b3c6_32056811%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5bdd7a9a7f57f4d29dd983093d030203cfe42cef' => 
    array (
      0 => 'src\\views\\templates\\impression_edit.tpl',
      1 => 1501756021,
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
    'dd8c027e1fc786a67ba5fe681f50b6ab57e3833e' => 
    array (
      0 => 'dd8c027e1fc786a67ba5fe681f50b6ab57e3833e',
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
  'nocache_hash' => '229715982fac949b3c6_32056811',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5982fac97ceed5_61860261',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5982fac97ceed5_61860261')) {
function content_5982fac97ceed5_61860261 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '229715982fac949b3c6_32056811';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '251375982fac9628913_14625803', 'content_5982fac96220d5_43897177');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '229715982fac949b3c6_32056811';
?>

    <h3>Add new impression for this book</h3>
    <form id="register_form" action="impression.php?type=edit&i_id=<?php echo $_smarty_tpl->tpl_vars['impressionInfo']->value['id'];?>
&b_id=<?php echo $_smarty_tpl->tpl_vars['impressionInfo']->value['book_id'];?>
" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="comment">Comment:</label>
                </td>
                <td>
                    <input type="text" id="comment" name="comment" required="true" value="<?php echo $_smarty_tpl->tpl_vars['impressionInfo']->value['name'];?>
">
                </td>
            </tr>
        </table>

        <div class="center">
            <input type="submit" value="Submit" name="submit">
            <input type="reset" value="Cancel" name="cancel">
        </div>
    </form>


<!--footer-->
<?php /*  Call merged included template "layout/footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '42285982fac97aab04_31863017', 'content_5982fac97a6895_42591338');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:251375982fac9628913_14625803%%*/
if ($_valid && !is_callable('content_5982fac96220d5_43897177')) {
function content_5982fac96220d5_43897177 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '251375982fac9628913_14625803';
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
/*/%%SmartyNocache:251375982fac9628913_14625803%%*/
}
}
?><?php
/*%%SmartyHeaderCode:42285982fac97aab04_31863017%%*/
if ($_valid && !is_callable('content_5982fac97a6895_42591338')) {
function content_5982fac97a6895_42591338 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '42285982fac97aab04_31863017';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:42285982fac97aab04_31863017%%*/
}
}
?>