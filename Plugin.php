<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * upimgchr for Typecho 路过图床后台编辑器上传
 * 
 * @package upimgchr 
 * @author jclser
 * @version 1.0
 * @link http://dearfish.top/easygo/280_imgchr.html
 */
class upimgchr_Plugin implements Typecho_Plugin_Interface
{
    /**
     * 激活插件方法,如果激活失败,直接抛出异常
     * 
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function activate()
    {
        Typecho_Plugin::factory('admin/write-post.php')->bottom = array('upimgchr_Plugin', 'render');
        Typecho_Plugin::factory('admin/write-page.php')->bottom = array('upimgchr_Plugin', 'render');
    }
    
    /**
     * 禁用插件方法,如果禁用失败,直接抛出异常
     * 
     * @static
     * @access public
     * @return void
     * @throws Typecho_Plugin_Exception
     */
    public static function deactivate(){}
    
    /**
     * 获取插件配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form 配置面板
     * @return void
     */
    public static function config(Typecho_Widget_Helper_Form $form)
    {

    }
    
    /**
     * 个人用户的配置面板
     * 
     * @access public
     * @param Typecho_Widget_Helper_Form $form
     * @return void
     */
    public static function personalConfig(Typecho_Widget_Helper_Form $form){}
    
    /**
     * 插件实现方法
     * 
     * @access public
     * @return void
     */
    public static function render()
    {
        echo '<script async id="chevereto-pup-src" src="https://imgchr.com/sdk/pup.js" data-url="https://imgchr.com/upload" data-auto-insert="markdown-embed"></script>';
    }
}

