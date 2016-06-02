<?php

namespace jquery\ui{
    
    /* Prevent Direct Access */
    defined('ADAPT_STARTED') or die;
    
    class bundle_jquery_ui extends \adapt\bundle{
        
        public function __construct($data){
            parent::__construct('jquery_ui', $data);
        }
        
        public function boot(){
            if (parent::boot()){
                
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/jquery_ui/jquery_ui-{$this->version}/static/css/jquery-ui.min.css")));
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/jquery_ui/jquery_ui-{$this->version}/static/css/jquery-ui.structure.min.css")));
                $this->dom->head->add(new html_link(array('type' => 'text/css', 'rel' => 'stylesheet', 'href' => "/adapt/jquery_ui/jquery_ui-{$this->version}/static/css/jquery-ui.theme.min.css")));
                $this->dom->head->add(new html_script(array('type' => 'text/javascript', 'src' => "/adapt/jquery_ui/jquery_ui-{$this->version}/static/js/jquery-ui.min.js")));
                
                return true;
            }
            
            return false;
        }
        
    }
    
    
}

?>