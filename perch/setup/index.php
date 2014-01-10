<?php

    // Double-check for PHP5.
    if (version_compare(PHP_VERSION, '5.2.0', '<')) {
        die('Perch requires PHP 5.2 or greater to install. You have: PHP ' . PHP_VERSION);
    }

    require_once dirname(__FILE__) . '/../core/inc/pre_config.php';
    
    if (file_exists(dirname(__FILE__) . '/../config/config.php')) {
        include_once(dirname(__FILE__) . '/../config/config.php');   
    }
    
    
    
    require_once dirname(__FILE__) . '/../core/lib/PerchUtil.class.php';
    require_once dirname(__FILE__) . '/../core/lib/PerchLang.class.php';
    require_once dirname(__FILE__) . '/../core/lib/Perch.class.php';
    require_once dirname(__FILE__) . '/../core/lib/PerchSession.class.php';
    require_once dirname(__FILE__) . '/../core/lib/PerchForm.class.php';
    
    
    



    if (!defined('PERCH_PATH')) {
        define('PERCH_PATH', realpath('../'));
        define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');
    }
    
    define('PERCH_ERROR_MODE', 'SILENT');

    $Perch  = new Perch;


    include(PERCH_PATH . '/core/inc/loader.php');


    $mode = 'gather';
    
    if (isset($_GET['install'])) {
        $mode = 'install';
    }


    include('modes/'.$mode.'.pre.php');
    include('top.php');
    
    include('modes/'.$mode.'.post.php');    
    
    include('btm.php')


?>