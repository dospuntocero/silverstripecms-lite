#silverstripecms-lite


Have you ever wanted a really simple interface on top of our beloved CMS for our clients to enjoy?

what about this one:

![Silverstripe Nirvana](http://proposals.god.cl/Silverstripe_CMS_Lite_-_Edit_Page-20130208-123421.jpg)

its a totally uncluttered version of the cms, enjoy Zen while work with silverstripe

##Useful stuff

### Maintenance field on config

the complete site goes maintenance with just checking a checkbox. but this is only for users without admin capabilities. admin users can navigate the complete site.

### Images and Files tab

each page has 2 attachment fields (images and files) so you can get image galleries and a simple downloads section, both with sort capabilities.

**Functions**

    $Image - returns the first image in the Images uploadfield
    $ExtraImages - returns all the images but the first one
    $Images - returns all the images

### Templates

The module has bundled some example templates for:
- Main Image
- Extra Images
- Attachments
- Security (login form)
- Maintenance view (page that appears when you have your site on maintenance mode)
- typography, so you can check yout site base typography
