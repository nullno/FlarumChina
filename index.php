<?php

/*
 * This file is part of Flarum.
 *
 * (c) Toby Zerner <toby.zerner@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require 'vendor/autoload.php';

$server = new Flarum\Forum\Server(__DIR__);

$server->listen();

// header("location:https://nullno.com/p/1-service");
