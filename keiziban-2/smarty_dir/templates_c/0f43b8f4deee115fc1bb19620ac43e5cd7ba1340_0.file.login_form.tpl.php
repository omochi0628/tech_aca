<?php
/* Smarty version 3.1.29, created on 2016-10-27 20:03:18
  from "/home/miyuki/github/tech_aca/keiziban-2/smarty_dir/templates/login_form.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5811def68937b4_11009401',
  'file_dependency' => 
  array (
    '0f43b8f4deee115fc1bb19620ac43e5cd7ba1340' => 
    array (
      0 => '/home/miyuki/github/tech_aca/keiziban-2/smarty_dir/templates/login_form.tpl',
      1 => 1477566185,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5811def68937b4_11009401 ($_smarty_tpl) {
?>
<form action="login_admin.php" method="post">
ID：
<input type="text" name="name" size="40"><br>

pass :
<input type="password" name="password">

<input type="submit" value="送信"><input type="reset" value="リセット">

<!--ここでエラーを表示したい<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
-->

</form>
<?php }
}