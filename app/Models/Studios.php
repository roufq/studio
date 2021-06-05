<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;
use App\Models\Branches;

class Studios extends Model
{
    public $connection = "mysql";

    public $table = "studios";

    public $primary_key = "id";

	public function branch() {
		return $this->belongsTo(Branches::class, "branch_id", "id");
	}
    
	public $id;
	public $name;
	public $branch_id;
	public $basic_price;
	public $additional_friday_price;
	public $additional_saturday_price;
	public $additional_sunday_price;
	public $created_at;
	public $updated_at;

}