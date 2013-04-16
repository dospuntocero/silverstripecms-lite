<?php

class BaseConfig extends DataExtension {

	static $db = array(
		'GACode' => 'Varchar(16)'
		
	);

  function updateCMSFields(FieldList $fields) {
	// $fields->removeByName("Theme");
    $fields->addFieldToTab('Root.Main', $gaCode = new TextField('GACode', 'Google Analytics account'));
    $gaCode->setRightTitle(_t('BaseConfig.ACCOUNTNUMBER',"Account number to be used all across the site (in the format <strong>UA-XXXXX-X</strong>)"));
  }
}
