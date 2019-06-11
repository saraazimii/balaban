<?php
defined('ABSPATH') or die('No script kiddies please!');


//FOR QUICK DEBUGGING
if (!function_exists('pre')) {

    function pre($data) {
        if (isset($_GET['debug'])) {
            pree($data);
        }
    }

}

if (!function_exists('pree')) {

    function pree($data) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}

function wpjqpdp_menu() {
    add_options_page('WP jQuery Persian Datepicker', 'WP jQuery Persian Datepicker', 'update_core', 'wp_jqpdp', 'wp_jqpdp');
}

function wp_jqpdp() {

    if (!current_user_can('update_core')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }

    global $wpjqpdb, $wpjqpdp_dir, $wpjqpdp_pro, $wpjqpdp_data;

    include($wpjqpdp_dir . 'wpjqpdp_settings.php');
}

function wpjqpdp_plugin_links($links) {
    global $wpjqpdp_premium_link, $wpjqpdp_pro;

    $settings_link = '<a href="options-general.php?page=wp_jqpdp">Settings</a>';

    if ($wpjqpdp_pro) {
        array_unshift($links, $settings_link);
    } else {

        $wpjqpdp_premium_link = '<a href="' . $wpjqpdp_premium_link . '" title="Go Premium" target=_blank>Go Premium</a>';
        array_unshift($links, $settings_link, $wpjqpdp_premium_link);
    }


    return $links;
}

function register_wpjqpdp_scripts() {


    if (is_admin()) {

        wp_enqueue_media();
    } else {
        
    }

    wp_register_style('wpjqpdp-default', plugins_url('css/persianDatepicker-default.css', dirname(__FILE__)));

    wp_enqueue_style('wpjqpdp-default');

    wp_enqueue_script(
            'wpjqpdp-script1', plugins_url('js/persianDatepicker.min.js', dirname(__FILE__)), array('jquery')
    );
    //wp_register_style('wpdp-style2', plugins_url('css/front-styles.css', dirname(__FILE__)));
    //wp_enqueue_style('wpdp-style2');
    //wp_enqueue_script(
    //      'wpdp-scripts2', plugins_url('js/scripts-front.js', dirname(__FILE__)), array('jquery', 'jquery-ui-datepicker')
    //);
    //wp_register_style('wpdp-style3', plugins_url('css/jquery-ui.css', dirname(__FILE__)));
    //wp_enqueue_style('wpdp-style3');
}

if (!function_exists('wpjqp_datepicker')) {

    function wpjqp_datepicker() {
        
    }

}


if (!function_exists('wpjqpdp_footer_scripts')) {

    function wpjqpdp_footer_scripts() {
        $wpjqpdp_selectors = get_option('wpjqp_datepicker');

        if ($wpjqpdp_selectors != '') {
            ?>	

            <script type="text/javascript" language="javascript">


                jQuery(function ( $ ) {

            <?php
            global $wpjqpdp_options;
//pree($wpdp_options);
            $options = array();
            if (!empty($wpjqpdp_options)) {
                $wpjqpdp_options_db = get_option('wpjqpdp_options');
                foreach ($wpjqpdp_options as $option => $type) {
                    switch ($type) {
                        default:
                            $val = '"' . $wpjqpdp_options_db[$option] . '"';
                            break;
                        case 'checkbox':
                            $val = ($wpjqpdp_options_db[$option] == true ? 'true' : 'false'); //exit;
                            break;
                    }
                    $options[] = $option . ': ' . $val . '';
                }
            }
//pree($options);
            ?>

                    //$("<?php echo $wpjqpdp_selectors; ?>").persianDatepicker({<?php echo implode(', ', $options); ?>});
                    jQuery("<?php echo $wpjqpdp_selectors; ?>").each(function(){
                        var o = $(this).data("options");
                        $(this).persianDatepicker(o); 
                    });


                });

            </script>    
            <?php
        }
    }

}
?>