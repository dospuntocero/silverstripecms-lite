#Silverstripecms-lite

Have you ever wanted a really simple interface on top of our beloved CMS for our clients to enjoy?


> SilverstripeCMS Lite its a totally uncluttered version of the CMS, enjoy Zen while work with SilverstripeCMS

> — dospuntocero

##What about this one:

![Silverstripe Nirvana](http://proposals.god.cl/Silverstripe_CMS_Lite_-_Edit_Page-20130208-123421.jpg)


![Silverstripe Lite Login Form](http://proposals.god.cl/Mozilla_Firefox-20130208-130715.jpg)

##Useful stuff

### Maintenance Field on Config

The complete site goes maintenance with just checking a checkbox. but this is only for users without admin capabilities. admin users can navigate the complete site.

### Images and Files tab

Each page has 2 attachment fields (images and files) so you can get image galleries and a simple downloads section, both with sort capabilities.

### Template Functions

    $Image - returns the first image in the Images uploadfield
    $ExtraImages - returns all the images but the first one
    $Images - returns all the images

### Templates

The module has bundled some example templates for:

+	Main Image

+	Extra Images

+	Attachments

+	Security (login form)

+	Maintenance view (page that appears when you have your site on maintenance mode)

+	typography, so you can check yout site base typography

## Installation

I recommend composer since this module has some dependencies.
but you can always do it using **macho-mode**, here you can download the dependencies for this module:

+	https://github.com/UndefinedOffset/SortableGridField

+	https://github.com/bummzack/sortablefile
