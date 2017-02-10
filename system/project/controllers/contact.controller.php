<?php

$email = request::post('email', '');
$text = request::post('text', '');
$newsletter = request::post('newsletter', '0');

//  /system/project/views/contact/form.php
//  contact/form
$form_view = new view('contact/form');
$form_view->template_variables['email'] = $email;
$form_view->template_variables['text'] = $text;
$form_view->template_variables['newsletter'] = $newsletter;
// $form_view->newsletter = $newsletter;


var_dump($form_view);

// example of retrieving the rendered HTML and not printing it 
$html = $form_view->render(false);
//var_dump($html);

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