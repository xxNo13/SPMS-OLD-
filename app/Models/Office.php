<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasFactory;

    protected $table = 'offices';
    protected $primaryKey = 'id';
    protected $fillable = [
        'office'
    ];

    public function user(){
        return $this->hasMany(User::class);
    }
}
