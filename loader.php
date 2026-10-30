<?php
define('NETWORKPATH', __DIR__);
$site = pathinfo(SITEPATH, PATHINFO_FILENAME);
define('SITENAME', $site == 'www' ? 'aztras' : $site);

include_once __DIR__ . '/../../../spring/entry.php';
runFrameworkFile('site/begin');
