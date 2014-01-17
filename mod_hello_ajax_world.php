<?php defined('_JEXEC') or die;

/**
 * File       mod_hello_ajax_world.php
 * Created    1/17/14 12:29 PM
 * Author     Matt Thomas | matt@betweenbrain.com | http://betweenbrain.com
 * Support    https://github.com/Joomla-Ajax-Interface/Hello-Ajax-World-Module/issues
 * Copyright  Copyright (C) 2013 betweenbrain llc. All Rights Reserved.
 * License    GNU General Public License version 2, or later.
 */

// Include the helper.
require_once __DIR__ . '/helper.php';

// Instantiate global document object
$doc = JFactory::getDocument();

$js = <<<JS
(function ($) {
	$(document).on('click', 'input[type=submit]', function () {
		var value   = $('input[name=data]').val(),
			request = {
					'option' : 'com_ajax',
					'module' : 'hello_ajax_world',
					'data'   : value,
					'format' : 'raw'
				};
		$.ajax({
			type   : 'POST',
			data   : request,
			success: function (response) {
				$('.status').html(response);
			}
		});
		return false;
	});
})(jQuery)
JS;

$doc->addScriptDeclaration($js);

require JModuleHelper::getLayoutPath('mod_hello_ajax_world');