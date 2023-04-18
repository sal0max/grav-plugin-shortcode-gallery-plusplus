# Shortcode Gallery++ Plugin

## About

The **Shortcode Gallery++** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). A shortcode extension
to add sweet galleries to your Grav website.  
It combines [Justified-Gallery](https://github.com/miromannino/Justified-Gallery) by Miro Mannino and [GLightbox](https://github.com/biati-digital/glightbox) by biati digital.

## Usage

It's quite simple. Just wrap some image links in `[gallery]` tags:

```markdown
[gallery]
![Alt text 1](image.jpg "Some description to be used in the lightbox")
![Alt text 2](/images/image.jpg "<strong>Descriptions</strong> can also<br>be <i>HTML</i> formatted.")
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
[gallery rowHeight=230 margins=25 lastRow="justify" captions="false" border=0]
![Alt text 1](image.jpg "Some description to be used in the lightbox")
![Alt text 2](/images/image.jpg "<strong>Descriptions</strong> can also<br>be <i>HTML</i> formatted.")
![relative link](../image.jpg)
![remote link](https://remotesite.com/image.jpg)
...
[/gallery]
```

## Gallery settings

| parameter   | possible values | description |
|-------------|-----------------| ------------|
| `rowHeight` | dimension in pixel | The preferred rows height.
| `margins`   | dimension in pixel | The margins between the images.
| `lastRow`   | `justify`, `hide`, `nojustify`, `center`, `right` | `justify`: justifies the last row; `hide`: hides the row if it can't be justified; `nojustify`: align the last row to the left; `center`: align the last row to the center; `right`: align the last row to the right 
| `captions`  | `true`, `false` | Enable captions that appear when the mouse hovers an image. **For caption, the alt-text of an image is used: `![caption](image.jpg)`** 
| `border`    | dimension in pixel | The border size of the gallery. With a negative value the border will be the same as `margins`.
| `resizeFactor` | `1`, `1.5`, `2`, `2.5`, `3` | The pixel density of the thumbnails. `1` is maybe a little bit low, since high pixel density screens have become more popular. `2` is a good compromise between the weight of the thumbnails when loading the page, and their quality. `3` displays great quality thumbnails on any device.
| `removeTitle` | `true`, `false` | Remove the `title` attribute from `<img>` elements in the gallery. Is interesting when you have long descriptions.

## Lightbox settings

| parameter             | possible values | description |
|-----------------------|-----------------| ------------|
| `openEffect`          | `zoom`, `fade`, `none` |
| `closeEffect`         | `zoom`, `fade`, `none` |
| `slideEffect`         | `slide`, `zoom`, `fade`, `none` |
| `closeButton`         | `true`, `false` | Show or hide the close button.
| `touchNavigation`     | `true`, `false` | Enable touch navigation (swipe).
| `touchFollowAxis`     | `true`, `false` | Image follow axis when dragging on mobile.
| `keyboardNavigation`  | `true`, `false` | Enable or disable the keyboard navigation.
| `closeOnOutsideClick` | `true`, `false` | Close the lightbox when clicking outside the active slide.
| `loop`                | `true`, `false` | Loop slides on end.
| `draggable`           | `true`, `false` | Enable or disable mouse drag to go to previous and next slide.
| `descEnabled`         | `true`, `false` | **For description, the title-text of an image is used: `![](image.jpg "description")`**
| `descPosition`        | `bottom`, `top`, `left`, `right` | The position for slides description.
| `descMoreText`        | text            | Description: "See more" text.
| `descMoreLength`      | number          | Description: Characters until "See more". Will display the entire description, if set to `0`.


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
