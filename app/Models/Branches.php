<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class Branches extends Model
{
    public $connection = "mysql";

    public $table = "branches";

    public $primary_key = "id";

    
	public $id;
	public $name;
	public $created_at;
	public $updated_at;

}