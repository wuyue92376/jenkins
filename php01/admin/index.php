<?php
/**
 * (C)2012-2014 twcms.com TongWang Inc.
 * Author: wuzhaohuan <kongphp@gmail.com>
 */

define('DEBUG', 0);	//调试模式，分三种：0 关闭调试; 1 开启调试; 2 开发调试   注意：开启调试会暴露绝对路径和表前缀
define('APP_NAME', 'twcms_admin');	//APP名称
define('F_APP_NAME', 'twcms');	//前台APP名称
define('ADM_PATH', dirname($_SERVER['SCRIPT_FILENAME']).'/');	//后台目录
define('TWCMS_PATH', dirname(ADM_PATH).'/');	//TWCMS目录
define('APP_PATH', TWCMS_PATH.F_APP_NAME.'/');	//APP目录
if(!is_file(APP_PATH.'config/config.inc.php')) exit('<html><body><script>location="../'.F_APP_NAME.'/install/'.'"</script></body></html>');
define('RUNTIME_MODEL', APP_PATH.'runtime/'.F_APP_NAME.'_model/');	//模型缓存目录
define('CONTROL_PATH', ADM_PATH.'control/');	//控制器目录
define('VIEW_PATH', ADM_PATH.'view/');	//视图目录
define('KONG_PATH', APP_PATH.'kongphp/');	//框架目录
require KONG_PATH.'kongphp.php';
echo "\r\n<!--".number_format(microtime(1) - $_ENV['_start_time'], 4).'-->';
