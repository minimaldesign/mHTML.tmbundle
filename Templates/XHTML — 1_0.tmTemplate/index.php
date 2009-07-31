<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="<?= (stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml") ? 'xhtml+xml' : 'text/html') ?>; charset=utf-8" />
	<meta http-equiv="Content-Language" content="en-us" />

	<title> | ${TM_NEW_FILE_BASENAME}</title>

	<meta name="Keywords" content="__CHANGE__" />
	<meta name="Description" content="__CHANGE__" />
		
	<meta name="ROBOTS" content="ALL" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="MSSmartTagsPreventParsing" content="true" />
	<meta name="Copyright" content="(c) ${TM_YEAR} ${TM_ORGANIZATION_NAME}" />

	<link href="_css/content.css" rel="stylesheet" type="text/css" media="all" />
	<?php require_once('_php/browser.php'); css_add() ?>
</head>
<body class="${TM_NEW_FILE_BASENAME}">

</body>
</html>