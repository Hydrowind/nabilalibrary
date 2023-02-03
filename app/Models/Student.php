<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaction;

class Student extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id',
        'fullname',
        'class',
        'phone_number',
    ];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
}
