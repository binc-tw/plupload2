<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Plupload 2 - UI Widget example</title>


<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<?php /*
<link rel="stylesheet" href="../src/jquery.ui.plupload/css/ui-lightness/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="../src/jquery.ui.plupload/js/jquery.min.js"></script>
<script type="text/javascript" src="../src/jquery.ui.plupload/js/jquery-ui.min.js"></script>
*/ ?>

<link rel="stylesheet" href="../src/jquery.ui.plupload/css/jquery.ui.plupload.css" type="text/css" />

<?php $libs = array(
	'core/mOxie.js',
	'core/Utils.js',
	'core/Exceptions.js',
	'core/I18N.js',
	'core/EventTarget.js',
	'core/Runtime.js',
	'core/Transporter.js',
	'core/FileAPI.js',
	'core/Image.js',
	'extra/ImageInfo.js',
	'core/XMLHttpRequest.js',
	'html5.js',
	'html4.js',
	'flash.js',
	'silverlight.js'
);

foreach ($libs as $lib) {
	echo '<script type="text/javascript" src="../src/moxie/src/javascript/'.$lib.'"></script>' . "\n";	
}
?>

<script type="text/javascript" src="../src/plupload.js"></script>
<script type="text/javascript" src="../src/jquery.ui.plupload/js/jquery.cookie.js"></script>
<script type="text/javascript" src="../src/jquery.ui.plupload/jquery.ui.plupload.js"></script>

<?php /* <script type="text/javascript" src="http://jqueryui.com/themeroller/themeswitchertool/"></script>
<script>
	$(document).ready(function(){
		$('#switcher').themeswitcher();
	});
</script>  
*/ ?>

</head>
<body>

	<div id="switcher" style="margin-bottom: 20px"></div>

	<div id="container">
		<div id="filepicker"> </div>
	</div>

	<script>
	$('#filepicker').plupload({
		runtimes: "html5,flash,silverlight,html4",
		url: 'upload.php',
		//chunk_size: '5mb',
		multi_selection: true,
		/*filters : [
			{title : "Image files", extensions : "jpg,jpeg,gif,png"},
			{title : "Zip files", extensions : "zip"}
		],*/
		flash_swf_url: '../js/Moxie.swf',
		silverlight_xap_url: '../js/Moxie.xap',

		views: {
			list: true,
			thumbs: true
		},
		default_view: 'thumbs',
		remember_view: true, // requires jquery cookie plugin
		sortable: true,
		rename: true,
		dragdrop: true
	});
	</script>


</body>
</html>