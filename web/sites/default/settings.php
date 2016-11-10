<?php


 $databases = array();


$config_directories = array();


$settings['hash_salt'] = 'ZcWs5I7eKItmfag2JWWBMtXzQvPv9vwfYctVN3hRudu6diCNwFHUFjCTxTQnpM91xpfl3iGuAw';


$settings['update_free_access'] = FALSE;


$settings['container_yamls'][] = __DIR__ . '/services.yml';


$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * Load local development override configuration, if available.
 *
 * Use settings.local.php to override variables on secondary (staging,
 * development, etc) installations of this site. Typically used to disable
 * caching, JavaScript/CSS compression, re-routing of outgoing emails, and
 * other things that should not happen on development and testing sites.
 *
 * Keep this code block at the end of this file to take full effect.
 */
# if (file_exists(__DIR__ . '/settings.local.php')) {
#   include __DIR__ . '/settings.local.php';
# }
$databases['default']['default'] = array (
  'database' => 'd8c_db',
  'username' => 'gcarroll',
  'password' => 'landm1nes',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_X1qQYuLdZnuvRgN70zttHx4hWh2xnKpcG0QY9sYsfaVRH-TBRGfxUjuJNLT-aLY_IyMj0ArkDg/sync';
