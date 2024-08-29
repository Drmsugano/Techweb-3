<?php

class Util {

	/**
     * retorna data atual
     */
    public function dataAtual($tipo) {
        switch($tipo) {
            case 1: $rst = date("Y-m-d"); break;
            case 2: $rst = date("Y-m-d H:i:s"); break;
            case 3: $rst = data("d/m/Y"); break;
        }
        return $rst;
    }
	
}

?>
