<?php
/**
 * File for the class which returns the class map definition
 * @package ConvertArea
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * Class which returns the class map definition by the static method ConvertAreaClassMap::classMap()
 * @package ConvertArea
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class ConvertAreaClassMap
{
	/**
	 * This method returns the array containing the mapping between WSDL structs and generated classes
	 * This array is sent to the SoapClient when calling the WS
	 * @return array
	 */
	final public static function classMap()
	{
		return array (
  'Areas' => 'ConvertAreaEnumAreas',
  'ChangeAreaUnit' => 'ConvertAreaStructChangeAreaUnit',
  'ChangeAreaUnitResponse' => 'ConvertAreaStructChangeAreaUnitResponse',
);
	}
}
?>