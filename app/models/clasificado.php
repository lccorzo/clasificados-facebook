<?
class Clasificado extends ActiveRecord
{
    public $models = array('clasificado');
    public $imagenes;
    public function initialize() {
		$this->has_many('imagen');
	}

    public function getClasificados($pagina,$cantidad=20){
       // return $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        $clasificados = $this->paginate("page: $pagina", "per_page: $cantidad",'order: id desc');
        foreach ($clasificados->items as $item){

        } 
    }
    
}

?>