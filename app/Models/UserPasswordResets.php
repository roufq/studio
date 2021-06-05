<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class UserPasswordResets extends Model
{
    public $connection = "mysql";

    public $table = "user_password_resets";

    public $primary_key = "";

    
	public $email;
	public $token;
	public $created_at;

}