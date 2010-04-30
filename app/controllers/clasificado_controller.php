<?php

/**
 * @author www.intercambiosvirtuales.org
 * @copyright 2010
 */

class ClasificadoController extends ApplicationController {
    public $models = array('clasificado','categoria','subcategoria');  
    public function index($page=1) 
    {
        $this->clasificados = $this->Clasificado->getClasificados($page);
        $this->categorias = $this->Categoria->find('order: nombre');
    }
    
    public function detalles($id=-1) 
    {
        if($id!=-1){
            $this->clasificado = $this->Clasificado->find($id);
                
        }else{
            Router::route_to('action: index');
        }
        
    }
    public function categoria($categoria=null) 
    {
        if($categoria!=null){
            $this->clasificados = $this->Clasificado->paginate_by_sql("select c.* from clasificado c,subcategoria sc where sc.categoria_id = $categoria and c.subcategoria_id = sc.id");
            $this->categoria=$categoria;
            $this->subcategorias = $this->Subcategoria->find('conditions: categoria_id='.$categoria,'order: nombre');
        }else{
            Router::route_to('action: index');
        }
    }
    public function subcategoria($subcategoria=null) 
    {
        $this->clasificados = $this->Clasificado->paginate_by_sql("select c.* from clasificado c,subcategoria sc where sc.id = $subcategoria");
        $this->subcategoria=$subcategoria;
        $this->subcategorias = $this->Subategoria->findbysql('select * from subcategoria where categoria_id = (select categoria_id from subcategoria where id = $subcategoria)');
    }
}

?>