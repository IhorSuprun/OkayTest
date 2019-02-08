<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-06 12:48:45
         compiled from "backend\design\html\settings_general.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866397705c5aad7dcd8e17-03753135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ed76aa7d35798696f277a792d69930ffa5f70d1d' => 
    array (
      0 => 'backend\\design\\html\\settings_general.tpl',
      1 => 1549445944,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866397705c5aad7dcd8e17-03753135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'btr' => 0,
    'message_success' => 0,
    'settings' => 0,
    'allow_ext' => 0,
    'img_ext' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5aad7dd7f231_54024318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5aad7dd7f231_54024318')) {function content_5c5aad7dd7f231_54024318($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->settings_general_sites, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_sites, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-5 col-md-5 text-xs-right float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_success']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_success">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_success']->value=='saved') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_settings_saved, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                    <?php if ($_GET['return']) {?>
                        <a class="btn btn_return float-xs-right" href="<?php echo $_GET['return'];?>
">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'return'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_back, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>


<form method="post" enctype="multipart/form-data">
    <input type=hidden name="session_id" value="<?php echo $_SESSION['id'];?>
">

    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_335px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_options, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_sitename, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="site_name" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_name, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_date, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="date_format" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->date_format, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_email, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <input name="admin_email" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->admin_email, ENT_QUOTES, 'UTF-8', true);?>
" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_shutdown, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="site_work" class="selectpicker">
                                    <option value="on" <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_work=="on") {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_turn_on, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                    <option value="off" <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_work=="off") {?>selected<?php }?> disabled=""><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_turn_off, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="heading_label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_tech_message, ENT_QUOTES, 'UTF-8', true);?>

                                <span class="hint-right-middle-t-info-s-med-mobile hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_access, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <img src="design/images/exclamation.png">
                                </span>
                            </div>
                            <div class="okay_disabled">
                                <textarea name="site_annotation" class="form-control okay_textarea"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_annotation, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap ">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_site_logo, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_allow_ext, ENT_QUOTES, 'UTF-8', true);?>

                    <?php if ($_smarty_tpl->tpl_vars['allow_ext']->value) {?>
                        <?php  $_smarty_tpl->tpl_vars['img_ext'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img_ext']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['allow_ext']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['img_ext']->key => $_smarty_tpl->tpl_vars['img_ext']->value) {
$_smarty_tpl->tpl_vars['img_ext']->_loop = true;
?>
                            <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_ext']->value, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        <?php } ?>
                    <?php }?>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="boxed">
                                <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_logo) {?>
                                    <div class="fn_parent_image txt_center">
                                        <div class="banner_image fn_image_wrapper text-xs-center">
                                            <a href="javascript:;" class="fn_delete_item remove_image"></a>
                                            <input type="hidden" name="site_logo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
">
                                            <img class="watermark_image" src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/design/<?php echo $_smarty_tpl->tpl_vars['settings']->value->theme;?>
/images/<?php echo $_smarty_tpl->tpl_vars['settings']->value->site_logo;?>
" alt="" />
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div class="fn_parent_image"></div>
                                <?php }?>

                                <div class="fn_upload_image dropzone_block_image text-xs-center <?php if ($_smarty_tpl->tpl_vars['settings']->value->site_logo) {?> hidden<?php }?>">
                                    <i class="fa fa-plus font-5xl" aria-hidden="true"></i>
                                    <input class="dropzone_image" name="site_logo" type="file" />
                                </div>
                                <div class="image_wrapper fn_image_wrapper fn_new_image text-xs-center">
                                    <a href="javascript:;" class="fn_delete_item delete_image remove_image"></a>
                                    <input type="hidden" name="site_logo" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->site_logo, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <img src="" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_capcha, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="boxed boxed_attention">
                        <div class="">
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_capcha_help1, ENT_QUOTES, 'UTF-8', true);?>
 <a class="link_white" rel="nofollow" href="https://www.google.com/recaptcha/admin#list"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_capcha_help2, ENT_QUOTES, 'UTF-8', true);?>
</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_type_capcha, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="mb-1">
                                <select name="captcha_type" class="selectpicker">
                                    <option value="default" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="default") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['btr']->value->captcha_default;?>
</option>
                                    <option value="v2" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="v2") {?>selected<?php }?>>reCAPTCHA V2</option>
                                    <option value="invisible" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_type=="invisible") {?>selected<?php }?>>reCAPTCHA Invisible</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_product, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_product" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_product) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_blog, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_post" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_post) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_cart, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_cart" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_cart) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                 </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_register, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_register" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_register) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_contact_form, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_feedback" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_feedback) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="permission_box">
                                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_callback, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="captcha_callback" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->captcha_callback) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    reCAPTCHA V2
                                 </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="public_recaptcha" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_secret_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="secret_recaptcha" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->secret_recaptcha, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="boxed">
                                <div class="heading_box">
                                    reCAPTCHA invisible
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="public_recaptcha_invisible" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->public_recaptcha_invisible, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->recaptcha_secret_key, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                            <div class="mb-1">
                                                <input name="secret_recaptcha_invisible" class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value->secret_recaptcha_invisible, ENT_QUOTES, 'UTF-8', true);?>
" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap">
                <div class="heading_box">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_iframe_map, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                
                <div class="toggle_body_wrap on fn_card">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->settings_general_iframe_message, ENT_QUOTES, 'UTF-8', true);?>
</div>
                            <div class="">
                                <textarea name="iframe_map_code" class="form-control okay_textarea"><?php echo $_smarty_tpl->tpl_vars['settings']->value->iframe_map_code;?>
</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="boxed fn_toggle_wrap min_height_210px">
                <div class="heading_box">
                    <?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_general_gathering_data;?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="toggle_body_wrap on fn_card">
                    <div class="permission_block">
                        <div class="permission_boxes row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="permission_box">
                                    <span><?php echo $_smarty_tpl->tpl_vars['btr']->value->settings_general_gather_enabled;?>
</span>
                                    <label class="switch switch-default">
                                        <input class="switch-input" name="gather_enabled" value='1' type="checkbox" <?php if ($_smarty_tpl->tpl_vars['settings']->value->gather_enabled) {?>checked=""<?php }?>/>
                                        <span class="switch-label"></span>
                                        <span class="switch-handle"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 clearfix"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-md-12 ">
                        <button type="submit" class="btn btn_small btn_blue float-md-right">
                            <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php }} ?>
