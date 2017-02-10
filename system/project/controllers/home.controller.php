<?php

$navigation = new view('navigation'); // /system/project/views/navigation.php

var_dump($navigation);
die();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage | <?php echo config::get('site_title'); ?></title>
</head>
<body>

    <?php echo $navigation; ?>
    
    The homepage.<br />

    The URL of this project is <?php echo config::get('base_url', 'unknown'); ?>
    <br />
    The administrator of this project is <?php echo config::get('administrator', 'not set in config'); ?>

    <h2>products</h2>
    <a href="<?php echo url::to('product', array('id' => 123)); ?>">A product</a>

</body>
</html>