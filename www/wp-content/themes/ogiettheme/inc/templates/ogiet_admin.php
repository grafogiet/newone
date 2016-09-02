<h1>Ogiet Theme Options</h1>
<form method="post" action="">
    <?php settings_fields('ogiet-settings-group');?>
    <?php do_settings_sections('graf_ogiet')?>
    <?php submit_button(); ?>
</form>