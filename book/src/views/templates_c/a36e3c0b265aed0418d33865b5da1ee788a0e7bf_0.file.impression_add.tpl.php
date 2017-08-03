<?php /* Smarty version 3.1.27, created on 2017-08-03 09:37:05
         compiled from "src\views\templates\impression_add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14825982eec1677484_01439373%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a36e3c0b265aed0418d33865b5da1ee788a0e7bf' => 
    array (
      0 => 'src\\views\\templates\\impression_add.tpl',
      1 => 1501753022,
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
    '4d6367c1af15eefad8399a9156ed95fd88281e53' => 
    array (
      0 => '4d6367c1af15eefad8399a9156ed95fd88281e53',
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
  'nocache_hash' => '14825982eec1677484_01439373',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5982eec1959a36_13727506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5982eec1959a36_13727506')) {
function content_5982eec1959a36_13727506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14825982eec1677484_01439373';
?>
<!DOCTYPE html>
<html lang="en">
<!--header-->
<?php /*  Call merged included template "layout/header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '313205982eec17f64e4_92274276', 'content_5982eec17f0452_86556894');
/*  End of included template "layout/header.tpl" */?>

<body>
    <!--content-->
    <?php
$_smarty_tpl->properties['nocache_hash'] = '14825982eec1677484_01439373';
?>

    <h3>Add new impression for this book</h3>
    <form id="register_form" action="impression.php?type=add&book_id=<?php echo $_smarty_tpl->tpl_vars['bookId']->value;?>
" method="post" enctype="multipart/form-data">
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
echo $_smarty_tpl->getInlineSubTemplate("layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '184555982eec1939858_97117531', 'content_5982eec1934fe6_55296372');
/*  End of included template "layout/footer.tpl" */?>


</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:313205982eec17f64e4_92274276%%*/
if ($_valid && !is_callable('content_5982eec17f0452_86556894')) {
function content_5982eec17f0452_86556894 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '313205982eec17f64e4_92274276';
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
/*/%%SmartyNocache:313205982eec17f64e4_92274276%%*/
}
}
?><?php
/*%%SmartyHeaderCode:184555982eec1939858_97117531%%*/
if ($_valid && !is_callable('content_5982eec1934fe6_55296372')) {
function content_5982eec1934fe6_55296372 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '184555982eec1939858_97117531';
?>
<footer align="center" class="footer">
    <div style="padding-left:17px; padding-top:15px;padding-bottom:3px;background:#e5e5ff">
        <p><b>Trang Trinh's site</b></br>
            <a href="mailto:ngoctrangtrinh.it@gmail.com">
                ngoctrangtrinh.it@gmail.com</a> Phone: 070-3258-4387</p>
    </div>
</footer><?php
/*/%%SmartyNocache:184555982eec1939858_97117531%%*/
}
}
?>