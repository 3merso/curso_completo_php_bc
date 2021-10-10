<?php

define('DRIVER', 'mysql');
define('DATABASE', 'teste');
define('DATABASE_USER', 'user');
define('DATABASE_PASS', 'secret');

function getConnection()
{
    return DRIVER . ", " . DATABASE . ", " . DATABASE_USER . ", " . DATABASE_PASS;
}