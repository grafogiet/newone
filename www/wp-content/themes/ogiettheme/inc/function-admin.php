<?php

/*
 @ package ogiettheme
 *
 * ==========================
 *         ADMIN PAGE
 * ==========================
 *
 */


function ogiet_add_admin_page(){
    //Generate Ogiet admin page
    add_menu_page('Ogiet Theme','Ogiet','manage_options','graf_ogiet','ogiet_theme_create_page',
        'dashicons-businessman',110);
    //Generate Admin Sub page
    add_submenu_page('graf_ogiet','Ogiet Theme Options','Settings','manage_options','graf_ogiet','ogiet_theme_create_page');
    add_submenu_page('graf_ogiet','Ogiet CSS Options','Custom CSS','manage_options','graf_ogiet_css','ogiet_settings');
    //Activity custom settings
    add_action('admin_init', 'ogiet_custom_settings');
}

add_action('admin_menu','ogiet_add_admin_page');

function ogiet_custom_settings(){
    register_setting('ogeit-settings-group', 'first_name');
    add_settings_section('ogiet-sidebar-options','Sidebar Options','ogiet_sidebar_options','graf_ogiet');
    add_settings_field('sidebar-name','First name','ogiet_sidebar_name','graf_ogiet','ogiet-sidebar-options');
}

function ogiet_sidebar_options () {
    echo 'Customize your sidebar';
}

function ogiet_sidebar_name() {
    $firstName = esc_attr(get_option('first_name'));
   echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder=""/>';
}

function ogiet_theme_create_page () {
    require_once ( get_template_directory().'/inc/templates/ogiet_admin.php');
}

function ogiet_settings(){
    echo "<h2>Hello<h2>";
}


