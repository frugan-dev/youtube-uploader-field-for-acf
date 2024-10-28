<?php

declare(strict_types=1);

/*
 * This file is part of the WordPress plugin "YouTube Uploader Field for ACF".
 *
 * (ɔ) Frugan <dev@frugan.it>
 *
 * This source file is subject to the GNU GPLv3 or later license that is bundled
 * with this source code in the file LICENSE.
 */

use FruganYUFFACF\Bootstrap;

/*
 * Plugin Name: YouTube Uploader Field for ACF
 * Plugin URI: https://github.com/frugan-dev/youtube-uploader-field-for-acf
 * Description: YouTube Uploader Field for ACF is a WordPress plugin that allows you to upload videos directly to YouTube via API from the WordPress admin area and/or select existing videos on your YouTube channel based on playlists.
 * Version: 0.1.0
 * Requires PHP: 8.0
 * Author: Frugan
 * Author URI: https://frugan.it
 * License: GPLv3 or later
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Donate link: https://buymeacoff.ee/frugan
 */

if (!defined('ABSPATH')) {
    exit;
}

if (file_exists(__DIR__.'/vendor/autoload.php')) {
    require __DIR__.'/vendor/autoload.php';
}

define('FRUGAN_YUFFACF_VERSION', '0.1.0');
define('FRUGAN_YUFFACF_BASENAME', plugin_basename(__FILE__));
define('FRUGAN_YUFFACF_NAME', dirname(FRUGAN_YUFFACF_BASENAME));
define('FRUGAN_YUFFACF_NAME_UNDERSCORE', str_replace('-', '_', FRUGAN_YUFFACF_NAME));
define('FRUGAN_YUFFACF_URL', plugin_dir_url(__FILE__));
define('FRUGAN_YUFFACF_PATH', plugin_dir_path(__FILE__));

Bootstrap::getInstance();
