<?php
namespace App\Models;

use crocodicstudio\cbmodel\Core\Model;

class AdminPasswordResets extends Model
{
    public $connection = "mysql";

    public $table = "admin_password_resets";

    public $primary_key = "";

    
	public $email;
	public $token;
	public $created_at;

}