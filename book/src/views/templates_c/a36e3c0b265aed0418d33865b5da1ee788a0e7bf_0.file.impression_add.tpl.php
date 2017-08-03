<?php /* Smarty version 3.1.27, created on 2017-08-03 08:17:44
         compiled from "src\views\templates\impression_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:237795982dc28c31bf4_41105979%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36e3c0b265aed0418d33865b5da1ee788a0e7bf' => 
    array (
      0 => 'src\\views\\templates\\impression_add.tpl',
      1 => 1501748099,
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
    'f48500b37a5a5d9ce6c8c00c910523ec7c529cc6' => 
    array (
      0 => 'f48500b37a5a5d9ce6c8c00c910523ec7c529cc6',
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
  'nocache_hash' => '237795982dc28c31bf4_41105979',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5982dc28e78c96_86994297',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5982dc28e78c96_86994297')) {
function content_5982dc28e78c96_86994297 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '237795982dc28c31bf4_41105979';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '157695982dc28d79231_69022739', 'content_5982dc28d74c60_32249111');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '237795982dc28c31bf4_41105979';
?>

    <h3>Add new impression for this book</h3>
    <form id="register_form" action="impression.php?type=add" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="comment">Comment:</label>
                </td>
                <td>
                    <input type="text" id="publisher" name="comment" required="true">
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
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '43645982dc28e554f4_31953433', 'content_5982dc28e51574_43412850');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:157695982dc28d79231_69022739%%*/
if ($_valid && !is_callable('content_5982dc28d74c60_32249111')) {
function content_5982dc28d74c60_32249111 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '157695982dc28d79231_69022739';
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
/*/%%SmartyNocache:157695982dc28d79231_69022739%%*/
}
}
?><?php
/*%%SmartyHeaderCode:43645982dc28e554f4_31953433%%*/
if ($_valid && !is_callable('content_5982dc28e51574_43412850')) {
function content_5982dc28e51574_43412850 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '43645982dc28e554f4_31953433';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:43645982dc28e554f4_31953433%%*/
}
}
?>