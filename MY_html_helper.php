<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// created by haezal musa 
// ============================================================================
// ------------------------------------------------------------------------

/**
 * Paragraph
 * 
 * Create an HTML paragraph-Tag with classes and attributes
 * 
 * @access public
 * @param $string The String you want to wrap in a paragraph
 * @param $string will be used as class or $array attributes a key/value pair for more attributes
 * @return string
 */
if ( ! function_exists('tbs_p') )
{
  function tbs_p($text = '', $attributes = array())
	{
		$string_attr = '';
		if(is_array($attributes))
		{
			foreach($attributes as $key=>$value)
			{
				$string_attr += ' ' + trim($key) + '="' + trim($value) + '"';
			}
		}
		else {
			$tpl = ' class="%1$s"';
			$string_attr = sprintf($tpl,$attributes);
		}

		$tpl = '<p%1$s>%2$s</p>';		
		return sprintf($tpl,$string_attr,$text);
	}
}

/**
 * Paragraph Small
 * 
 * Create a Paragraph Tag with the text wrapped in a <small> Tag
 * 
 * @access public
 * @param $string The String you want to wrap in a paragraph
 * @param $string will be used as class or $array attributes a key/value pair for more attributes
 * @return string
 */
if ( ! function_exists('tbs_p_small') )
{
	function tbs_p_small($text = '', $attributes = array())
	{
		$tpl = '<small>%1$s</small>';
		$text = sprintf($tpl,$text);

		return tbs_p($text,$attributes);
	}
}



// added by haezal 
if ( ! function_exists('icon') ) 
{
	function icon ($icon, $white=false) 
	{
		if($white)
		{
			return "<i class='icon-".$icon." icon-white'></i>";
		}
		else
		{
			return "<i class='icon-".$icon."'></i>";
		}
		
	}
}

// icon for status
if ( ! function_exists('icon_by_status') ) 
{
	function icon_by_status ($status) 
	{
		switch($status)
		{
			case "Y":
			case 1:
			case "YA":
			case "1":
				return "<i class='icon-ok'></i>";
				break;
			default:
				return "<i class='icon-remove'></i>";
			
		}
	}
}
