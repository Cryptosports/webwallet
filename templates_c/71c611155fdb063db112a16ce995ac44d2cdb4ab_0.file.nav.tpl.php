<?php /* Smarty version 3.1.27, created on 2015-07-19 10:30:18
         compiled from "/home/derek/Desktop/wallet/templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:166525395455abb47a40a419_07297630%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71c611155fdb063db112a16ce995ac44d2cdb4ab' => 
    array (
      0 => '/home/derek/Desktop/wallet/templates/nav.tpl',
      1 => 1437314667,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166525395455abb47a40a419_07297630',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55abb47a412f08_26610663',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55abb47a412f08_26610663')) {
function content_55abb47a412f08_26610663 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '166525395455abb47a40a419_07297630';
?>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Wallet Pro</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!--<li><a href="javascript:;">Stats</a></li>-->
            <li><a href="javascript:;">Wallet</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Derek <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <!--<li><a href="#">Settings</a></li>-->
                <li><a href="#">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<?php }
}
?>