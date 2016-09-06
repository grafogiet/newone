<h1>Ogiet Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('ogiet-settings-group');?>
    <?php do_settings_sections('graf_ogiet')?>
    <?php submit_button(); ?>
</form>