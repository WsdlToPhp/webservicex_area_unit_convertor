<?php
/**
 * Test with ConvertArea
 * @package ConvertArea
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
ini_set('memory_limit','512M');
ini_set('display_errors', true);
error_reporting(-1);
/**
 * Load autoload
 */
require_once dirname(__FILE__) . '/ConvertAreaAutoload.php';
/**
 * ConvertArea Informations
 */
define('CONVERTAREA_WSDL_URL','http://www.webservicex.net/ConvertArea.asmx?WSDL');
define('CONVERTAREA_USER_LOGIN','');
define('CONVERTAREA_USER_PASSWORD','');
/**
 * Wsdl instanciation infos
 */
$wsdl = array();
$wsdl[ConvertAreaWsdlClass::WSDL_URL] = CONVERTAREA_WSDL_URL;
$wsdl[ConvertAreaWsdlClass::WSDL_CACHE_WSDL] = WSDL_CACHE_NONE;
$wsdl[ConvertAreaWsdlClass::WSDL_TRACE] = true;
if(CONVERTAREA_USER_LOGIN !== '')
	$wsdl[ConvertAreaWsdlClass::WSDL_LOGIN] = CONVERTAREA_USER_LOGIN;
if(CONVERTAREA_USER_PASSWORD !== '')
	$wsdl[ConvertAreaWsdlClass::WSDL_PASSWD] = CONVERTAREA_USER_PASSWORD;
// etc....
/**
 * Examples
 */


/**************************************
 * Example for ConvertAreaServiceChange
 */
$convertAreaServiceChange = new ConvertAreaServiceChange($wsdl);
// sample call for ConvertAreaServiceChange::ChangeAreaUnit()
if($convertAreaServiceChange->ChangeAreaUnit(new ConvertAreaStructChangeAreaUnit(/*** update parameters list ***/)))
	print_r($convertAreaServiceChange->getResult());
else
	print_r($convertAreaServiceChange->getLastError());
?>