<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;
use Grav\Common\Page\Page;

/**
 * Class ShortcodeGalleryPlusPlus
 * @package Grav\Plugin
 */
class ShortcodeGalleryPlusPlusPlugin extends Plugin
{
    private $currentPage = null;

    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
            'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
            'onPageContentRaw' => ['onPageContentRaw', 1000],             // before the Shortcode Core plugin
            'onPageContentProcessed' => ['onPageContentProcessed', 1000], // before the Shortcode Core plugin
        ];
    }

    /**
     * Add current directory to twig lookup paths.
     */
    public function onTwigTemplatePaths()
    {
        $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
    }

    /**
     * Detect which page is being processed, even if it is in a collection.
     * We store it so that our shortcode can use it.
     */
    public function onPageContentRaw(Event $event)
    {
        $this->currentPage = $event['page'];
    }
    public function onPageContentProcessed(Event $event)
    {
        $this->currentPage = $event['page'];
    }
    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    /**
     * Initialize configuration
     */
    public function onShortcodeHandlers()
    {
        $this->grav['shortcode']->registerAllShortcodes(__DIR__ . '/shortcodes');
    }
}
