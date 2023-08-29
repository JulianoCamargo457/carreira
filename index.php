<?php
require_once __DIR__ . '/Router.php';
require_once __DIR__ . '/template.php';
$request = $_SERVER['REQUEST_URI'];

$template = new Template();
$template->header();
(new Router())->run($request);
$template->footer();