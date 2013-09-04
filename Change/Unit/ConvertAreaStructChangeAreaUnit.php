<?php
/**
 * File for class ConvertAreaStructChangeAreaUnit
 * @package ConvertArea
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for ConvertAreaStructChangeAreaUnit originally named ChangeAreaUnit
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/ConvertArea.asmx?WSDL}
 * @package ConvertArea
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class ConvertAreaStructChangeAreaUnit extends ConvertAreaWsdlClass
{
	/**
	 * The AreaValue
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var double
	 */
	public $AreaValue;
	/**
	 * The fromAreaUnit
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var ConvertAreaEnumAreas
	 */
	public $fromAreaUnit;
	/**
	 * The toAreaUnit
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var ConvertAreaEnumAreas
	 */
	public $toAreaUnit;
	/**
	 * Constructor method for ChangeAreaUnit
	 * @see parent::__construct()
	 * @param double $_areaValue
	 * @param ConvertAreaEnumAreas $_fromAreaUnit
	 * @param ConvertAreaEnumAreas $_toAreaUnit
	 * @return ConvertAreaStructChangeAreaUnit
	 */
	public function __construct($_areaValue,$_fromAreaUnit,$_toAreaUnit)
	{
		parent::__construct(array('AreaValue'=>$_areaValue,'fromAreaUnit'=>$_fromAreaUnit,'toAreaUnit'=>$_toAreaUnit));
	}
	/**
	 * Get AreaValue value
	 * @return double
	 */
	public function getAreaValue()
	{
		return $this->AreaValue;
	}
	/**
	 * Set AreaValue value
	 * @param double $_areaValue the AreaValue
	 * @return double
	 */
	public function setAreaValue($_areaValue)
	{
		return ($this->AreaValue = $_areaValue);
	}
	/**
	 * Get fromAreaUnit value
	 * @return ConvertAreaEnumAreas
	 */
	public function getFromAreaUnit()
	{
		return $this->fromAreaUnit;
	}
	/**
	 * Set fromAreaUnit value
	 * @uses ConvertAreaEnumAreas::valueIsValid()
	 * @param ConvertAreaEnumAreas $_fromAreaUnit the fromAreaUnit
	 * @return ConvertAreaEnumAreas
	 */
	public function setFromAreaUnit($_fromAreaUnit)
	{
		if(!ConvertAreaEnumAreas::valueIsValid($_fromAreaUnit))
		{
			return false;
		}
		return ($this->fromAreaUnit = $_fromAreaUnit);
	}
	/**
	 * Get toAreaUnit value
	 * @return ConvertAreaEnumAreas
	 */
	public function getToAreaUnit()
	{
		return $this->toAreaUnit;
	}
	/**
	 * Set toAreaUnit value
	 * @uses ConvertAreaEnumAreas::valueIsValid()
	 * @param ConvertAreaEnumAreas $_toAreaUnit the toAreaUnit
	 * @return ConvertAreaEnumAreas
	 */
	public function setToAreaUnit($_toAreaUnit)
	{
		if(!ConvertAreaEnumAreas::valueIsValid($_toAreaUnit))
		{
			return false;
		}
		return ($this->toAreaUnit = $_toAreaUnit);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ConvertAreaWsdlClass::__set_state()
	 * @uses ConvertAreaWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ConvertAreaStructChangeAreaUnit
	 */
	public static function __set_state(array $_array,$_className = __CLASS__)
	{
		return parent::__set_state($_array,$_className);
	}
	/**
	 * Method returning the class name
	 * @return string __CLASS__
	 */
	public function __toString()
	{
		return __CLASS__;
	}
}
?>