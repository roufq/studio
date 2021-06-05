<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class Admins extends Model
{
    public $connection = "mysql";

    public $table = "admins";

    public $primary_key = "id";

    
	public $id;
	public $name;
	public $email;
	public $email_verified_at;
	public $password;
	public $remember_token;
	public $created_at;
	public $updated_at;

}