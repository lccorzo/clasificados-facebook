<?
class Clasificado extends ActiveRecord
{
    public function initialize() {
		$this->has_many('imagen');
        $this->belongs_to('subcategoria');
       	$this->belongs_to('usuario');    
	}

    public function getClasificados($pagina,$cantidad=9){
       // return $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        return $clasificados = $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        
    }

    
}

?>