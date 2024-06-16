<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'och1zeizkv7e',
  'passwordsalt' => 'FqOIs79aZZ3V5SJmfHh+3ujlPwEIwv',
  'secret' => '/bycTr9QYwvUKRt/10AbUANXeRcBpGK0V38IiDBNDv9W+OFN',
  'trusted_domains' => 
  array (
    0 => 'localhost:8000',
    1 => 'awaited-causal-catfish.ngrok-free.app',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'mysql',
  'version' => '29.0.1.1',
  'overwrite.cli.url' => 'http://localhost:8000',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '',
  'dbtableprefix' => 'oc_',
  'mysql.utf8mb4' => true,
  'dbuser' => 'nextcloud',
  'dbpassword' => '100',
  'installed' => true,
  'check_data_directory_permissions' => false,
);
