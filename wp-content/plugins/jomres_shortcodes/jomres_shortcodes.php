<?php
/*
Plugin Name: Jomres Shortcodes
Description: Plugin. Allows you to use Jomres shortcodes.
Version: 0.2
*/
/**
* Jomres CMS Specific Plugin
* @author Woollyinwales IT <sales@jomres.net>
* @version Jomres 9
* @package Jomres
* @copyright	2005-2015 Woollyinwales IT
* Jomres (tm) PHP files are released under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project.
**/

defined('WPINC') or die;

add_filter('the_content', 'jomres_fix_shortcodes');
add_filter('widget_text', 'do_shortcode');

if (!defined('AUTO_UPGRADE'))
	{
	if (!is_admin())
		{
		add_action('init', 'jomres_shortcodes_init');
		add_action('wp_enqueue_scripts', 'jomres_shortcodes_add_jomres_js_css', 9999);
		add_action('wp_footer', 'jomres_shortcodes_add_jomres_js_css');
		}

	add_action('init', 'jomres_shortcodes_register');
	}

add_action('wp_logout',	'jomres_shortcodes_wp_end_session');
add_action('wp_login', 'jomres_shortcodes_wp_end_session');

// Add mce buttons to post editor
//require_once( dirname(__FILE__) . '/includes/mce/jomres_shortcodes_tinymce.php');

/* Start Adding Functions Below this Line */

/*
 * Fix Shortcodes
 * @since v0.1
 */
function jomres_fix_shortcodes($content)
	{
	$array = array (
		'<p>[' => '[',
		']</p>' => ']',
		']<br />' => ']'
		);
	$content = strtr($content, $array);
	return $content;
	}

/*
 * Jomres Shortcodes
 * @since v0.1
 */
function jomres_shortcodes( $atts, $content = null )
	{
	extract( shortcode_atts( array(
		'task' => '',
		'params' => '',
		), $atts ) );

	if ($task != '')
		{
		ob_start();
		if ($params != '')
			{
			$params = str_replace("&amp;","&",$params);
			$params = str_replace("&#038;","&",$params);

			$args_array = explode("&",$params);
			foreach ($args_array as $arg)
				{
				$vals = explode ("=",$arg);
				if(array_key_exists(1,$vals))
					{
					$vals[1] = str_replace("+","-",$vals[1]);
					$_REQUEST[$vals[0]]=$vals[1];
					$_GET[$vals[0]]=$vals[1];
					}
				}
			}

		remove_filter('widget_text_content', 'wpautop');

		$MiniComponents =jomres_getSingleton('mcHandler');
		set_showtime('task',$task);
		$MiniComponents->specificEvent('06000',$task);

		return ob_get_clean();
		}
	else
		return '';
	}

// Register jomres shortcodes
function jomres_shortcodes_register()
	{
	add_shortcode('jomres', 'jomres_shortcodes');
	}

function jomres_shortcodes_init()
	{
	if (!defined('_JOMRES_INITCHECK'))
		define( '_JOMRES_INITCHECK', 1 );

	if (!defined('JOMRES_ROOT_DIRECTORY'))
		{
		if (file_exists(dirname(__FILE__).'/../../../jomres_root.php'))
			require_once (dirname(__FILE__).'/../../../jomres_root.php');
		else
			define ( 'JOMRES_ROOT_DIRECTORY' , "jomres" ) ;
		}

	if (file_exists(dirname(__FILE__).'/../../../'.JOMRES_ROOT_DIRECTORY.'/framework.php'))
		{
		require_once(dirname(__FILE__).'/../../../'.JOMRES_ROOT_DIRECTORY.'/framework.php');
		}
	else
		echo "Error: Jomres is not installed.";
	}

function jomres_shortcodes_add_jomres_js_css()
	{
	$wp_jomres = wp_jomres::getInstance();
	$wp_jomres->add_jomres_js_css();
	}

function jomres_shortcodes_wp_end_session()
	{
	$_SESSION['jomres_wp_session'] = array();
	}

/* Stop Adding Functions Below this Line */
