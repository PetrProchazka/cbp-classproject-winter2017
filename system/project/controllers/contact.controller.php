<?php

//  /system/project/views/contact/form.php
//  contact/form
$form_view = new view('contact/form');
var_dump($form_view);

// example of retrieving the rendered HTML and not printing it 
$html = $form_view->render(false);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
    <nav>
        <a href="?">Home</a>
    </nav>

    <?php $form_view->render(); // printing the rendered HTML right away ?>    
    
</body>
</html>