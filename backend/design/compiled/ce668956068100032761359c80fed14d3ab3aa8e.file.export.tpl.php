<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-07 18:16:29
         compiled from "backend\design\html\export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12942557255c5c4bcdc62975-97369788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce668956068100032761359c80fed14d3ab3aa8e' => 
    array (
      0 => 'backend\\design\\html\\export.tpl',
      1 => 1549445943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12942557255c5c4bcdc62975-97369788',
  'function' => 
  array (
    'categories_tree' => 
    array (
      'parameter' => 
      array (
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'btr' => 0,
    'message_error' => 0,
    'export_files_dir' => 0,
    'categories' => 0,
    'c' => 0,
    'level' => 0,
    'brands' => 0,
    'b' => 0,
    'config' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5c4bcdcd8da4_23660602',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5c4bcdcd8da4_23660602')) {function content_5c5c4bcdcd8da4_23660602($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['meta_title'] = new Smarty_variable($_smarty_tpl->tpl_vars['btr']->value->export_products, null, 1);
if ($_smarty_tpl->parent != null) $_smarty_tpl->parent->tpl_vars['meta_title'] = clone $_smarty_tpl->tpl_vars['meta_title'];?>


<div class="row">
    <progress id="progressbar" class="progress progress-info mt-0" style="display: none" value="0" max="100"></progress>
    <div class="col-lg-7 col-md-7">
        <div class="heading_page"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->export_products, ENT_QUOTES, 'UTF-8', true);?>
</div>
    </div>
    <div class="col-lg-5 col-md-5 float-xs-right"></div>
</div>


<?php if ($_smarty_tpl->tpl_vars['message_error']->value) {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_warning">
                <div class="heading_box">
                    <?php if ($_smarty_tpl->tpl_vars['message_error']->value=='no_permission') {?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_permissions, ENT_QUOTES, 'UTF-8', true);?>
 <?php echo $_smarty_tpl->tpl_vars['export_files_dir']->value;?>

                    <?php } else { ?>
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['message_error']->value, ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['message_error']->value!='no_permission') {?>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="boxed boxed_attention">
                <div class="">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->export_message, ENT_QUOTES, 'UTF-8', true);?>

                </div>
            </div>
        </div>
    </div>

    
    <div class="boxed fn_toggle_wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 ">
                <div id="fn_start" class="">
                    <div class="row">
                        <div class="col-md-3 col-sm-3 col-lg-3 col-sm-12 mb-h">
                            <div class="option_export_wrap">
                                <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export, ENT_QUOTES, 'UTF-8', true);?>
</div>
                                <select class="selectpicker fn_type_export">
                                   <option value="all_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_all_products, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                   <option value="category_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_category, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                   <option value="brands_products"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_brand, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                </select>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['categories']->value) {?>
                        <div id="category_products"  class="col-md-3 col-sm-3 col-lg-3 col-sm-12 export_options hidden mb-h">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_category, ENT_QUOTES, 'UTF-8', true);?>

                                <span class="hint-right-middle-t-info-s-med-mobile hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_access, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <img src="design/images/exclamation.png">
                                </span></div>
                            <select class="selectpicker" data-live-search="true" data-size="10"  name="category_id" disabled="">
                                <?php if (!function_exists('smarty_template_function_categories_tree')) {
    function smarty_template_function_categories_tree($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['categories_tree']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
                                    <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value) {
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['c']->value->id;?>
"><?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sp']);
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
?>&nbsp;<?php endfor; endif; ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['c']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                        <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['c']->value->subcategories,'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

                                    <?php } ?>
                                <?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>

                                <?php smarty_template_function_categories_tree($_smarty_tpl,array('categories'=>$_smarty_tpl->tpl_vars['categories']->value,'level'=>0));?>

                            </select>
                        </div>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
                        <div id="brands_products" class="col-md-3 col-sm-3 col-lg-3 col-sm-12 export_options hidden mb-h">
                            <div class="heading_label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_from_brand, ENT_QUOTES, 'UTF-8', true);?>

                                <span class="hint-right-middle-t-info-s-med-mobile hint-anim" data-hint="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_access, ENT_QUOTES, 'UTF-8', true);?>
">
                                    <img src="design/images/exclamation.png">
                                </span>
                            </div>
                            <select class="selectpicker" data-size="10" name="brand_id" disabled="">
                                <?php  $_smarty_tpl->tpl_vars['b'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['b']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['brands']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['b']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['b']->key => $_smarty_tpl->tpl_vars['b']->value) {
$_smarty_tpl->tpl_vars['b']->_loop = true;
 $_smarty_tpl->tpl_vars['b']->index++;
 $_smarty_tpl->tpl_vars['b']->first = $_smarty_tpl->tpl_vars['b']->index === 0;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['b']->value->id;?>
" <?php if ($_smarty_tpl->tpl_vars['b']->first) {?>selected=""<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['b']->value->name, ENT_QUOTES, 'UTF-8', true);?>
</option>
                                <?php } ?>
                            </select>
                        </div>
                        <?php }?>
                        <div class="col-md-3 col-sm-3 col-lg-3 col-sm-12 float-sm-right mt-2">
                            <button id="fn_start" type="submit" class="btn btn_small btn_blue float-md-right">
                                <?php echo $_smarty_tpl->getSubTemplate ('svg_icon.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('svgId'=>'magic'), 0);?>

                                <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export, ENT_QUOTES, 'UTF-8', true);?>
</span>
                            </button>
                        </div>
                    </div>
                </div>

                <div id="success_export" class="" style="display: none">
                    <div class="text_success font_20 text_600"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btr']->value->general_export_successful, ENT_QUOTES, 'UTF-8', true);?>
</div>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<script src="<?php echo $_smarty_tpl->tpl_vars['config']->value->root_url;?>
/backend/design/js/piecon/piecon.js"></script>
<script>
    

    var in_process=false;
    var field = '',
        value = '';

    $(function() {
        $(".fn_type_export").on("change",function () {
            elem = $("#"+$(this).val());
            $(".export_options").addClass("hidden");
            elem.removeClass("hidden");

        });

        $('button#fn_start').click(function() {
            if($(".export_options:visible")){
                field = $(".export_options:visible").find('select').attr('name');
                value = $(".export_options:visible").find('select').val();
            }
            Piecon.setOptions({fallback: 'force'});
            Piecon.setProgress(0);
            var progress_item = $("#progressbar"); //указываем селектор элемента с анимацией
            progress_item.show();

            do_export('',progress_item);

        });

        function do_export(page,progress)
        {
            page = typeof(page) != 'undefined' ? page : 1;
            var data = {page: page};
            if (field && value) {
                data[field] = value;
            }
            $.ajax({
                url: "ajax/export.php",
                data: data,
                dataType: 'json',
                success: function(data){

                    if(data && !data.end)
                    {
                        Piecon.setProgress(Math.round(100*data.page/data.totalpages));
                        progress.attr('value',100*data.page/data.totalpages);
                        do_export(data.page*1+1,progress);
                    }
                    else
                    {
                        if(data && data.end)
                        {
                            Piecon.setProgress(100);
                            progress.attr('value','100');
                            window.location.href = 'files/export/export.csv';
                            progress.fadeOut(500);
                            $('#success_export').show();
                        }
                    }
                },
                error:function(xhr, status, errorThrown) {
                    alert(errorThrown+'\n'+xhr.responseText);
                }
            });
        }
    });
    
</script>


<?php }} ?>
