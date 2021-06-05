<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class Schedules extends Model
{
    public $connection = "mysql";

    public $table = "schedules";

    public $primary_key = "id";

    
	public $id;
	public $movie_id;
	public $studio_id;
	public $start;
	public $end;
	public $price;
	public $created_at;
	public $updated_at;

}