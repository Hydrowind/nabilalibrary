<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'year',
        'author',
        'publisher',
        'page',
        'category',
        'quantity',
        'coverUrl',
        'description',
        'synopsis'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
