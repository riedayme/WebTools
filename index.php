<?php define('BASEPATH', true); // protect script from direct access

require "includes/helper.php";
require "includes/config.php";

switch (@$_GET['module']) {	

	case 'parsehtml':
	include "modules/parsehtml.php";
	break;	

	case 'parsehtmlsimple':
	include "modules/parsehtmlsimple.php";
	break;

	case 'htmlcompressor':
	include "modules/htmlcompressor.php";
	break;	

	case 'htmlencrypter':
	include "modules/htmlencrypter.php";
	break;	

	case 'cssminifier':
	include "modules/cssminifier.php";
	break;	

	case 'javascriptminifier':
	include "modules/javascriptminifier.php";
	break;			

	case 'urldecenc':
	include "modules/urldecenc.php";
	break;			

	case 'jsoncookieconvert':
	include "modules/jsoncookieconvert.php";
	break;	

	case 'curltophp':
	include "modules/curltophp.php";
	break;			

	default:
	include "modules/dashboard.php";
	break;
}
?>