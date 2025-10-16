<?php

declare(strict_types=1);

if (!isset($_SERVER['REQUEST_URI'])) {
    $_SERVER['REQUEST_URI'] = '/test';
}

/**
 * This file is part of the Ease TWBootstrap4 Widgets package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if ((\PHP_SAPI !== 'cli') && (session_status() === 'PHP_SESSION_NONE')) {
    session_start();
} else {
    $_SESSION = [];
}

require __DIR__.'/../vendor/autoload.php';

\define('EASE_APPNAME', 'EaseUnitTest');
\define('EASE_LOGGER', 'syslog');
\define('DB_HOST', 'localhost');
\define('DB_PASSWORD', 'easetest');
\define('DB_DATABASE', 'easetest');
\define('DB_USERNAME', 'easetest');
\define('DB_PORT', 5432);
\define('DB_TYPE', 'pgsql');

\Ease\Locale::singleton(null, realpath(__DIR__ . '/../i18n'), 'ease-twbootstrap4-widgets');
\Ease\Shared::user(new Ease\Anonym());
