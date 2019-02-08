<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-06 12:48:33
         compiled from "backend\design\html\features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3075352185c5aad715081b3-65967528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '049ee83b227b9b941972dcecd4aa7307931cc828' => 
    array (
      0 => 'backend\\design\\html\\features.tpl',
      1 => 1549445943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3075352185c5aad715081b3-65967528',
  'function' => 
  array (
    'category_select' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'btr' => 0,
    'features_count' => 0,
    'category' => 0,
    'categories' => 0,
    'c' => 0,
    'level' => 0,
    'categories_tree' => 0,
    'current_limit' => 0,
    'features' => 0,
    'feature' => 0,
    'feature_cat' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5aad715cdb09_08519790',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5aad715cdb09_08519790')) {function content_5c5aad715cdb09_08519790($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->features_features, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <div class="col-lg-7 col-md-7">
        <div class="wrap_heading">
            <div class="box_heading heading_page">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_features, ENT_QUOTES, 'UTF-8', true);?>
 - <?php echo $_smarty_tpl->tpl_vars['features_count']->value;?>

            </div>
            <div class="box_btn_heading">
                <a class="btn btn_small btn-info" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'FeatureAdmin','return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'plus'), 0);?>

                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_add, ENT_QUOTES, 'UTF-8', true);?>
</span>
                </a>
            </div>
        </div>
    </div>
</div>


<div class="boxed fn_toggle_wrap">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="fn_toggle_wrap">
                <div class="heading_box visible_md">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_filter, ENT_QUOTES, 'UTF-8', true);?>

                    <div class="toggle_arrow_wrap fn_toggle_card text-primary">
                        <a class="btn-minimize" href="javascript:;" ><i class="fa fn_icon_arrow fa-angle-down"></i></a>
                    </div>
                </div>
                <div class="boxed_sorting toggle_body_wrap off fn_card">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                        <select id="id_categories" name="categories_filter" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_category_filter, ENT_QUOTES, 'UTF-8', true);?>
" class="selectpicker form-control" data-live-search="true" data-size="10" onchange="location = this.value;">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('keyword'=>null,'brand_id'=>null,'page'=>null,'limit'=>null,'category_id'=>null),$_smarty_tpl);?>
" <?php if (!$_smarty_tpl->tpl_vars['category']->value) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_categories, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php if (!function_exists('smarty_template_function_category_select')) {
    function smarty_template_function_category_select($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['category_select']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                    <option value='<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('category_id'=>$_smarty_tpl->tpl_vars['c']->value->id),$_smarty_tpl);?>
' <?php if ($_smarty_tpl->tpl_vars['category']->value->id==$_smarty_tpl->tpl_vars['c']->value->id) {?>selected<?php }?>>
                                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['name'] = 'sp';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['level']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sp']['total']);
?>-<?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                    </option>
                                    <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                <?php } ?>
                            <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                            <?php smarty_template_function_category_select($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories_tree']->value));?>

                        </select>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm 12">
                        <select onchange="location = this.value;" class="selectpicker">
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>5),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==5) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 5</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>10),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==10) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 10</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>25),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==25) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 25</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>50),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==50) {?>selected<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 50</option>
                            <option value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('limit'=>100),$_smarty_tpl);?>
" <?php if ($_smarty_tpl->tpl_vars['current_limit']->value==100) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_show_by, ENT_QUOTES, 'UTF-8', true);?>
 100</option>
                        </select>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    
    <?php if ($_smarty_tpl->tpl_vars['features']->value) {?>
        <form method="post" class="fn_form_list fn_fast_button">
            <input type="hidden" name="session_id" value="<?php echo $_SESSION['id'];?>
"/>

            <div class="okay_list products_list fn_sort_list">
                
                <div class="okay_list_head">
                    <div class="okay_list_heading okay_list_drag"></div>
                    <div class="okay_list_heading okay_list_check">
                        <input class="hidden_check fn_check_all" type="checkbox" id="check_all_1" name="" value=""/>
                        <label class="okay_ckeckbox" for="check_all_1"></label>
                    </div>
                    <div class="okay_list_heading okay_list_features_name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_name, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_features_tag"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_categories, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_url_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->feature_url_in_product_short, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_status"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_setting okay_list_features_setting"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_activities, ENT_QUOTES, 'UTF-8', true);?>
</div>
                    <div class="okay_list_heading okay_list_close"></div>
                </div>
                
                <div class="okay_list_body features_wrap sortable">
                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                    <div class="fn_row okay_list_body_item fn_sort_item">
                        <div class="okay_list_row ">
                            <input type="hidden" name="positions[<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->position;?>
" />

                            <div class="okay_list_boding okay_list_drag move_zone">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'drag_vertical'), 0);?>

                            </div>

                            <div class="okay_list_boding okay_list_check">
                                <input class="hidden_check" type="checkbox" id="id_<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="check[]" value="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" />
                                <label class="okay_ckeckbox" for="id_<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
"></label>
                            </div>

                            <div class="okay_list_boding okay_list_features_name">
                                <a class="link" href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0][0]->url_modifier(array('module'=>'FeatureAdmin','id'=>$_smarty_tpl->tpl_vars['feature']->value->id,'return'=>$_SERVER['REQUEST_URI']),$_smarty_tpl);?>
">
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value->name, ENT_QUOTES, 'UTF-8', true);?>

                                </a>
                            </div>

                            <div class="okay_list_boding okay_list_features_tag">
                                <div class="wrap_tags">
                                <?php if ($_smarty_tpl->tpl_vars['feature']->value->features_categories) {?>
                                    <?php  $_smarty_tpl->tpl_vars['feature_cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature_cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['feature']->value->features_categories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['feature_cat']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['feature_cat']->key => $_smarty_tpl->tpl_vars['feature_cat']->value) {
$_smarty_tpl->tpl_vars['feature_cat']->_loop = true;
 $_smarty_tpl->tpl_vars['feature_cat']->iteration++;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['feature_cat']->iteration<=12&&isset($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['feature_cat']->value])) {?>
                                           <span class="tag tag-info"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categories']->value[$_smarty_tpl->tpl_vars['feature_cat']->value]->name, ENT_QUOTES, 'UTF-8', true);?>
</span>
                                        <?php }?>
                                    <?php } ?>
                                <?php }?>
                                </div>
                            </div>
                            <div class="okay_list_boding okay_list_url_status">
                                
                                <label class="switch switch-default">
                                    <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feature']->value->url_in_product) {?>fn_active_class<?php }?>" data-module="feature" data-action="url_in_product" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="url_in_product" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['feature']->value->url_in_product) {?>checked=""<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div class="okay_list_boding okay_list_status">
                                
                                <label class="switch switch-default">
                                    <input class="switch-input fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feature']->value->in_filter) {?>fn_active_class<?php }?>" data-module="feature" data-action="in_filter" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" name="in_filter" value="1" type="checkbox"  <?php if ($_smarty_tpl->tpl_vars['feature']->value->in_filter) {?>checked=""<?php }?>/>
                                    <span class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                </label>
                            </div>
                            <div class="okay_list_boding okay_list_setting okay_list_features_setting">
                                
                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="setting_icon setting_icon_yandex fn_ajax_action <?php if ($_smarty_tpl->tpl_vars['feature']->value->yandex) {?>fn_active_class<?php }?> hint-bottom-middle-t-info-s-small-mobile  hint-anim" data-id="<?php echo $_smarty_tpl->tpl_vars['feature']->value->id;?>
" data-module="feature" data-action="yandex">
                                    XML
                                </button>
                            </div>
                            <div class="okay_list_boding okay_list_close">
                                
                                <button data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_delete, ENT_QUOTES, 'UTF-8', true);?>
" type="button" class="btn_close fn_remove hint-bottom-right-t-info-s-small-mobile  hint-anim" data-toggle="modal" data-target="#fn_action_modal" onclick="success_action($(this));">
                                    <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'delete'), 0);?>

                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>

                
                <div class="okay_list_footer fn_action_block">
                    <div class="okay_list_foot_left">
                        <div class="okay_list_heading okay_list_drag"></div>
                        <div class="okay_list_heading okay_list_check">
                            <input class="hidden_check fn_check_all" type="checkbox" id="check_all_2" name="" value=""/>
                            <label class="okay_ckeckbox" for="check_all_2"></label>
                        </div>
                        <div class="okay_list_option">
                            <select name="action" class="selectpicker">
                                <option value="set_in_filter"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="unset_in_filter"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_not_in_filter, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="to_yandex"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_add_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="from_yandex"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_remove_xml, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <option value="delete"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_delete, ENT_QUOTES, 'UTF-8', true);?>
</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_small btn_blue">
                         <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'checked'), 0);?>

                        <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_apply, ENT_QUOTES, 'UTF-8', true);?>
</span>
                    </button>
                </div>
            </div>
        </form>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm 12 txt_center">
                <?php echo $_smarty_tpl->getSubTemplate ('pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
        </div>
    <?php } else { ?>
        <div class="heading_box mt-1">
            <div class="text_grey"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->features_no, ENT_QUOTES, 'UTF-8', true);?>
</div>
        </div>
    <?php }?>
</div>
<?php }} ?>
