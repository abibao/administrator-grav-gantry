<?php

namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class AbibaoAdministratorPlugin extends Plugin {
  public static function getSubscribedEvents() {
    return [
      'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
      'onTwigExtensions'    => ['onTwigExtensions', 0],
      'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
      'onTwigSiteVariables' => ['onTwigSiteVariables', 0],
      'onPageInitialized'   => ['onPageInitialized', 0]
    ];
  }

  public function onPluginsInitialized() {
    if ($this->isAdmin()) {
      return;
    }
    $this->enable([
      'onShortcodeHandlers' => ['onShortcodeHandlers', 0],
      'onTwigTemplatePaths' => ['onTwigTemplatePaths', 0],
      'onTwigInitialized'   => ['onTwigInitialized', 0]
    ]);
  }

  public function onPageInitialized() {

  }

  public function onTwigExtensions() {

  }

  public function onTwigSiteVariables() {

  }

  public function onTwigInitialized() {

  }

  public function onTwigTemplatePaths() {
    $this->grav['twig']->twig_paths[] = __DIR__ . '/templates';
  }

  public function onShortcodeHandlers()
  {
    $this->grav["shortcode"]->registerAllShortcodes(__DIR__ . '/shortcodes');
  }
}
