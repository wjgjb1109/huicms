<?php
/**
 *
 * index(入口文件)
 *
 * @package         HuiCms
 * @author          Terry QQ:466209365 <admin@huicms.cn>
 * @copyright       Copyright (c) 20012-2013  (http://www.huicms.cn)
 * @license         http://www.huicms.cn/license.txt
 * @version         Huicms企业网站管理系统 v1.0 2013-04-14 huicms.cn $
 */
define('HCMS_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
if (!file_exists(dirname(__FILE__) . '/Conf/install.lock')) {
    header("location:../install/");
    exit;
}
/* 数据目录 */
define('RUNTIME_PATH', HCMS_PATH . 'Runtime/');
define('APP_DEBUG', TRUE);
require 'ThinkPHP/ThinkPHP.php';
