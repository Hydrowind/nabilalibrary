<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Student;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'date',
        'return_date',
        'student_id',
        'book_id',
    ];

    public function book(){
        return $this->belongsTo(Book::class);
    }
    public function student(){
        return $this->belongsTo(Student::class);
    }
}
