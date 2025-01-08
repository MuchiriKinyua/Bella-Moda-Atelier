<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bridal extends Model
{
    public $table = 'bridals';

    public $fillable = [
        'name',
        'description'
    ];

    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:100',
        'description' => 'nullable|string|max:600',
        'created_at' => 'required',
        'updated_at' => 'required'
    ];

    
}
