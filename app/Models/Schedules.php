<?php
namespace App\Models;

use App\Studio;
use crocodicstudio\cbmodel\Core\Model;
use phpDocumentor\Reflection\Types\This;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class Schedules extends Model
{
    public $connection = "mysql";

    public $table = "schedules";

    public $primary_key = "id";
    
	public function movies(){
		return $this->belongsTo(Movies::class, $this->movie_id , 'id');

	}

	public $id;
	public $movie_id;
	public $studio_id;
	public $start;
	public $end;
	public $price;
	public $created_at;
	public $updated_at;

	public function movie() {
        return Movies::find($this->movie_id);
    }
	public function studio(){
		return Studio::find($this->studio_id);
	}
}