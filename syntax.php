<?php

/**
 * @license    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author Michal Červeňák <miso@fykos.cz>
 */
if(!defined('DOKU_INC')){
    die();
}
if(!defined('DOKU_PLUGIN')){
    define('DOKU_PLUGIN',DOKU_INC.'lib/plugins/');
}

class syntax_plugin_fksvlna extends DokuWiki_Syntax_Plugin {

    public function getType() {
        return 'substition';
    }

    public function getPType() {
        return 'normal';
    }

    public function getAllowedTypes() {
        return array();
    }

    public function getSort() {
        return 99999;
    }

    public function connectTo($mode) {
        $this->Lexer->addSpecialPattern('~',$mode,'plugin_fksvlna');
    }

    /**
     * Handle the match
     */
    public function handle($match,$state) {
        return $state;
    }

    public function render($mode,Doku_Renderer &$renderer,$state) {
        if($mode == 'xhtml'){
            
            if($state == DOKU_LEXER_SPECIAL){
                    $renderer->doc.= '&nbsp;';
            }
        
        }
        return false;
    }

}
