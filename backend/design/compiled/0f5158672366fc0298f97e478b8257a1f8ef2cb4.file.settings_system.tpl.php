<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-07 23:58:55
         compiled from "backend\design\html\settings_system.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8837263345c5c9c0f96edc4-85049119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f5158672366fc0298f97e478b8257a1f8ef2cb4' => 
    array (
      0 => 'backend\\design\\html\\settings_system.tpl',
      1 => 1549445944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8837263345c5c9c0f96edc4-85049119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'php_version' => 0,
    'sql_info' => 0,
    'sql_param' => 0,
    'sql_ver' => 0,
    'ini_params' => 0,
    'param_name' => 0,
    'param_value' => 0,
    'server_ip' => 0,
    'all_extensions' => 0,
    'ext_val' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5c9c0faa16d4_25986633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5c9c0faa16d4_25986633')) {function content_5c5c9c0faa16d4_25986633($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->settings_system_title, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-6 col-md-6">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_system_title, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-4 col-md-3 text-xs-right float-xs-right"></div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="boxed fn_toggle_wrap">
            <div class="heading_box">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_options, ENT_QUOTES, 'UTF-8', true);?>

                <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                    <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                </div>
            </div>
            
            <div class="toggle_body_wrap on fn_card">
               <div class="row">
                   <?php if ($_smarty_tpl->tpl_vars['php_version']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">PHP Version</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       Version: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['php_version']->value, ENT_QUOTES, 'UTF-8', true);?>

                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>
                   <?php if ($_smarty_tpl->tpl_vars['sql_info']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">SQL</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       <?php  $_smarty_tpl->tpl_vars['sql_ver'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sql_ver']->_loop = false;
 $_smarty_tpl->tpl_vars['sql_param'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sql_info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sql_ver']->key => $_smarty_tpl->tpl_vars['sql_ver']->value) {
$_smarty_tpl->tpl_vars['sql_ver']->_loop = true;
 $_smarty_tpl->tpl_vars['sql_param']->value = $_smarty_tpl->tpl_vars['sql_ver']->key;
?>
                                           <div>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql_param']->value, ENT_QUOTES, 'UTF-8', true);?>
: </span>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sql_ver']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                           </div>
                                       <?php } ?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <?php if ($_smarty_tpl->tpl_vars['ini_params']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">INI params</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       <?php  $_smarty_tpl->tpl_vars['param_value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['param_value']->_loop = false;
 $_smarty_tpl->tpl_vars['param_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ini_params']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['param_value']->key => $_smarty_tpl->tpl_vars['param_value']->value) {
$_smarty_tpl->tpl_vars['param_value']->_loop = true;
 $_smarty_tpl->tpl_vars['param_name']->value = $_smarty_tpl->tpl_vars['param_value']->key;
?>
                                           <div>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_name']->value, ENT_QUOTES, 'UTF-8', true);?>
: </span>
                                               <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['param_value']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                           </div>
                                       <?php } ?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <?php if ($_smarty_tpl->tpl_vars['server_ip']->value) {?>
                       <div class="col-lg-4 col-md-4 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold"><?php echo $_smarty_tpl->tpl_vars['btr']->value->system_server_ip;?>
</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information">
                                       IP: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['server_ip']->value, ENT_QUOTES, 'UTF-8', true);?>

                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>

                   <div class="col-lg-12 col-md-12 col-sm-12">
                       <div class="boxed boxed_attention">
                           <div class="heading_box">
                               <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_caution, ENT_QUOTES, 'UTF-8', true);?>

                           </div>
                           <div class="text_box">
                               <div class="mb-1">
                                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_message_1, ENT_QUOTES, 'UTF-8', true);?>

                               </div>
                               <div class="mb-h"><b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_message_2, ENT_QUOTES, 'UTF-8', true);?>
</b> </div>
                               <div>
                                   <ul class="mb-0 pl-1">
                                       <li>display_errors - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_display_errors, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>memory_limit - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_memory_limit, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>post_max_size - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_post_max_size, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_input_time - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_input_time, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_file_uploads - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_file_uploads, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_execution_time - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_execution_time, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>upload_max_filesize - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_upload_max_filesize, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                       <li>max_input_vars - <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->system_max_input_vars, ENT_QUOTES, 'UTF-8', true);?>
</li>
                                   </ul>
                               </div>
                           </div>
                       </div>
                   </div>

                   <?php if ($_smarty_tpl->tpl_vars['all_extensions']->value) {?>
                       <div class="col-lg-12 col-md-12 col-sm-12">
                           <div class="banner_card">
                               <div class="system_header">
                                   <span class="font-weight-bold">Server extensions</span>
                               </div>
                               <div class="banner_card_block">
                                   <div class="system_information clearfix">
                                       <?php  $_smarty_tpl->tpl_vars['ext_val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ext_val']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['all_extensions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ext_val']->key => $_smarty_tpl->tpl_vars['ext_val']->value) {
$_smarty_tpl->tpl_vars['ext_val']->_loop = true;
?>
                                           <div class="col-xl-3 col-lg-4 col-md-6">
                                               <div>
                                                   <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ext_val']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                               </div>
                                           </div>
                                       <?php } ?>
                                   </div>
                               </div>
                           </div>
                       </div>
                   <?php }?>
               </div>
            </div>
        </div>
    </div>
</div><?php }} ?>
