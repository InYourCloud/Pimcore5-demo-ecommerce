<?php 

/** 
* Generated at: 2018-09-07T16:07:23+02:00


Fields Summary: 
 - label [input]
 - field [indexFieldSelection]
 - scriptPath [input]
*/ 

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;

class FilterSelectFromMultiSelect extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\AbstractFilterDefinitionType  {

protected $type = "FilterSelectFromMultiSelect";
protected $label;
protected $field;
protected $scriptPath;


/**
* Get label - Label
* @return string
*/
public function getLabel () {
	$data = $this->label;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set label - Label
* @param string $label
* @return \Pimcore\Model\DataObject\FilterSelectFromMultiSelect
*/
public function setLabel ($label) {
	$this->label = $label;
	return $this;
}

/**
* Get field - Field
* @return \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection
*/
public function getField () {
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field
* @return \Pimcore\Model\DataObject\FilterSelectFromMultiSelect
*/
public function setField ($field) {
	$this->field = $field;
	return $this;
}

/**
* Get scriptPath - Script Path
* @return string
*/
public function getScriptPath () {
	$data = $this->scriptPath;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		    return $data->getPlain();
	}
	 return $data;
}

/**
* Set scriptPath - Script Path
* @param string $scriptPath
* @return \Pimcore\Model\DataObject\FilterSelectFromMultiSelect
*/
public function setScriptPath ($scriptPath) {
	$this->scriptPath = $scriptPath;
	return $this;
}

}

