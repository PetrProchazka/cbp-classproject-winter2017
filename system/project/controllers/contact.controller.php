<?php

$email = request::post('email', '');
$text = request::post('text', '');
$newsletter = request::post('newsletter', '0');

//  /system/project/views/contact/form.php
//  contact/form
$form_view = new view('contact/form');
$form_view->email = $email;
$form_view->text = $text;
$form_view->newsletter = $newsletter;

presenter::setTitle('Contact form');

presenter::present($form_view);