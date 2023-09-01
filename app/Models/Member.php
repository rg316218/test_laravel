<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = ['name','tel','email'];

    // public function Member()
    // {
    //     return $this->belongsTo(Member::class,'name','tel','email');
    // }
}
