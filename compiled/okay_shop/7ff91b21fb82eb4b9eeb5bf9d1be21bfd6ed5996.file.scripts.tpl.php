<?php /* Smarty version Smarty-3.1.19-dev, created on 2019-02-06 12:43:17
         compiled from "C:\OSPanel\domains\okay\design\okay_shop\html\scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7197720945c5aac35c6d2f5-62111370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ff91b21fb82eb4b9eeb5bf9d1be21bfd6ed5996' => 
    array (
      0 => 'C:\\OSPanel\\domains\\okay\\design\\okay_shop\\html\\scripts.tpl',
      1 => 1549445984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7197720945c5aac35c6d2f5-62111370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'error' => 0,
    'call_sent' => 0,
    'call_error' => 0,
    'subscribe_success' => 0,
    'subscribe_error' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_5c5aac35cce5b2_05738959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c5aac35cce5b2_05738959')) {function content_5c5aac35cce5b2_05738959($_smarty_tpl) {?><script>
    /* Глобальный обьект */
    /* все глобальные переменные добавляем в оъект и работаем с ним!!! */
    var okay = {};
    okay.max_order_amount = <?php echo $_smarty_tpl->tpl_vars['settings']->value->max_order_amount;?>
;

    
    <?php if ($_GET['module']=='ProductsView') {?>
        $(document).on('click', '.fn_filter_reset', function () {
            var date = new Date(0);
            document.cookie = "price_filter=; path=/; expires=" + date.toUTCString();
        });
    <?php }?>
    
    
    okay.is_preorder = <?php echo $_smarty_tpl->tpl_vars['settings']->value->is_preorder;?>
;
    
    <?php if ($_GET['module']=='BlogView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
        
        $( window ).on( 'load', function() {
            location.href = location.href + '#fn_blog_comment';
            $( '#fn_blog_comment' ).trigger( 'submit' );
        } );
    <?php }?>

    
    <?php if ($_smarty_tpl->tpl_vars['call_sent']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_callback_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['call_error']->value) {?>
        $(function() {
            $.fancybox.open({
                src: '#fn_callback',
                type : 'inline'
            });
        });
    <?php }?>

    
    <?php if ($_GET['module']=='ProductView'&&$_smarty_tpl->tpl_vars['error']->value) {?>
        $( window ).on( 'load', function() {
            $( '.tab_navigation a' ).removeClass( 'selected' );
            $( '.tab' ).hide();
            $( 'a[href="#comments"]' ).addClass( 'selected' );
             $( '#comments').show();
        } );
    
    <?php } elseif ($_GET['module']=='ProductView') {?>
        $( window ).on( 'load', function() {
            if( location.hash.search('comment') !=-1 ) {
                $( '.tab_navigation a' ).removeClass( 'selected' );
                $( '.tab' ).hide();
                $( 'a[href="#comments"]' ).addClass( 'selected' );
                 $( '#comments').show();
            }
        } );
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['subscribe_success']->value) {?>
        $( function() {
            $.fancybox.open( {
                src: '#fn_subscribe_sent',
                type : 'inline',
            } );
        } );
    <?php } elseif ($_smarty_tpl->tpl_vars['subscribe_error']->value) {?>
        $( window ).on( 'load', function() {
            location.href = location.href + '#subscribe_error';
            $.fancybox.open( {
                src: '#subscribe_error',
                type : 'inline',
            } );
        } );
    <?php }?>

    var form_enter_name = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_name, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_phone = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_phone, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_error_captcha = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_error_captcha, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_email = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_email, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_password = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_password, ENT_QUOTES, 'UTF-8', true);?>
";
    var form_enter_message = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['lang']->value->form_enter_message, ENT_QUOTES, 'UTF-8', true);?>
";

    if($(".fn_validate_product").length>0) {
        $(".fn_validate_product").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }
    if($(".fn_validate_callback").length>0) {
        $(".fn_validate_callback").validate({
            rules: {
                name: "required",
                phone: "required",
            },
            messages: {
                name: form_enter_name,
                phone: form_enter_phone,
            }

        });
    }
    if($(".fn_validate_subscribe").length>0) {
        $(".fn_validate_subscribe").validate({
            rules: {
                subscribe_email: "required",
            },
            messages: {
                subscribe_email: form_enter_email
            }
        });
    }
    if($(".fn_validate_post").length>0) {
        $(".fn_validate_post").validate({
            rules: {
                name: "required",
                text: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                text: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_feedback").length>0) {
        $(".fn_validate_feedback").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                message: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                message: form_enter_message,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_cart").length>0) {
        $(".fn_validate_cart").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha
            }
        });
    }

    if($(".fn_validate_login").length>0) {
        $(".fn_validate_login").validate({
            rules: {
                email: "required",
                password: "required",
            },
            messages: {
                email: form_enter_email,
                password: form_enter_password
            }
        });
    }

    if($(".fn_validate_register").length>0) {
        $(".fn_validate_register").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                captcha_code: "required"
            },
            messages: {
                name: form_enter_name,
                email: form_enter_email,
                captcha_code: form_error_captcha,
                password: form_enter_password
            }
        });
    }

    if($(".fn_share").length>0) {
        $(".fn_share").jsSocials({
            showLabel: false,
            showCount: false,
            shares: ["twitter", "facebook", "googleplus", "vkontakte"]
        });
    }

</script>
<?php }} ?>
