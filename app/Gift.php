<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    public $table = "gifts";
    public $priamry_key = "id";
    public $fillable = [
    	'name',
        'image',
        'category_id',
    ];
    public $dates = ['created_at', 'updated_at'];

    public function Category() {
        return $this->belongsTo(Category::class);
    }
}
