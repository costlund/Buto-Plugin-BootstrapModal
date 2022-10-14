<?php
class PluginBootstrapModal{
  public function widget_modal($data){
    /**
     * 
     */
    $wdata = new PluginWfArray(array('size' => 'lg', 'btn_close' => true, 'icon' => '', 'icon_src' => null));
    $wdata->merge($data['data']);
    /**
     * size
     */
    $wdata->set('dialog_class', 'modal-dialog modal-'.$wdata->get('size'));
    /**
     * body
     */
    $wdata->set('id_body', $wdata->get('id').'_body');
    /**
     * icon
     */
    if($wdata->get('icon')){
      $wdata->set('icon_src', '/plugin/icons/octicons/build/svg/'.$wdata->get('icon').'.svg');
    }
    /**
     * 
     */
    $element = new PluginWfYml(__DIR__.'/element/modal.yml');
    $element->setByTag($wdata->get(), 'rs', true);
    wfDocument::renderElement($element->get());
  }
}