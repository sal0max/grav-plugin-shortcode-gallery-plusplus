<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class GalleryPlusPlusShortcode extends Shortcode
{

    /*
     *
     */
    public function init()
    {
        // disable caching. see https://discourse.getgrav.org/t/plugins-and-caching/6795/8
        $this->grav['config']->set('system.cache.enabled', false);

        // gallery
        $this->shortcode->getHandlers()->add('gallery', function (ShortcodeInterface $sc) {
            // get default settings
            $pluginConfig = $this->config->get('plugins.shortcode-gallery-plusplus');

            // overwrite default gallery settings, if set by user
            $rowHeight = $sc->getParameter('rowHeight', $pluginConfig['gallery']['rowHeight']);
            $margins = $sc->getParameter('margins', $pluginConfig['gallery']['margins']);
            $lastRow = $sc->getParameter('lastRow', $pluginConfig['gallery']['lastRow']);
            $captions = $sc->getParameter('captions', $pluginConfig['gallery']['captions']);
            $border = $sc->getParameter('border', $pluginConfig['gallery']['border']);

            // overwrite default lightbox settings, if set by user
            $openEffect = $sc->getParameter('openEffect', $pluginConfig['lightbox']['openEffect']);
            $closeEffect = $sc->getParameter('closeEffect', $pluginConfig['lightbox']['closeEffect']);
            $slideEffect = $sc->getParameter('slideEffect', $pluginConfig['lightbox']['slideEffect']);
            $closeButton = $sc->getParameter('closeButton', $pluginConfig['lightbox']['closeButton']);
            $touchNavigation = $sc->getParameter('touchNavigation', $pluginConfig['lightbox']['touchNavigation']);
            $touchFollowAxis = $sc->getParameter('touchFollowAxis', $pluginConfig['lightbox']['touchFollowAxis']);
            $keyboardNavigation = $sc->getParameter('keyboardNavigation', $pluginConfig['lightbox']['keyboardNavigation']);
            $closeOnOutsideClick = $sc->getParameter('closeOnOutsideClick', $pluginConfig['lightbox']['closeOnOutsideClick']);
            $loop = $sc->getParameter('loop', $pluginConfig['lightbox']['loop']);
            $draggable = $sc->getParameter('draggable', $pluginConfig['lightbox']['draggable']);
            $descEnabled = $sc->getParameter('descEnabled', $pluginConfig['lightbox']['descEnabled']);
            $descPosition = $sc->getParameter('descPosition', $pluginConfig['lightbox']['descPosition']);

            // find all images, that a gallery contains
            $content = $sc->getContent();

            // check validity
            if (strpos($content, "<pre>") !== false)
                return "<p style='color: #d40000; font-weight: bold; padding: 1rem 0;'>[Shortcode Gallery++] Error:<br> 
                        &gt; Images provided got parsed as code block.<br>
                        &gt; Please check your markdown file and make sure the images aren't indented by tab or more than three spaces.</p>";

            // remove <p> tags
            $content = preg_replace('(<p>|</p>)', '', $content);
            // split up images to arrays of img links
            preg_match_all('|<img.*?/>|', $content, $images);
            // get all links
            preg_match_all('|src="(.*?)"|', $content, $links);
            // get all alt descriptions
            preg_match_all('|alt="(.*?)"|', $content, $descs);


            return $this->twig->processTemplate('partials/gallery-plusplus.html.twig', [
                // gallery settings
                'rowHeight' => $rowHeight,
                'margins' => $margins,
                'lastRow' => $lastRow,
                'captions' => $captions,
                'border' => $border,
                // lightbox settings
                'openEffect' => $openEffect,
                'closeEffect' => $closeEffect,
                'slideEffect' => $slideEffect,
                'closeButton' => $closeButton,
                'touchNavigation' => $touchNavigation,
                'touchFollowAxis' => $touchFollowAxis,
                'keyboardNavigation' => $keyboardNavigation,
                'closeOnOutsideClick' => $closeOnOutsideClick,
                'loop' => $loop,
                'draggable' => $draggable,
                'descEnabled' => $descEnabled,
                'descPosition' => $descPosition,
                // images
                'images' => $images[0],
                'links' => $links[1],
                'descs' => $descs[1],
            ]);
        });
    }

}
