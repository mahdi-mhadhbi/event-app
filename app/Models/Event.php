<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'title',
        'start_date',
        'end_date',
        'price',
        'description',
        'loccation',
        'image',
        'organizer_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'organizer_id');
    }
}
