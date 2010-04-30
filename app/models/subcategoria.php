<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2010
 */

class Subcategoria extends ActiveRecord
{
    public function initialize() {
        $this->belongs_to('categoria');
		$this->has_many('clasificado');
	}

}


?>