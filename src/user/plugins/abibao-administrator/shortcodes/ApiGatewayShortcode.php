<?php

namespace Grav\Plugin\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

class ApiGatewayShortcode extends Shortcode {

  public function init() {
    $this->shortcode->getHandlers()->add('abibao-api-gateway', array($this, 'process'));
  }

  public function process(ShortcodeInterface $sc) {
    // Get page header
    $header = $this->grav['page']->header();
    $header = new \Grav\Common\Page\Header((array) $header);

    // Get params
    $gateway = $this->config->get('plugins.abibao-api-gateway.uri');
    $uri = $sc->getParameter('uri', '/v1/alive');
    $method = strtoupper($sc->getParameter('method', 'GET'));

    // Login as administrator
    $postdata = http_build_query(
      array(
        'email' => $this->config->get('plugins.abibao-api-gateway.email'),
        'password' => $this->config->get('plugins.abibao-api-gateway.password')
      )
    );
    $headers = array('Content-type: application/x-www-form-urlencoded');
    $opts = array(
      'http' => array(
        'method'  =>  'POST',
        'header'  =>  $headers,
        'content' =>  $postdata
      )
    );
    $context = stream_context_create($opts);
    $credential = json_decode(file_get_contents($gateway . '/v1/administrators/login', false, $context))->token;

    // Make call api
    $headers = array('Content-type: application/x-www-form-urlencoded', 'Authorization: ' . $credential);
    $opts = array(
      'http' => array(
        'method'  =>  'GET',
        'header'  =>  $headers
      )
    );
    $context = stream_context_create($opts);
    $result = json_decode(file_get_contents($gateway . $uri, false, $context));

    return $result;

    // Return the twig
    $template_html = 'partials/debug.html.twig';
    $template_vars = [
      'result'  => $result
    ];
    $output = $this->grav['twig']->twig()->render($template_html, $template_vars);

    return $output;
  }

}
