<?php /* Smarty version 3.1.27, created on 2017-08-03 07:09:18
         compiled from "src\views\templates\book_edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:134065982cc1ebbb908_20263035%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bf3041246d381747f8d54fb471d3df45738dff0' => 
    array (
      0 => 'src\\views\\templates\\book_edit.tpl',
      1 => 1501744142,
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
    'c352aad854d54cc13437f45654e81bcc3bed09fc' => 
    array (
      0 => 'c352aad854d54cc13437f45654e81bcc3bed09fc',
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
  'nocache_hash' => '134065982cc1ebbb908_20263035',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5982cc1ee57003_43515336',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5982cc1ee57003_43515336')) {
function content_5982cc1ee57003_43515336 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '134065982cc1ebbb908_20263035';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '74365982cc1ecf4754_03138881', 'content_5982cc1ecef2e3_03456538');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '134065982cc1ebbb908_20263035';
?>

    <h3>Edit your book</h3>
    <form id="register_form" action="book.php?type=edit&bookId=<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['id'];?>
" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="name">Book's name:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name" required="true" value="<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['name'];?>
">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="publisher">Publisher:</label>
                </td>
                <td>
                    <input type="text" id="publisher" name="publisher" required="true" value="<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['publisher'];?>
">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="page">Page(number)</label>
                </td>
                <td>
                    <input type="number" id="page" name="page" required="true" value="<?php echo $_smarty_tpl->tpl_vars['bookInfo']->value['page'];?>
">
                </td>
            </tr>
        </table>
        <div class="center">
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>


<!--footer-->
<?php /*  Call merged included template "layout/footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '3475982cc1ee32ef2_85391130', 'content_5982cc1ee2ea97_35238310');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:74365982cc1ecf4754_03138881%%*/
if ($_valid && !is_callable('content_5982cc1ecef2e3_03456538')) {
function content_5982cc1ecef2e3_03456538 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '74365982cc1ecf4754_03138881';
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
/*/%%SmartyNocache:74365982cc1ecf4754_03138881%%*/
}
}
?><?php
/*%%SmartyHeaderCode:3475982cc1ee32ef2_85391130%%*/
if ($_valid && !is_callable('content_5982cc1ee2ea97_35238310')) {
function content_5982cc1ee2ea97_35238310 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '3475982cc1ee32ef2_85391130';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:3475982cc1ee32ef2_85391130%%*/
}
}
?>