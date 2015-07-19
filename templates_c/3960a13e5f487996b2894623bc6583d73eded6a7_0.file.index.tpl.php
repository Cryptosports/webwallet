<?php /* Smarty version 3.1.27, created on 2015-07-19 10:30:18
         compiled from "/home/derek/Desktop/wallet/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210756399455abb47a3d2560_11347934%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3960a13e5f487996b2894623bc6583d73eded6a7' => 
    array (
      0 => '/home/derek/Desktop/wallet/templates/index.tpl',
      1 => 1437315985,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210756399455abb47a3d2560_11347934',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55abb47a3f0853_13738933',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55abb47a3f0853_13738933')) {
function content_55abb47a3f0853_13738933 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210756399455abb47a3d2560_11347934';
echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
  
<div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
	<h2>Create New Account</h2>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1">Password</span>
  <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>

  <button type="button" class="btn btn-default">Create</button>
      </div>
    </div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>