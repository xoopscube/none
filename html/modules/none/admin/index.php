<?php

require '../../../mainfile.php' ;

if( ! defined( 'XOOPS_TRUST_PATH' ) ) {
    die( 'set XOOPS_TRUST_PATH in mainfile.php' );
}

$mydirname = basename(dirname(__FILE__, 2));
$mydirpath = dirname(__FILE__, 2);
require $mydirpath . '/mytrustdirname.php'; // set $mytrustdirname

$page = xoops_getrequest('page');
if (empty($page)) {
    header('Location: ' . XOOPS_URL . '/modules/' . $mydirname
           . '/admin/index.php?mode=admin&lib=altsys&page=mytplsadmin');
} else {
    require XOOPS_TRUST_PATH . '/modules/' . $mytrustdirname . '/admin.php';
}
