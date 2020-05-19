<?php
/**
 * XOOPS slideshow module
 *
 * You may not change or alter any portion of this comment or credits
 * of supporting developers from this source code or any supporting source code
 * which is considered copyrighted (c) material of the original comment or credit authors.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @copyright       The XOOPS Project http://sourceforge.net/projects/xoops/
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         module
 * @since           2.5.0
 * @author          Mohtava Project <http://www.mohtava.com>
 * @author          Hossein Azizabadi <djvoltan@gmail.com>
 * @version         $Id: $
 */
 
$modversion = array(
    // Main setting
    'name' => _MI_SLIDESHOW_TITLE,
    'description' => _MI_SLIDESHOW_DESC,
    'version' => 2.0,
    'author' => 'Hossein Azizabadi, Michael Beck, Lio MJ,',
    'credits' => 'Mohtava Project', 'Nivo Slider', 'Slick Slider',
    'license' => 'GNU GPL 2.0',
    'license_url' => 'www.gnu.org/licenses/gpl-2.0.html/',
    'image' => 'assets/images/logo.png',
    'dirname' => 'slideshow',
    'release_date' => '2020/06/01',
    'module_website_url' => "https://www.xoops.org/",
    'module_website_name' => "XOOPS Project",
    'help' => 'help',
    'module_status' => "Alpha",
    // Admin things
    'system_menu' => 1,
    'hasAdmin' => 1,
    'adminindex' => 'admin/index.php',
    'adminmenu' => 'admin/menu.php',
    // Modules scripts
    'onInstall' => 'include/install.php',
    // Main menu
    'hasMain' => 0,
    // Recherche
    'hasSearch' => 0,
    // Commentaires 
    'hasComments' => 0,
    // ------------------- Min Requirements -------------------
    'min_php'             => '7.1',
    'min_xoops'           => '2.5.10',
    'min_admin'           => '1.2',
    'min_db'              => [
        'mysql' => '5.5',
    ],
    // for module admin class
	'dirmoduleadmin' => 'Frameworks/moduleclasses',
	 'icons16' => 'Frameworks/moduleclasses/icons/16',
	 'icons32' => 'Frameworks/moduleclasses/icons/32'
);

// sql
$modversion['sqlfile']['mysql'] = "sql/mysql.sql";
$modversion['tables'][1] = "slideshow_item";
$modversion['tables'][2] = "slideshow_category";

$modversion['templates'] = [
    ['file' => 'admin/slideshow_category.tpl', 'description' => ''],
    ['file' => 'admin/slideshow_header.tpl', 'description' => ''],
	['file' => 'admin/slideshow_footer.tpl', 'description' => ''],
    ['file' => 'admin/slideshow_slideshow.tpl', 'description' => ''],
    ['file' => 'blocks/slideshow_item.tpl', 'description' => ''],
	['file' => 'blocks/slideshow_marqueeslider.tpl', 'description' => ''],
    ['file' => 'blocks/slideshow_nivoslider.tpl', 'description' => ''],
    ['file' => 'blocks/slideshow_slickslider.tpl', 'description' => ''],
];

// block
$modversion['blocks'][] = array(
    'file' => 'slideshow_block.php',
    'name' => _MI_SLIDESHOW_BLOCK,
    'description' => '',
    'show_func' => 'slideshow_list_show',
    'edit_func' => 'slideshow_list_edit',
    'options' => '1200|400|1200|400|1|nivo|10|1',
    'template' => 'slideshow_block.tpl');
           
// conf
$modversion['config'][] = array(
    'name' => 'img_mime',
    'title' => '_MI_SLIDESHOW_IMAGE_MIME',
    'description' => '_MI_SLIDESHOW_IMAGE_MIME_DESC',
    'formtype' => 'select_multi',
    'valuetype' => 'array',
    'default' => array("image/gif", "image/jpeg", "image/png"),
    'options' => array(
        "bmp" => "image/bmp",
        "gif" => "image/gif",
        "jpeg" => "image/pjpeg",
        "jpeg" => "image/jpeg",
        "jpg" => "image/jpeg",
        "jpe" => "image/jpeg",
        "png" => "image/png"));
        
$modversion['config'][] = array(
    'name' => 'img_size',
    'title' => '_MI_SLIDESHOW_IMAGE_SIZE',
    'description' => '_MI_SLIDESHOW_IMAGE_SIZE_DESC',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => '5242880');
    
$modversion['config'][] = array(
    'name' => 'img_maxwidth',
    'title' => '_MI_SLIDESHOW_IMAGE_MAXWIDTH',
    'description' => '_MI_SLIDESHOW_IMAGE_MAXWIDTH_DESC',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => '1200');

$modversion['config'][] = array(
    'name' => 'img_maxheight',
    'title' => '_MI_SLIDESHOW_IMAGE_MAXHEIGHT',
    'description' => '_MI_SLIDESHOW_IMAGE_MAXHEIGHT_DESC',
    'formtype' => 'textbox',
    'valuetype' => 'text',
    'default' => '1200');                
?>