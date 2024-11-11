<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class historique extends Model
{
    use HasFactory;
    protected $table = 'historique';
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
