<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description'
    ];
    /*
    konfigurasi tambahin jika ingin me-non aktif-kan increment dan created_at serta updated_at
    public $incrementing = false;
    public $timestamps = false;
    */
}
