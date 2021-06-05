<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class Movies extends Model
{
    public $connection = "mysql";

    public $table = "movies";

    public $primary_key = "id";

    
	public $id;
	public $name;
	public $minute_length;
	public $picture_url;
	public $created_at;
	public $updated_at;

}