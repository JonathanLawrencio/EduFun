<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit
    // protected $table = 'article';

    // Kolom yang bisa diisi (mass assignment)
    // protected $fillable = ['content'];


    protected $table = 'article';

    protected $guarded = ['id'];


    public function writer()
    {
        return $this->belongsTo(Writer::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
