<?php

class ExtraImagesAndFiles extends DataExtension {

	static $db = array(
		"ShowGalleryInstead" => "Boolean"
	);

	static $many_many = array(
		"Images" => "ExtraImage",
		'Attachments' => 'Attachment',
	);

	function getImage(){
		$Image = $this->owner->Images();
		if ($Image->First()) {
			return $Image->First();
		} else {
			return null;
		}
	}

	function getExtraImages(){
		$Image = $this->owner->Images();
		$set = new ArrayList();
		$c=1;
		if($Image){
			foreach($Image as $item){
				if($c>1){
					$set->push($item);
				}
				$c++;
			}
			return $set;
		}
		return null;
	}

	public function updateCMSFields(FieldList $fields) {
		$fields->removeFieldFromTab("Root","ShowGalleryInstead");
		$fields->removeFieldFromTab("Root","Images");
		$fields->removeFieldFromTab("Root","Attachments");
		
		if ($this->owner->ID) {
			$ImagesAndFiles = _t('Page.IMAGESANDFILES',"Images and Files");
			$UploadField2 = new SortableUploadField('Attachments', _t('Page.ATTACHMENTS',"Attachments"));
			$UploadField2->setFolderName("Attachments");
			$UploadField3 = new SortableUploadField('Images', _t('Page.IMAGES',"Images"));
			$UploadField3->getValidator()->setAllowedExtensions(array('jpg', 'jpeg', 'png', 'gif'));
			$UploadField3->setFolderName("Images");
			$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField3);
			$fields->addFieldToTab("Root.".$ImagesAndFiles, $UploadField2);
		}
	}

	function contentControllerInit(){
		if ($this->owner->Images()->count() > 1 && $this->owner->UseGalleriaPlugin == 1) {
			Requirements::javascript(THIRDPARTY_DIR."/jquery/jquery.min.js");
			Requirements::javascript(DOSJS."/galleria/galleria-1.2.8.min.js");
			Requirements::javascript(DOSJS."/galleria/themes/classic/galleria.classic.js");
			Requirements::css(DOSJS."/galleria/themes/classic/galleria.classic.css");
		}
	}
}
