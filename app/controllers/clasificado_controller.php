<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2010
 */

class ClasificadoController extends ApplicationController {
    public $models = array('clasificado');  
    public function index($page=1) 
    {
        $this->clasificados = $this->Clasificado->getClasificados($page);
    }

}

?>