<?php
defined('ABSPATH') or die('No script kiddies please!');
if (!current_user_can('update_core')) {
    wp_die(__('You do not have sufficient permissions to access this page.', 'wp-dp'));
}
// Save the field values
if (isset($_POST['wpjqpdp_fields_submitted']) && $_POST['wpjqpdp_fields_submitted'] == 'submitted') {

    if ($wpdp_pro) {
        foreach ($_POST as $key => $value) {
            if (get_option($key) != $value) {
                update_option(sanitize_text_field($key), sanitize_text_field($value));
            } else {
                add_option(sanitize_text_field($key), sanitize_text_field($value), '', 'no');
            }
        }
    } else {

        update_option('wpjqp_datepicker', sanitize_text_field($_POST['wpjqp_datepicker']));
    }
}
$wpdp_selectors = get_option('wpjqp_datepicker');
?>	

<style>
    @charset "utf-8";
    .wpdp{
        direction: ltr;
    }
    /* CSS Document */
    .wpdp .hide{
        display:none;
    }
    .wpdp .head_area{
        clear:both;
        position:relative;
    }
    .wpdp .head_area a {
        cursor: pointer;
        font-size: 14px;
        position: absolute;
        right: 0;
    }
    .wpdp p.submit{
        float:right;
    }
    .wpdp h2 {
        font-size: 22px;
        font-weight: 400;
        margin-bottom: 19px;
        padding: 9px 15px 4px 0;
    }
    .wpdp h2 span.dashicons{
        font-size:30px;
        margin-right:16px;
    }
    .wpdp code {
        background-color: black;
        border: 2px solid white;
        color: white;
        font-size: 14px;
        padding: 10px;
        position: relative;
        right: -21%;
        top: 0;
    }
    .wpdp code .yellow{
        color:yellow;
    }
    .wpdp code .light_blue{
        color:#0CF;
    }
    .wpdp .wpdp_settings{
        padding:0 0 0 4px;
    }
    .wpdp .wpdp_settings > h3{
        cursor:pointer;	

    }

    .wpdp .wpdp_settings > h3 span.dashicons{
        margin-right:4px;
    }
    .wpdp .wpdp_settings > ul.menu-class{

    }

    .wpdp .wpdp_settings > ul.menu-class > li > div.banner_wrapper{
        border:6px dashed #ccc;
        width:90%;
        min-height:30px;
        cursor:pointer;
        text-align:center;
        padding:40px;


    }
    .wpdp .wpdp_settings > ul.menu-class > li > h4{
        font-size:14px;
    }
    .wpdp .wpdp_settings > ul.menu-class > li > div.banner_wrapper span.dashicons{
        font-size:60px;
        position: relative;
        top: -19px;	
    }
    .wpdp .wpdp_settings > ul.menu-class > li > div.banner_wrapper label{

        font-size:30px;
        color:#ccc;

    }

    .wpdp_pro_settings{
        clear:both;
        margin-top:20px;
    }
    .wpdp_pro_settings label{
        font-size:20px;
        margin-bottom:4px;
        display:block;
    }
    .wpdp_selectors,
    .wpdp_fonts_style{
        border: 2px solid gray !important;
        font-size: 26px;
        height: 52px;
        padding: 10px;
        border-radius: 6px;
        width:100%;
    }
    .wpdp_fonts_style{
        height:60px !important;
    }
    .wpdp_1, .wpdp_2, .wpdp_3{
        color:#fff;	
        padding:4px 6px;
        clear:both;
        font-size:12px;
    }
    .wpdp_1{

        background-color:#36F;

    }
    .wpdp_2{
        background-color:#C39;


    }

    .wpdp_3{
        background-color:#6C3;


    }
</style>
<div class="wrap wpdp">

    <div class="head_area">
        <h2><?php _e('<span class="dashicons dashicons-welcome-widgets-menus"></span>WP jQuery Perasian Datepicker ' . '(' . $wpjqpdp_data['Version'] . ($wpjqpdp_pro ? ') Pro' : ')'), 'wp_jqpdp'); ?></h2>


    </div>
    <form method="post" action="">  
        <input type="hidden" name="wpjqpdp_fields_submitted" value="submitted" />
        <p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php _e('Save Changes', 'wp_jqpdp'); ?>" /></p> 
        <div class="wpdp_settings">



            <input type="text" width="100%" value="<?php echo $wpdp_selectors; ?>" class="wpdp_selectors" name="wpjqp_datepicker" /><br />
            <small>
                You can enter multiple selectors as CSV (Comma Separated Values).<br />

                e.g. <br />
                <span class="wpdp_1">#datepicker</span><br />
                or<br />
                <span class="wpdp_2">#datepicker, .hasDatepicker, .date-field</span><br />
                and<br />
                <span class="wpdp_3">Sample HTML: &lt;input type=&quot;text&quot; id=&quot;datepicker&quot; /&gt;</span>
            </small>


            <?php
            if ($wpjqpdp_pro) {
                wpjqpdp_pro_settings();
            }
            ?>


            <p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php _e('Save Changes', 'wp_jqpdp'); ?>" /></p>
        </div>
    </form>
</div>