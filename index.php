<?php
require(__DIR__.'/vendor/autoload.php');

$contacts = array(
	'Bob Arctor',
	'John Doe',
	'Homer Simpson'
);

$smarty = new Smarty();

$smarty->debugging = false;
$smarty->force_compile = true;
$smarty->caching = false;

$smarty->assign('website_title', 'Mon site');
$smarty->assign('name', 'bobby');
$smarty->assign('date', '2014-01-12 14:35:12');
$smarty->assign('contacts', $contacts);
$smarty->display('index.tpl');