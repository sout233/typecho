<?php
// site root path
define('__TYPECHO_ROOT_DIR__', dirname(__FILE__));

// plugin directory (relative path)
define('__TYPECHO_PLUGIN_DIR__', '/usr/plugins');

// theme directory (relative path)
define('__TYPECHO_THEME_DIR__', '/usr/themes');

// admin directory (relative path)
define('__TYPECHO_ADMIN_DIR__', '/admin/');

// register autoload
require_once __TYPECHO_ROOT_DIR__ . '/var/Typecho/Common.php';

// init
\Typecho\Common::init();

// config db
$db = new Typecho_Db('Pdo_Pgsql', 'typecho_');
$db->addServer(array (
  'host' => 'tiny.db.elephantsql.com',
  'port' => 5432,
  'user' => 'idddtvxm',
  'password' => 'RjI4-dyKlqD4wp6b3eAnROP6A3TPcgB7',
  'charset' => 'utf8',
  'database' => 'idddtvxm',
), \Typecho\Db::READ | \Typecho\Db::WRITE);
\Typecho\Db::set($db);
