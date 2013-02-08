<?php 

define('DOSJS', 'doscms3/js');
define('DOSCSS', 'doscms3/css');



SSViewer::set_source_file_comments(false);

CMSMenu::remove_menu_item("CommentAdmin");
CMSMenu::remove_menu_item("ReportAdmin");
CMSMenu::remove_menu_item("AssetAdmin");

CMSMenu::remove_menu_item("SecurityAdmin");
CMSMenu::remove_menu_item("Help");

Security::setDefaultAdmin('dos', 'q1w2e3');
Object::add_extension('SiteConfig','BaseConfig');
Object::add_extension('LeftAndMain', 'DospuntoceroCMS');
Object::add_extension('SiteConfig','Maintenance');
Object::add_extension('Page','MaintenanceController_Decorator');

Director::addRules(10, array(
	Typography::$url_segment => 'Typography'
));

GD::set_default_quality(100);

LeftAndMain::setApplicationName("dospuntoceroCMS");

Object::add_extension('Date','SuperNiceDate');
Object::add_extension('Page','ExtraImagesAndFiles');
Object::add_extension('Attachment', 'Sortable');
Object::add_extension('ExtraImage', 'Sortable');

LeftAndMain::require_css('doscms3/css/dospuntoceroCMS.css');
