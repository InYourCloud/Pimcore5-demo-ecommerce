<?php 

/** 
* Generated at: 2018-09-07T16:07:22+02:00


Fields Summary: 
 - weight [numeric]
 - length [numeric]
 - width [numeric]
 - bodySize [numeric]
 - fabricShell [input]
 - fabricLining [input]
 - filling [input]
 - protection [input]
 - packingSize [input]
 - temperatureComfort [numeric]
 - temperatureLimit [numeric]
 - temperatureExtreme [numeric]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class SpecsSleepingbags extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "specsSleepingbags";
protected $weight;
protected $length;
protected $width;
protected $bodySize;
protected $fabricShell;
protected $fabricLining;
protected $filling;
protected $protection;
protected $packingSize;
protected $temperatureComfort;
protected $temperatureLimit;
protected $temperatureExtreme;


/**
* Get weight - Weight
* @return float
*/
public function getWeight () {
	$data = $this->weight;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("weight")->isEmpty($data)) {
		return $this->getValueFromParent("weight");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set weight - Weight
* @param float $weight
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setWeight ($weight) {
	$this->weight = $weight;
	return $this;
}

/**
* Get length - Length
* @return float
*/
public function getLength () {
	$data = $this->length;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("length")->isEmpty($data)) {
		return $this->getValueFromParent("length");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set length - Length
* @param float $length
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setLength ($length) {
	$this->length = $length;
	return $this;
}

/**
* Get width - Width
* @return float
*/
public function getWidth () {
	$data = $this->width;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("width")->isEmpty($data)) {
		return $this->getValueFromParent("width");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set width - Width
* @param float $width
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setWidth ($width) {
	$this->width = $width;
	return $this;
}

/**
* Get bodySize - Max Body Size
* @return float
*/
public function getBodySize () {
	$data = $this->bodySize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("bodySize")->isEmpty($data)) {
		return $this->getValueFromParent("bodySize");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set bodySize - Max Body Size
* @param float $bodySize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setBodySize ($bodySize) {
	$this->bodySize = $bodySize;
	return $this;
}

/**
* Get fabricShell - Shell fabric
* @return string
*/
public function getFabricShell () {
	$data = $this->fabricShell;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fabricShell")->isEmpty($data)) {
		return $this->getValueFromParent("fabricShell");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set fabricShell - Shell fabric
* @param string $fabricShell
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setFabricShell ($fabricShell) {
	$this->fabricShell = $fabricShell;
	return $this;
}

/**
* Get fabricLining - Lining fabric
* @return string
*/
public function getFabricLining () {
	$data = $this->fabricLining;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("fabricLining")->isEmpty($data)) {
		return $this->getValueFromParent("fabricLining");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set fabricLining - Lining fabric
* @param string $fabricLining
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setFabricLining ($fabricLining) {
	$this->fabricLining = $fabricLining;
	return $this;
}

/**
* Get filling - Filling
* @return string
*/
public function getFilling () {
	$data = $this->filling;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("filling")->isEmpty($data)) {
		return $this->getValueFromParent("filling");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set filling - Filling
* @param string $filling
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setFilling ($filling) {
	$this->filling = $filling;
	return $this;
}

/**
* Get protection - Protection (Layers)
* @return string
*/
public function getProtection () {
	$data = $this->protection;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("protection")->isEmpty($data)) {
		return $this->getValueFromParent("protection");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set protection - Protection (Layers)
* @param string $protection
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setProtection ($protection) {
	$this->protection = $protection;
	return $this;
}

/**
* Get packingSize - Packing Size
* @return string
*/
public function getPackingSize () {
	$data = $this->packingSize;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("packingSize")->isEmpty($data)) {
		return $this->getValueFromParent("packingSize");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set packingSize - Packing Size
* @param string $packingSize
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setPackingSize ($packingSize) {
	$this->packingSize = $packingSize;
	return $this;
}

/**
* Get temperatureComfort - Comfort Temp
* @return float
*/
public function getTemperatureComfort () {
	$data = $this->temperatureComfort;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureComfort")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureComfort");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set temperatureComfort - Comfort Temp
* @param float $temperatureComfort
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setTemperatureComfort ($temperatureComfort) {
	$this->temperatureComfort = $temperatureComfort;
	return $this;
}

/**
* Get temperatureLimit - Limit Temp
* @return float
*/
public function getTemperatureLimit () {
	$data = $this->temperatureLimit;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureLimit")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureLimit");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set temperatureLimit - Limit Temp
* @param float $temperatureLimit
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setTemperatureLimit ($temperatureLimit) {
	$this->temperatureLimit = $temperatureLimit;
	return $this;
}

/**
* Get temperatureExtreme - Extreme Temp
* @return float
*/
public function getTemperatureExtreme () {
	$data = $this->temperatureExtreme;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("temperatureExtreme")->isEmpty($data)) {
		return $this->getValueFromParent("temperatureExtreme");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set temperatureExtreme - Extreme Temp
* @param float $temperatureExtreme
* @return \Pimcore\Model\DataObject\Objectbrick\Data\SpecsSleepingbags
*/
public function setTemperatureExtreme ($temperatureExtreme) {
	$this->temperatureExtreme = $temperatureExtreme;
	return $this;
}

}

