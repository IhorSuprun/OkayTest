<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-06 14:15:17
         compiled from "C:\OSPanel\domains\okay\design\okay_shop\html\page_404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2207368075c5ac1c5bdbde4-25653852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dada18807ee5dae90966edea064d2c8d625bfc6d' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay\\design\\okay_shop\\html\\page_404.tpl',
      1 => 1549445984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2207368075c5ac1c5bdbde4-25653852',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'lang' => 0,
    'menu_404' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5ac1c5c4b245_73425933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5ac1c5c4b245_73425933')) {function content_5c5ac1c5c4b245_73425933($_smarty_tpl) {?>





<div class="block padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <?php echo $_smarty_tpl->tpl_vars['page']->value->description;?>

            </div>
            <div class="col-sm-12 col-md-7">
                <div class="menu_404">
                    <div class="text_404">
                        <span data-language="page404_text"><?php echo $_smarty_tpl->tpl_vars['lang']->value->page404_text;?>
</span>
                    </div>
                    
                    <?php echo $_smarty_tpl->tpl_vars['menu_404']->value;?>

                </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
