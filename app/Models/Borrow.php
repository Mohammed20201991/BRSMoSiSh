<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Borrow extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'reader_id',
        'book_id',
        'status',
        'request_processed_at',
        'request_managed_by',
        'deadline',
        'returned_at',
        'return_managed_by'
    ];

    public function Book() {
        return $this->hasOne(Book::class, 'id', 'book_id');
    }

    public function Reader() {
        return $this->hasOne(User::class, 'id', 'reader_id');
    }

    public function Processed() {
        return $this->hasOne(User::class, 'id', 'request_managed_by');
    }

    public function Returned() {
        return $this->hasOne(User::class, 'id', 'return_managed_by');
    }

}
