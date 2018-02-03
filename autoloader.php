<?php

/**
 * This Autoloads dBug
 *
 * PHP version 7
 *
 * @category Classes
 * @package  dBug
 * @author   Julian Haagsma <jhaagsma@gmail.com>
 * @link     https://github.com/jhaagsma/dBug
 * @since    Feb 2018
 */

spl_autoload_register(
    function ($class) {
        if ($class == 'dBug') {
            include_once dirname(__FILE__).'/dBug.php';
        }
    }
);
