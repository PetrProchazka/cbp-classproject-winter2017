<?php

$today = date('j. n. Y');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage | <?php echo config::get('site_title'); ?></title>
</head>
<body>
    The homepage.<br />

    The URL of this project is <?php echo config::get('base_url', 'unknown'); ?>
    <br />
    The administrator of this project is <?php echo config::get('administrator', 'not set in config'); ?>


</body>
</html>