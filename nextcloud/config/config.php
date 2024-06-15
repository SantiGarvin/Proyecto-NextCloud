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
  'instanceid' => 'ocnuhwwxe9z7',
  'passwordsalt' => 'RDW1O91inGB2B5X4iTmIpb5Qf1nU4r',
  'secret' => 'Q071pAVHKpZPTUmYQHNYCWFaNu3M7PM01Ae365O0koEjSuxf',
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
