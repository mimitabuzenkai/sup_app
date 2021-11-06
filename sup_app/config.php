<?php

$uri = $_SERVER['REQUEST_URI'];
define('CURRENT_URI', $_SERVER['REQUEST_URI']);
define('SOURCE_BASE', __DIR__ . '/php/');
if(preg_match("/\/study_no8\/sup_app\//i", CURRENT_URI, $match)) {
  define('BASE_CONTEXT_PATH', $match[0]);
}
define('GO_HOME', 'index_sup');
define('GO_REFERER', 'referer');