# Shortcode Gallery++ Plugin

## About

The **Shortcode Gallery++** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). A shortcode extension
to add sweet galleries to your Grav website.  
It combines [Justified-Gallery](https://github.com/miromannino/Justified-Gallery) by Miro Mannino and [GLightbox](https://github.com/biati-digital/glightbox) by biati digital.

## Usage

It's quite simple. Just wrap some image links in `[gallery]` tags:

```markdown
[gallery]
![Alt text 1](image.jpg)
![Alt text 2](/images/image.jpg)
![relative link](../image.jpg)
![remote link](https://remotesite.com/image.jpg)
...
[/gallery]
```

## Okay, what does it look like?

This plugin combines a nice justified gallery layout with an eye-pleasing lightbox.  
All images get nicely aligned. After a click on one of them, a sweet popup appears, showing it full-screen.
Just have a look for yourself:

![Demo](assets/demo.webp)

* You can of course create several galleries on the same page.
* You have plenty of settings you can change in the admin panel.
* You can also change everything for a single galleries via shortcode. For example:
```markdown
[gallery
    rowHeight=230
    margins=25
    lastRow="justify"
    captions="false"
    border=0]
![Alt text 1](image.jpg)
![Alt text 2](/images/image.jpg)
![relative link](../image.jpg)
![remote link](https://remotesite.com/image.jpg)
...
[/gallery]
```

---

## Installation

### Preferred way: GPM Installation

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), navigate to the root of your
Grav-installation, and enter:

    bin/gpm install shortcode-gallery-plusplus

### Alternatively: via Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on
the `Add` button.

### If you wish so: Manual Installation

> NOTE: This plugin is a modular component for Grav which requires the [Grav Shortcode Core Plugin
](https://github.com/getgrav/grav-plugin-shortcode-core) to be installed.

To install the plugin manually, download the zip-version of this repository and unzip it
under `/your/site/grav/user/plugins`. Then rename the folder to `shortcode-gallery-plusplus`. You can find these files
on [GitHub](https://github.com/sal0max/grav-plugin-shortcode-gallery-plusplus) or
via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

## Configuration

Before configuring this plugin, you should copy
the `user/plugins/shortcode-gallery-plusplus/shortcode-gallery-plusplus.yaml`
to `user/config/plugins/shortcode-gallery-plusplus.yaml` and only edit that copy.

**Preferably**, use the Admin Plugin. It takes care of creating a file with your configuration
named `shortcode-gallery-plusplus.yaml` to be created in the `user/config/plugins/`-folder once the configuration is
saved in the Admin.

---

## Credits

Couldn't be possible without those awesome libraries:

* [Justified-Gallery](https://github.com/miromannino/Justified-Gallery) by Miro Mannino
* [GLightbox](https://github.com/biati-digital/glightbox) by biati digital
