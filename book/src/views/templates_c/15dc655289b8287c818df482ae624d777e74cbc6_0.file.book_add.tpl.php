<?php /* Smarty version 3.1.27, created on 2017-08-03 06:56:40
         compiled from "src\views\templates\book_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:227365982c928060c06_67216006%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '15dc655289b8287c818df482ae624d777e74cbc6' => 
    array (
      0 => 'src\\views\\templates\\book_add.tpl',
      1 => 1501742447,
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
    'c3ca7fac447fb606928d32271a72d2eec1522b00' => 
    array (
      0 => 'c3ca7fac447fb606928d32271a72d2eec1522b00',
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
  'nocache_hash' => '227365982c928060c06_67216006',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5982c9284b9647_56846110',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5982c9284b9647_56846110')) {
function content_5982c9284b9647_56846110 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '227365982c928060c06_67216006';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '91665982c928312618_16850074', 'content_5982c928309511_07122644');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '227365982c928060c06_67216006';
?>

    <h3>Add new book</h3>
    <form id="register_form" action="book.php?type=add" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="name">Book's name:</label>
                </td>
                <td>
                    <input type="text" id="name" name="name" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="publisher">Publisher:</label>
                </td>
                <td>
                    <input type="text" id="publisher" name="publisher" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="page">Page(number)</label>
                </td>
                <td>
                    <input type="number" id="page" name="page" required="true">
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
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '165175982c928496804_66094584', 'content_5982c9284930d7_17062695');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:91665982c928312618_16850074%%*/
if ($_valid && !is_callable('content_5982c928309511_07122644')) {
function content_5982c928309511_07122644 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '91665982c928312618_16850074';
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
/*/%%SmartyNocache:91665982c928312618_16850074%%*/
}
}
?><?php
/*%%SmartyHeaderCode:165175982c928496804_66094584%%*/
if ($_valid && !is_callable('content_5982c9284930d7_17062695')) {
function content_5982c9284930d7_17062695 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '165175982c928496804_66094584';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:165175982c928496804_66094584%%*/
}
}
?>