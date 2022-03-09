<?php
class PluginBootstrapModal{
  public function widget_modal($data){
    $element = new PluginWfYml(__DIR__.'/element/modal.yml');
    $element->setByTag($data['data'], 'rs', true);
    wfDocument::renderElement($element->get());
  }
}