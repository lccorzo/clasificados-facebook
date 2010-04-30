<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2010
 */


class Categoria extends ActiveRecord
{
    public function initialize() {
        $this->has_many('subcategoria');
        
	}
    public function getClasificados($pagina,$cantidad=8){
       // return $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        return $clasificados = $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        
    }
}
?>