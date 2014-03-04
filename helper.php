<?php defined('_JEXEC') or die;

/**
 * File       helper.php
 * Created    6/7/13 1:51 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/betweenbrain/
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU General Public License version 2, or later.
 */
class modHelloAjaxWorldHelper
{
	public static function getAjax()
	{
		$input = JFactory::getApplication()->input;
		$data  = $input->get('data');

		return 'Hello Ajax World, ' . $data . '!';
	}
}
