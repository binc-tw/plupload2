<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Plupload 2 - UI Widget example</title>

<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
<link rel="stylesheet" href="../src/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<?php

$libs = array(
	'core/mOxie.js',
	'core/Utils.js',
	'core/Exceptions.js',
	'core/I18N.js',
	'core/EventTarget.js',
	'core/Runtime.js',
	'core/Transporter.js',
	'core/FileAPI.js',
	'core/Image.js',
	'core/XMLHttpRequest.js',
	'html5.js',
	'flash.js'
);

foreach ($libs as $lib) {
	echo '<script type="text/javascript" src="../src/moxie/src/javascript/'.$lib.'"></script>' . "\n";	
}

?>

<script type="text/javascript" src="../src/plupload.js"></script>
<script type="text/javascript" src="../src/jquery.ui.plupload/jquery.ui.plupload.js"></script>

</head>
<body>

<div id="container">
	<div id="filepicker"> </div>
</div>

<script>
$('#filepicker').plupload({
	runtimes: "html5",
	url: 'upload.php',
	chunk_size: '5mb',
	flash_swf_url: '../src/moxie/js/Moxie.swf',
	required_features: {
			
	}
});
</script>


</body>
</html>