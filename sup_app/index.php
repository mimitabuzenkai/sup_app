<?php
require 'config.php';

require_once SOURCE_BASE . 'libs/router.php';
require_once SOURCE_BASE . 'libs/helper.php';
require_once SOURCE_BASE . 'libs/auth.php';

require_once SOURCE_BASE . 'models/abstract.model.php';
require_once SOURCE_BASE . 'models/user.model.php';
require_once SOURCE_BASE . 'models/sup.model.php';
require_once SOURCE_BASE . 'models/stock.model.php';

require_once SOURCE_BASE . 'libs/message.php';

session_start();

require_once SOURCE_BASE . 'db/datasource.php';
require_once SOURCE_BASE . 'db/user.query.php';
require_once SOURCE_BASE . 'db/sup.query.php';
require_once SOURCE_BASE . 'db/stock.query.php';

require_once SOURCE_BASE . 'views/sup_index.php';
require_once SOURCE_BASE . 'views/sup_insert.php';
require_once SOURCE_BASE . 'views/login.php';
require_once SOURCE_BASE . 'views/register.php';
require_once SOURCE_BASE . 'views/lack_process.php';
require_once SOURCE_BASE . 'views/status.php';

require_once SOURCE_BASE . 'lists/sup_item_list.php';
require_once SOURCE_BASE . 'lists/status_item_list.php';

require_once SOURCE_BASE . 'partials/header.php';
require_once SOURCE_BASE . 'partials/footer.php';

use function lib\route;

\partials\header\index();

$url = parse_url(CURRENT_URI);
$rpath = str_replace(BASE_CONTEXT_PATH, '', $url['path']);
$method = strtolower($_SERVER['REQUEST_METHOD']);

route($rpath, $method);

\partials\footer\index();



?>

