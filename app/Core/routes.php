<?php
/**
 * Routes - all standard routes are defined here.
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date updated Sept 19, 2015
 */

/** Create alias for Router. */
use Core\Router;
use Helpers\Hooks;

/* Landing sectie */
Router::any('', 'Controllers\Home@index');
Router::any('home', 'Controllers\Home@index');
Router::any('overons', 'Controllers\Home@overons');
Router::any('contact', 'Controllers\Contact@index');

/* Boten sectie */
Router::any('boten', 'Controllers\Boten@index');

/* Cursussen sectie */
Router::any('cursussen', 'Controllers\Cursussen@index');

/* User sectie */
Router::any('login', 'Controllers\Login@index');
Router::any('registreren', 'Controllers\Registreren@index');
Router::any('loguit', 'Controllers\Login@loguit');


/** Module routes. */
$hooks = Hooks::get();
$hooks->run('routes');

/** If no route found. */
Router::error('Core\Error@index');

/** Turn on old style routing. */
Router::$fallback = false;

/** Execute matched routes. */
Router::dispatch();
