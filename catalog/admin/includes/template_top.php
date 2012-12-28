<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2012 osCommerce

  Released under the GNU General Public License
*/
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<meta name="robots" content="noindex,nofollow">
<title><?php echo TITLE; ?></title>
<base href="<?php echo HTTP_SERVER . DIR_WS_ADMIN; ?>">
<!--[if IE]><script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/excanvas.min.js'); ?>"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo tep_catalog_href_link('ext/jquery/ui/smoothness/jquery-ui-1.9.2.custom.min.css'); ?>">
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/jquery-1.8.3.min.js'); ?>"></script> 
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/ui/jquery-ui-1.9.2.custom.min.js'); ?>"></script>

<?php
  if (tep_not_null(JQUERY_DATEPICKER_I18N_CODE)) {
?>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/jquery/ui/i18n/jquery.ui.datepicker-' . JQUERY_DATEPICKER_I18N_CODE . '.js'); ?>"></script>
<script type="text/javascript">
$.datepicker.setDefaults($.datepicker.regional['<?php echo JQUERY_DATEPICKER_I18N_CODE; ?>']);
</script>
<?php
  }
?>
<script type="text/javascript" src="<?php echo tep_catalog_href_link('ext/flot/jquery.flot.js'); ?>"></script>
<link rel="stylesheet" type="text/css" href="includes/stylesheet.css">
<?php
  if (!tep_session_is_registered('admin')) {
?>
<style type="text/css">
#contentText {
  margin-left: 0;
}
</style> 
<?php
 }
?>

<script type="text/javascript" src="includes/general.js"></script>
</head>
<body>

<?php require(DIR_WS_INCLUDES . 'header.php'); ?>

<?php
  if (tep_session_is_registered('admin')) {
    include(DIR_WS_INCLUDES . 'column_left.php');
  } 
?>

<div id="contentText">
