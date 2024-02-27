<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class albums extends Model
{
    use HasFactory;
    protected $table ='albums';
    protected $fillable = [
        'nama_album',
        'deskripsi',
        'user_id',
    ];
    public function user(){
        // album mengambil id user
        return $this->belongsTo(User::class);

    }
    public function photo(){
        // album memiliki banyak photo
        return $this->hasMany(photo::class,'album_id');
    }
}
