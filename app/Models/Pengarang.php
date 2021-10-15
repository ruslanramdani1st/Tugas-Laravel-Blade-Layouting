<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengarang extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'tlp',
    ];

    public function book()
    {
        return $this->hasMany(book::class, 'pengarang_id');
    }
}
