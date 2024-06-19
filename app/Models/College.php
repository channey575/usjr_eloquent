<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class college extends Model
{
    use HasFactory;

    protected $fillable = ['collid', 'collfullname', 'collshortname'];

    public function students() {
        return $this->hasMany(student::class);
    }

    public function programs() {
        return $this->hasMany(program::class);
    }

    public function departments() {
        return $this->hasMany(department::class);
    }
}
