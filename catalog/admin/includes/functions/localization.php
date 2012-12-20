<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  function quote_oanda_currency($code, $base = DEFAULT_CURRENCY) {

  	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, 'http://www.oanda.com/convert/fxdaily?value=1&redirected=1&exch=' . $code . '&format=CSV&dest=Get+Table&sel_list=' . $base);
	curl_setopt($ch, CURLOPT_HEADER,0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_TRANSFERTEXT, 1);
	$page= curl_exec($ch);
	curl_close($ch);

    $match = array();

    preg_match('/(.+),(\w{3}),([0-9.]+),([0-9.]+)/i', $page, $match);
    
    if (sizeof($match) > 0) {
      return $match[3];
    } else {
      return false;
    }
  }

  function quote_xe_currency($to, $from = DEFAULT_CURRENCY) {

  	$ch=curl_init();
  	curl_setopt($ch, CURLOPT_URL, 'http://www.xe.com/ucc/convert.cgi?Amount=1&From=' . $from . '&To=' . $to);
  	curl_setopt($ch, CURLOPT_HEADER,0);
  	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  	curl_setopt($ch, CURLOPT_TRANSFERTEXT, 1);
  	$page= curl_exec($ch);
  	curl_close($ch);

    $match = array();
    
    preg_match('/[0-9.]+\s*' . $from . '\s*=\s*([0-9.]+)\s*' . $to . '/', $page, $match);

    if (sizeof($match) > 0) {
      return $match[1];
    } else {
      return false;
    }
  }
?>