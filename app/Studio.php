<?php

namespace App;
use App\Branche;

use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
    protected $fillable = [
        'name','additional_saturday_price','additional_sunday_price','additional_friday_price','price'
    ];
    public function branch(){
        return $this->belongsTo(Branche::class, 'branch_id', 'id');
    }
}
