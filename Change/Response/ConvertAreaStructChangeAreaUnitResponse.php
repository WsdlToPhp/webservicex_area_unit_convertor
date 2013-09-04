<?php
/**
 * File for class ConvertAreaStructChangeAreaUnitResponse
 * @package ConvertArea
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for ConvertAreaStructChangeAreaUnitResponse originally named ChangeAreaUnitResponse
 * Meta informations extracted from the WSDL
 * - from schema : {@link http://www.webservicex.net/ConvertArea.asmx?WSDL}
 * @package ConvertArea
 * @subpackage Structs
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class ConvertAreaStructChangeAreaUnitResponse extends ConvertAreaWsdlClass
{
	/**
	 * The ChangeAreaUnitResult
	 * Meta informations extracted from the WSDL
	 * - maxOccurs : 1
	 * - minOccurs : 1
	 * @var double
	 */
	public $ChangeAreaUnitResult;
	/**
	 * Constructor method for ChangeAreaUnitResponse
	 * @see parent::__construct()
	 * @param double $_changeAreaUnitResult
	 * @return ConvertAreaStructChangeAreaUnitResponse
	 */
	public function __construct($_changeAreaUnitResult)
	{
		parent::__construct(array('ChangeAreaUnitResult'=>$_changeAreaUnitResult));
	}
	/**
	 * Get ChangeAreaUnitResult value
	 * @return double
	 */
	public function getChangeAreaUnitResult()
	{
		return $this->ChangeAreaUnitResult;
	}
	/**
	 * Set ChangeAreaUnitResult value
	 * @param double $_changeAreaUnitResult the ChangeAreaUnitResult
	 * @return double
	 */
	public function setChangeAreaUnitResult($_changeAreaUnitResult)
	{
		return ($this->ChangeAreaUnitResult = $_changeAreaUnitResult);
	}
	/**
	 * Method called when an object has been exported with var_export() functions
	 * It allows to return an object instantiated with the values
	 * @see ConvertAreaWsdlClass::__set_state()
	 * @uses ConvertAreaWsdlClass::__set_state()
	 * @param array $_array the exported values
	 * @return ConvertAreaStructChangeAreaUnitResponse
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