<?php
class PluginBootstrapModal{
  public function widget_modal($data){
    $wdata = new PluginWfArray(array('size' => 'lg'));
    $wdata->merge($data['data']);
    $wdata->set('dialog_class', 'modal-dialog modal-'.$wdata->get('size'));
    $element = new PluginWfYml(__DIR__.'/element/modal.yml');
    $element->setByTag($wdata->get(), 'rs', true);
    wfDocument::renderElement($element->get());
  }
}