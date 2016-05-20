<?php
namespace Fam520\Bootstrap;;
use Fam520\Driver\System;
use Swiftx\System\Config;
use Swiftx\System\Core;
/**
 * 网页服务引导
 * @author			Hismer <odaytudio@gmail.com>
 * @since			2014-04-26
 * @copyright		Copyright (c) 2014-2015 Swiftx Inc.
 */
include '/srv/Framework/Bootstrap.php';

defined('ROOT_PATH') 	    or define('ROOT_PATH',         dirname(__DIR__).DS);           // 项目根目录
defined('PUBLIC_PATH') 	    or define('PUBLIC_PATH',       ROOT_PATH.'Public'.DS);         // 资源目录
defined('CONFIG_PATH') 	    or define('CONFIG_PATH',       ROOT_PATH.'Config'.DS);         // 配置文件目录
defined('APP_PATH')         or define('APP_PATH',          ROOT_PATH.'Application'.DS);    // 框架库目录
defined('TPL_PATH') 	    or define('TPL_PATH',          ROOT_PATH.'Template'.DS);       // 模板存放目录
defined('CACHE_PATH') 	    or define('CACHE_PATH',        ROOT_PATH.'Cache'.DS);          // 缓存存放目录
defined('LOGS_PATH') 	    or define('LOGS_PATH',         ROOT_PATH.'Logs'.DS);           // 日志存放目录
defined('PLUGINS_PATH')     or define('PLUGINS_PATH',      ROOT_PATH.'Plugins'.DS);        // 第三方插件目录
defined('LIBRARY_PATH')     or define('LIBRARY_PATH',      ROOT_PATH.'Library'.DS);        // 项目库目录
defined('FRAMEWORK_PATH')   or define('FRAMEWORK_PATH',    ROOT_PATH.'Swiftx'.DS);         // 框架库目录
defined('APP_NAMESPACE')    or define('APP_NAMESPACE',     'Fam520');                      // 项目命名空间

Core::RegisterNamespace('Fam520', LIBRARY_PATH);
Core::RegisterNamespace('Application', APP_PATH);
Core::RegisterNamespace('Smarty', PLUGINS_PATH.'Smarty'.DS);
Core::RegisterNamespace('QrCode', PLUGINS_PATH.'QrCode'.DS);
Core::RegisterNamespace('Ueditor', PLUGINS_PATH.'Ueditor'.DS);
Core::RegisterNamespace('Map', PLUGINS_PATH.'Map'.DS);