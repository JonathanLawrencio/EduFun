<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    //
// Menentukan nama tabel secara eksplisit
// protected $table = 'Writer';

// Kolom yang bisa diisi (mass assignment)
// protected $fillable = ['name'];

    use HasFactory;

    protected $table = 'writer';
    protected $guarded = ['id'];


    // public function articleToWriter(){
    // return $this->belongsTo(Writer::class);
    // }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
