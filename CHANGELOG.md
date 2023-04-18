# v1.6.0
##  04/18/2023

1. [](#new)
   * New option: configure the thumbnail size.
2. [](#improved)
   * Further improvements on thumbnail generation.

# v1.5.0
##  10/02/2022

1. [](#new)
   * New option to disable the `title` attribute on images.
2. [](#bugfix)
   * Fix a problem with Gantry.
3. [](#improved)
   * Better thumbnail generation.

# v1.4.2
##  05/25/2022

1. [](#improved)
   * Support for `loading` attributes on image thumbnails. To learn more, see
      * https://learn.getgrav.org/17/advanced/grav-development/grav-17-upgrade-guide#media
      * https://learn.getgrav.org/17/content/media#loading

# v1.4.1
##  05/06/2022

1. [](#improved)
    * Make this plugin compatible with older PHP versions.

# v1.4.0
##  05/05/2022

1. [](#new)
    * Option configure "See more" text and text length until "See more appears" for the lightbox.

# v1.3.0
##  05/04/2022

1. [](#new)
    * Option to disable thumbnails on RSS, Atom and JSON feeds from the Feed plugin
2. [](#improved)
    * Updated GLightbox to [3.2.0](https://github.com/biati-digital/glightbox/releases/tag/3.2.0)

# v1.2.1
##  09/17/2021

1. [](#improved)
    * Improved formatting of the generated HTML.

# v1.2.0
##  09/07/2021

1. [](#new)
    * The thumbnail images in the gallery will now use a smaller resolution, to improve performance. Change the thumbnail size in the settings!
2. [](#bugfix)
    * The toggle buttons in the settings were too narrow for some languages, cutting off text. This is fixed now.
3. [](#improved)
    * This plugin is now compatible to be used with all the caching features of Grav.

# v1.1.1
##  08/29/2021

1. [](#improved)
   * Updated GLightbox to [3.1.0](https://github.com/biati-digital/glightbox/releases/tag/3.1.0)

# v1.1.0
##  06/03/2021

1. [](#bugfix)
   * Sometimes the descriptions could get mixed up and be displayed with the wrong image. This is now fixed.
2. [](#new)
   * You can now provide different values for **captions** (shown on the images in the gallery) and **descriptions** (shown in the lightbox):  
     An images `alt`-value will be the caption, its `title`-value the description. Example:  
     `![image caption](image.jpg "image description")`  
     The descriptions can even be html formatted:  
     `![image caption](image.jpg "<strong>Descriptions</strong> can also<br>be <i>HTML</i> formatted.")`

# v1.0.6
##  05/23/2021

1. [](#improved)
   * Updated GLightbox to 3.0.9

# v1.0.5
##  04/10/2021

1. [](#improved)
   * Updated GLightbox to 3.0.8

# v1.0.4
##  04/04/2021

1. [](#bugfix)
   * Fixes a problem where no images would be shown when used together with the `trilbymedia/grav-plugin-image-captions` plugin

# v1.0.3
##  02/10/2021

1. [](#bugfix)
   * Provide backwards compatibility with PHP 7
2. [](#bugfix)
   * Fixes a problem where this plugin wouldn't work properly any more, when caching is enabled in the system settings

# v1.0.2
##  02/05/2021

1. [](#bugfix)
   * Added missing jQuery dependency
   
# v1.0.1
##  01/06/2021

1. [](#improved)
    Updated GLightbox to 3.0.7
2. [](#improved)
   * Improved image parsing

# v1.0.0
##  12/30/2020

1. [](#new)
   * Initial release 🎈
