<?php

/*
 * Prevent direct access
 */
defined('ADAPT_STARTED') or die;
use \frameworks\adapt as adapt;

$adapt = $GLOBALS['adapt'];


$adapt->dom->head->add(new adapt\html_script(array('type' => 'text/javascript', 'src' => '/adapt/extensions/jquery_ui/static/js/jquery-ui.min.js')));
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/extensions/jquery_ui/static/css/jquery-ui.min.css')));
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/extensions/jquery_ui/static/css/jquery-ui.structure.min.css')));
$adapt->dom->head->add(new adapt\html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => '/adapt/extensions/jquery_ui/static/css/jquery-ui.theme.min.css')));

?>