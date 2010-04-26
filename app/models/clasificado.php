<?
class Clasificado extends ActiveRecord
{
    public function getClasificados($pagina,$cantidad=20){
        return $this->paginate("page: $pagina", "per_page: $cantidad");           
    }
    
}

?>