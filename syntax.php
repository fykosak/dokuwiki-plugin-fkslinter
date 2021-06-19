<?php

class syntax_plugin_fksvlna extends DokuWiki_Syntax_Plugin {

    public function getType() {
        return 'substition';
    }

    public function getPType() {
        return 'normal';
    }

    public function getAllowedTypes() {
        return [];
    }

    public function getSort() {
        return 99999;
    }

    public function connectTo($mode) {
        $this->Lexer->addSpecialPattern('~', $mode, 'plugin_fksvlna');
    }

    public function handle($match, $state, $pos, Doku_Handler $handler) {
        return $state;
    }

    public function render($mode, Doku_Renderer $renderer, $state) {
        if ($mode == 'xhtml') {
            if ($state == DOKU_LEXER_SPECIAL) {
                $renderer->doc .= '&nbsp;';
                return true;
            }
        }
        return false;
    }
}
