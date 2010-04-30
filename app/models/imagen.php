<?
class Imagen extends ActiveRecord
{
    public function initialize() {
		$this->belongs_to('clasificado');
	}

}

?>