<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    //if name and table name are different
    protected $table = 'food';
    //if you donot want to use default table name
    protected $primaryKey = 'id';
    //if you donot want to use created_at and updated_at
    public $timestamps = true;
    // protected $dateFormat = 'h:m:s';
    protected $fillable = [
        'name',
        'description',
        'image_path',
        'category_id',
        'count',
    ];
    public function category()
    {
        return $this -> belongsTo(Category::class);
    }
}
