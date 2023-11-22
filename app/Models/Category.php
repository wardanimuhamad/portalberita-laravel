<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'deskripsi'
    ];
    /*
    konfigurasi tambahin jika ingin me-non aktif-kan increment dan created_at serta updated_at
    public $incrementing = false;
    public $timestamps = false;
    */
}
