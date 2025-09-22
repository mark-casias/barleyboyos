<?php

// phpcs:ignoreFile

/**
 * Database settings.
 *
 * Should be in settings.local.php or settings.ddev.php depending.
 */
$databases = [];

/**
 * Location of the site configuration files.
 */
$settings['config_sync_directory'] = '../config/sync';

/**
 * Settings:
 */

/**
 * Salt for one-time login links, cancel links, form tokens, etc.
 *
 * Should be set in settings.local.php or settings.ddev.php.
 */
$settings['hash_salt'] = '';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = FALSE;

/**
 * Fallback to HTTP for Update Manager and for fetching security advisories.
 */
# $settings['update_fetch_with_http_fallback'] = TRUE;

/**
 * External access proxy settings:
 */
# $settings['http_client_config']['proxy']['http'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['https'] = 'http://proxy_user:proxy_pass@example.com:8080';
# $settings['http_client_config']['proxy']['no'] = ['127.0.0.1', 'localhost'];

/**
 * Reverse Proxy Configuration:
 */
# $settings['reverse_proxy'] = TRUE;

/**
 * Reverse proxy addresses.
 */
# $settings['reverse_proxy_addresses'] = ['a.b.c.d', 'e.f.g.h/24', ...];

/**
 * Reverse proxy trusted headers.
 */
# $settings['reverse_proxy_trusted_headers'] = \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_FOR | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_HOST | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PORT | \Symfony\Component\HttpFoundation\Request::HEADER_X_FORWARDED_PROTO | \Symfony\Component\HttpFoundation\Request::HEADER_FORWARDED;

/**
 * Default mode for directories and files written by Drupal.
 */
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;

/**
 * Public file path:
 */
$settings['file_public_path'] = 'sites/default/files';

/**
 * File schemes whose paths should not be normalized:
 */
# $settings['file_sa_core_2023_005_schemes'] = ['porcelain'];

/**
 * Configuration for phpinfo() admin status report.
 */
# $settings['sa_core_2023_004_phpinfo_flags'] = ~ (INFO_VARIABLES | INFO_ENVIRONMENT);

/**
 * Private file path:
 */
$settings['file_private_path'] = '../private';

/**
 * Temporary file path:
 */
$settings['file_temp_path'] = '/tmp';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * Override the default service container class.
 */
# $settings['container_base_class'] = '\Drupal\Core\DependencyInjection\Container';

/**
 * Trusted host configuration.
 */
# $settings['trusted_host_patterns'] = [];

/**
 * The default list of directories that will be ignored by Drupal's file API.
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];

/**
 * The default number of entities to update in a batch process.
 */
$settings['entity_update_batch_size'] = 50;

/**
 * Entity update backup.
 */
$settings['entity_update_backup'] = TRUE;

// Automatically generated include for settings managed by ddev.
if (getenv('IS_DDEV_PROJECT') == 'true' && file_exists(__DIR__ . '/settings.ddev.php')) {
  include __DIR__ . '/settings.ddev.php';
}

/**
 * Load local development override configuration, if available.
 */
#
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
