<?php
class PluginBootstrapModal{
  public function widget_modal($data){
    $wdata = new PluginWfArray(array('size' => 'lg', 'btn_close' => true));
    $wdata->merge($data['data']);
    $wdata->set('dialog_class', 'modal-dialog modal-'.$wdata->get('size'));
    $wdata->set('id_body', $wdata->get('id').'_body');
    $element = new PluginWfYml(__DIR__.'/element/modal.yml');
    $element->setByTag($wdata->get(), 'rs', true);
    wfDocument::renderElement($element->get());
  }
}