<?php
/* Smarty version 3.1.29, created on 2016-10-27 09:54:27
  from "/home/miyuki/github/tech_aca/keiziban-2/smarty_dir/templates/login_check.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_581150430e91d5_87988715',
  'file_dependency' => 
  array (
    'bde6c281121840ffe4a4482f6e80a81a7c63cd49' => 
    array (
      0 => '/home/miyuki/github/tech_aca/keiziban-2/smarty_dir/templates/login_check.tpl',
      1 => 1477529660,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_581150430e91d5_87988715 ($_smarty_tpl) {
?>
<form action="login_check.php" method="post">
名前：
<input type="text" name="name" size="40"><br>
本文:
<textarea name="contents" rows="4" cols="40"></textarea>

<input type="submit" value="送信"><input type="reset" value="リセット">

<?php echo $_SESSION['name'];?>


<br>
<?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_postdata_0_saved_item = isset($_smarty_tpl->tpl_vars['postdata']) ? $_smarty_tpl->tpl_vars['postdata'] : false;
$_smarty_tpl->tpl_vars['postdata'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['postdata']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['postdata']->value) {
$_smarty_tpl->tpl_vars['postdata']->_loop = true;
$__foreach_postdata_0_saved_local_item = $_smarty_tpl->tpl_vars['postdata'];
?>
  <?php echo $_smarty_tpl->tpl_vars['postdata']->value['id'];?>
  <?php echo $_smarty_tpl->tpl_vars['postdata']->value['created'];?>

   <br><?php echo $_smarty_tpl->tpl_vars['postdata']->value['name'];?>

   <br><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['postdata']->value['contents'], ENT_QUOTES, 'UTF-8', true);?>
<br>
<?php
$_smarty_tpl->tpl_vars['postdata'] = $__foreach_postdata_0_saved_local_item;
}
if ($__foreach_postdata_0_saved_item) {
$_smarty_tpl->tpl_vars['postdata'] = $__foreach_postdata_0_saved_item;
}
?>
</form>

<?php }
}
