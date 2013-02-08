<?php 

SSViewer::set_source_file_comments(false);

CMSMenu::remove_menu_item("CommentAdmin");
CMSMenu::remove_menu_item("ReportAdmin");
CMSMenu::remove_menu_item("AssetAdmin");

CMSMenu::remove_menu_item("SecurityAdmin");
CMSMenu::remove_menu_item("Help");

Object::add_extension('SiteConfig','BaseConfig');
Object::add_extension('LeftAndMain', 'LiteCMS');
Object::add_extension('SiteConfig','Maintenance');
Object::add_extension('Page','MaintenanceController_Decorator');

GD::set_default_quality(100);

LeftAndMain::setApplicationName("Silverstripe CMS Lite");

Object::add_extension('Date','SuperNiceDate');
Object::add_extension('Page','ExtraImagesAndFiles');
Object::add_extension('Attachment', 'Sortable');
Object::add_extension('ExtraImage', 'Sortable');

LeftAndMain::require_css('silverstripecms-lite/css/lite.css');