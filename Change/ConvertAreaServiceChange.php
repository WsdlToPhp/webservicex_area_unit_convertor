<?php
/**
 * File for class ConvertAreaServiceChange
 * @package ConvertArea
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
/**
 * This class stands for ConvertAreaServiceChange originally named Change
 * @package ConvertArea
 * @subpackage Services
 * @date 2013-09-04
 * @author Mikaël DELSOL <contact@wsdltophp.com>
 */
class ConvertAreaServiceChange extends ConvertAreaWsdlClass
{
	/**
	 * Method to call the operation originally named ChangeAreaUnit
	 * @uses ConvertAreaWsdlClass::getSoapClient()
	 * @uses ConvertAreaWsdlClass::setResult()
	 * @uses ConvertAreaWsdlClass::getResult()
	 * @uses ConvertAreaWsdlClass::saveLastError()
	 * @uses ConvertAreaStructChangeAreaUnit::getAreaValue()
	 * @uses ConvertAreaStructChangeAreaUnit::getFromAreaUnit()
	 * @uses ConvertAreaStructChangeAreaUnit::getToAreaUnit()
	 * @param ConvertAreaStructChangeAreaUnit $_convertAreaStructChangeAreaUnit
	 * @return ConvertAreaStructChangeAreaUnitResponse
	 */
	public function ChangeAreaUnit(ConvertAreaStructChangeAreaUnit $_convertAreaStructChangeAreaUnit)
	{
		try
		{
			$this->setResult(self::getSoapClient()->ChangeAreaUnit(array('AreaValue'=>$_convertAreaStructChangeAreaUnit->getAreaValue(),'fromAreaUnit'=>$_convertAreaStructChangeAreaUnit->getFromAreaUnit(),'toAreaUnit'=>$_convertAreaStructChangeAreaUnit->getToAreaUnit())));
		}
		catch(SoapFault $soapFault)
		{
			return !$this->saveLastError(__METHOD__,$soapFault);
		}
		return $this->getResult();
	}
	/**
	 * Returns the result
	 * @see ConvertAreaWsdlClass::getResult()
	 * @return ConvertAreaStructChangeAreaUnitResponse
	 */
	public function getResult()
	{
		return parent::getResult();
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