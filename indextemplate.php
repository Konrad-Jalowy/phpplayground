<?php
include 'template.php';
$template = new Template();
$template->assign('username', 'Terry');
$template->assign('age',10);
$template->assign('fav_food','Pizza');
$template->render('myTemplate');
?>